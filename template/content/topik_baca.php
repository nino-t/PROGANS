<?php 

	include 'app/lib/Pagination.php';
	include 'app/balasTopik.php';
	include 'app/lib/Viewer.php';
	
	$id = $db->escape_string($_GET['thread_id']);
	$slug = isset($_GET['slug'])?$_GET['slug']:'';
	$thread = $db->query("SELECT thread_id,post_title 
							FROM v_thread_post WHERE thread_id = '$id' ");
	$r = $thread->fetch_assoc();

	$title= $r['post_title'];
	Viewer::Thread($db,$r['thread_id']);

	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM v_thread_post 
							WHERE thread_id = '$id' AND post_sts = 1 LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM v_thread_post 
							WHERE thread_id = '$id' AND post_sts = 1")->num_rows;
	if ($alldata == 0) {
		URL::Redirect('404notfound');
	}
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'forum/topik/baca/'.$id.'/'.$slug,$jmlhalaman):'';

?>
<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name">Forum Kesini.com</div>
        <p class="site-description">Mulai obrolan menarik mengenai budaya Indonesia</p>
    </div>
</div>

<div id="content" class="site-content">
    <div class="top-section"></div>
    <div class="container main-content-area">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-left">
                    <a href="<?php echo URL::Link('forum/topik/balas/'.$r['thread_id']) ?>" class="btn btn-primary btn-sm">Balas Topik</a>
                    <span id="like"></span>
                    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                    <div class="fb-share-button" data-href="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" data-layout="button">
                    </div>
                    <a class="twitter-share-button"
                      href="https://twitter.com/intent/tweet">
                    Tweet</a>
                </div>
            
            </div>
        </div>
        <div class="text-right">
            <?php echo $renderPagination ?>
        </div>
        <?php 
	     $no = 1;
	     while($row = $result->fetch_assoc()){
	        $post_no = $no + $posisi;
	        $user_photo = empty($row['photo_name'])?URL::Link('assets/images/user.png')
	        				:URL::Link('uploads/user_photo/'.$row['photo_name']);
	    ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo date("d-m-Y h:i",strtotime($row['created_at'])) ?></h3>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-center col-lg-2 col-md-3 col-sm-4 col-xs-4">
                                    <p><img src="<?php echo $user_photo ?>" width="100" height="100" alt="user.png"></p>
                                    <p>
                                        <a href="<?php echo URL::Link('profil/'.$row['username']) ?>">
                                            <?php echo $row['username'] ?>
                                        </a>
                                    </p>
                                    <p><small>Bergabung : <?php echo date("d-m-Y",strtotime($row['registered_at'])) ?></small></p>
                                </td>
                                <td class="col-lg-10 col-md-9 col-sm-8 col-xs-8">
                                    <h4><?php echo $row['post_title'] ?></h4>
                                    <hr>
                                    <p>
                                        <?php
					  						$filterquote = 	str_replace("<blockquote>","<div class='well well-sm'>",$row['content']);
					  						$filterquote2 =  str_replace("</blockquote>","</div>",$filterquote);
					  						echo $filterquote2;
					  					?>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="panel-footer">
                        <p class="text-right">
                            <?php if ($auth->getSession('user_id') == $row['user_id']){
                            $edit_url = ($post_no == 1)?'forum/topik/edit/'.$row['post_id']:'forum/topik/balas/edit/'.$row['post_id']; ?>
                            <a href="<?php echo URL::Link($edit_url); ?>" class="btn btn-primary btn-xs">Edit</a>
                            <?php } ?>
                            <a href="<?php echo URL::Link('forum/topik/quote/'.$row['post_id']) ?>" class="btn btn-primary btn-xs">Mengutip</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <?php $no++;} ?>
        <div class="text-right">
            <?php echo $renderPagination ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="<?php echo URL::Link('forum/topik/balas/'.$r['thread_id']) ?>" class="btn btn-primary btn-sm">Balas Topik</a>
            </div>
        </div>
    </div>
</div>

<script>
	 function loadLike() {        
        $.get("<?php echo URL::Link('app/ajaxRequest/cek_like_thread.php'."?id=".$r['thread_id']); ?>",function(data){
        	$("#like").html(data);
        });
    }
    
    
    // function auto load

    // function auto load list
    function likeArt() {        
		$.get('<?php echo URL::Link('app/ajaxRequest/Like_thr.php'."?id=".$r['thread_id']); ?>',
			function(data){					
				loadLike();					
			}
		);
    }

    loadLike();    
</script>