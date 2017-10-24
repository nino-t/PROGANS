<?php

	include 'app/lib/Pagination.php';

	$category_id = $_GET['kategori'];
	$categoryQuery = $db->query("SELECT * FROM category WHERE category_id = '$category_id' ");
	$rowCategory = $categoryQuery->fetch_assoc();
	$title = "Kesini.com - Forum ".$rowCategory['category_name'];
	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM v_thread WHERE thread_sts = 1 AND category_id = '$category_id' ORDER BY thread_id DESC LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM v_thread WHERE thread_sts = 1 AND category_id = '$category_id'")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'forum/c/'.$category_id,$jmlhalaman):'';
	$popularQuery2 = $db->query("SELECT * FROM v_thread
								WHERE thread_sts = 1
								ORDER BY jumlahViewer DESC,jumlahLike DESC
								LIMIT 5;"); 
?>
<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name">Forum <?php echo $rowCategory['category_name'] ?> Kesini.com</div>
        <p class="site-description"><?php echo $rowCategory['category_desc'] ?></p>
    </div>
</div>

<div id="content" class="site-content">
    <div class="top-section"></div>

    <div class="container main-content-area">
    	<a href="<?php echo URL::Link('forum/topik/baru'); ?>" class="btn btn-primary thread">
            <i class="fa fa-edit"></i> Buat Topik Baru
        </a>
        <div class="row">
    		<div class="col-lg-7 content" style="padding-top:20px;">
	        <?php 
	            $subCategoryQuery = $db->query("SELECT category_id,category_name FROM category WHERE sub_category_id = '$category_id' ");
	            if ($subCategoryQuery->num_rows > 0) {
	        ?>
	        <?php } ?>
	        <div class="panel panel-primary">
	            <div class="panel-heading">
	                <h3 class="panel-title" style="text-transform:capitalize">Topik <?php echo $rowCategory['category_name'] ?> Terbaru</h3>
	            </div>
	            <?php if ($result->num_rows > 0): ?>
	            <table class="table table-bordered table-striped">
	                <tbody>
	                    <?php while($row = $result->fetch_assoc()){ ?>
	                    <tr>
	                        <td>
	                            <div>
	                                <h3><a href="<?php echo URL::Link('forum/topik/baca/'.$row['thread_id'].'/'.$row['thread_slug']); ?>"><?php echo $row['thread_title'] ?></a></h3>
	                                <small>
								Oleh : <?php echo $row['name'] ?>
								, <?php echo date("d-m-Y h:i",strtotime($row['created_at'])) ?>
								 | Di Lihat : <?php echo $row['jumlahViewer'] ?>
								 | Kategori <a href="<?php echo URL::Link('forum/c/'.$row['category_id']); ?>"><?php echo $row['category_name'] ?></a>
								 | Daerah <a href="<?php echo URL::Link('forum/k/'.$row['kota_id']); ?>"><?php echo $row['kokab_nama'] ?></a>,
								 		  <a href="<?php echo URL::Link('forum/p/'.$row['provinsi_id']); ?>"><?php echo $row['provinsi_nama'] ?></a> 
							</small>
	                            </div>
	                        </td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
	            </table>

	            <?php echo $renderPagination ?>
	            <?php else: ?>
	            <div class="well well-sm">
	                <div class="text-center">Tidak Ada Data</div>
	            </div>
	            <?php endif ?>
	        </div>
    		</div>
    		<div class="col-lg-5">
                <div class="panel panel-default">
                      <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-list"></i> Kategori</h3>
                      </div>
                        <ul class="list-group">
                            <?php 
                            $categoryQuery = $db->query("SELECT category_id,category_name FROM category WHERE sub_category_id = 0");
                            while ($rowCategory = $categoryQuery->fetch_assoc()) {
                            ?>
                                <a class="list-group-item" href="<?php echo URL::Link('forum/c/'.$rowCategory['category_id']); ?>">
                                    <?php echo $rowCategory['category_name'] ?>
                                </a>
                            <?php } ?>
                        </ul>
                </div>
                <div class="panel panel-primary">
                      <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-list"></i> Topik Populer</h3>
                      </div>
                        <ul class="list-group">
                            <?php while($rowPopular2 = $popularQuery2->fetch_assoc()){ ?>
                                <a class="list-group-item" href="<?php echo URL::Link('forum/topik/baca/'.$rowPopular2['thread_id'].'/'.$rowPopular2['thread_slug']); ?>" class="wpp-post-title" target="_self">
                                   <?php echo $rowPopular2['thread_title'] ?>
                                </a>
                            
                            <?php } ?>
                        </ul>
                </div>
            </div>
    	</div>
	        
    
    </div>

</div>
