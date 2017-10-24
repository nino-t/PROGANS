<div class="side-body padding-top">
    <div class="row" id="data-number-load">
    	<!-- buat data view number -->
    </div>
	<div class="card card-success">
    <div class="card-header">
        <div class="card-title">
            <div class="title"><i class="fa fa-comments-o"></i> Jumlah Artikel & Topik Per Provinsi</div>
        </div>
        <div class="clear-both"></div>
    </div>
    <!--<div class="card-body no-padding list-framered">
        <ul class="message-list">
        	
            <?php $all_art = $db->query("SELECT * FROM article JOIN users ON article.user_id = users.user_id WHERE article_sts = '1' ORDER BY article_id DESC LIMIT 4 "); ?>
            <?php if ($all_art->num_rows > 0): ?>

                <?php while($row = $all_art->fetch_assoc()){ 
                	$article_pict = !empty($row['article_pict'])?URL::Base().'../uploads/article_cover/'.$row['article_pict']:URL::Link('../assets/images/no-image.jpg'); ?>
                    <a href="<?php echo URL::Link('../artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>">
                        <li>
                            <?php $art_id = $row['article_id']; ?>
                            <img src="<?php echo $article_pict ?>" width="50" height="50" class="profile-img img-responsive pull-left">
                            <div class="message-block">
                                <div><span class="username"><?php echo $row['name'] ?></span> <span class="message-datetime"><?php echo $row['created_at']; ?></span>
                                </div>
                                <div class="message"><?php echo substr($row['article_content'], 0,100) ?></div>
                            </div>
                        </li>
                    </a>        
                <?php } ?>        
                    <a href="#" id="message-load-more">
                        <li class="text-center load-more show_more_main" id="show_more_main<?php echo $art_id; ?>">                                                                                
                            <span id="<?php echo $art_id; ?>" class="show_more" title="Load more posts"><i class="fa fa-refresh"></i>  Show more...</span>
                            <span class="loding" style="display: none;"><span class="loding_txt"><i class="fa fa-refresh"></i>  Loading...</span></span>                                        
                        </li>
                    </a>                                

            <?php else: ?>

                <div class="well well-sm">
                    <div class="text-center">Tidak Ada Data</div>   
                </div>

            <?php endif ?>  
        </ul>
    </div> -->
    <?php $all_provinsi = $db->query("SELECT * FROM master_provinsi"); ?>
    <?php $total_art = $all_provinsi->num_rows; ?>
    <table class="table table-bordered">
        <tr>
            <th>Provinsi</th>
            <th>Jumlah Artikel</th>
            <th>Jumlah Topik</th>
        </tr>
        <?php while($row_pro = $all_provinsi->fetch_assoc()){
            ?> 
        <tr>
                <?php 
                    $qArtikel = $db->query("SELECT COUNT(article_id) as jumlah FROM v_article WHERE provinsi_id = '$row_pro[provinsi_id]' AND article_sts = '1' ");
                    $rowArtikel = $qArtikel->fetch_assoc();
                    $qTopik = $db->query("SELECT COUNT(thread_id) as jumlah FROM v_thread WHERE provinsi_id = '$row_pro[provinsi_id]' AND thread_sts = '1' ");
                    $rowTopik = $qTopik->fetch_assoc();
                ?>
                <td><?php echo $row_pro['provinsi_nama']; ?></td>
                <td><?php echo $rowArtikel['jumlah']; ?></td>
                <td><?php echo $rowTopik['jumlah']; ?></td>

        </tr>
        <?php
             }
            ?>
    </table>

    </div>
</div>
