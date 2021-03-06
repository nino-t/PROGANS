<?php 
include 'app/Artikel.php'; 
$title = "Kesini.com - Artikel";
?>
<div id="subheader2" data-type="background" data-speed="3">
    <div id="subheader2-inner" class="inner-block">
        <div class="site-name">Blog Kesini.com</div>
        <p class="site-description">Share untuk membuktikan bahwa Indonesia itu kaya</p>
    </div>
</div>
<div id="content" class="site-content">
    <div class="top-section"></div>
    <div class="container main-content-area">
        <a href="<?php echo URL::link('artikel/baru') ?>" class="btn btn-primary" style="margin-bottom:10px;">
            <i class="fa fa-edit"></i> Buat Artikel Baru
        </a>
        <div class="row">
            <div class="col-lg-7 content">
                <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()){ 
                    $article_pict = !empty($row['article_pict'])?URL::Base().'/uploads/article_cover/'.$row['article_pict']:URL::Link('assets/images/no-image.png'); ?>
                <div>
                    
                    
                    <p class="thumbnail home-thumb">
                        <a href="<?php echo URL::Link('artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>">
                            <img src="<?php echo $article_pict?>" alt="<?php echo $row['article_pict'] ?>">
                        </a>
                    </p>
                    <h2 style="font-size:40px;">
                        <a href="<?php echo URL::Link('artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>">
                            <?php echo $row['article_title'] ?>
                        </a>
                    </h2>
                    <div>
                        <?php echo substr($row['article_content'], 0,100) ?>
                    </div>
                    <p>
                        <a href="<?php echo URL::Link('artikel/baca/'.$row['article_id'].'/'.$row['article_slug']); ?>" class="btn btn-primary">Lihat Selengkapnya</a>
                    </p>
                </div>
                <hr>
                <?php } ?>
                
                <?php echo $renderPagination ?>
                
                <?php else: ?>
                
                <div class="well well-sm">
                    <div class="text-center">Tidak Ada Data</div>	
                </div>
                <?php endif ?>
            </div>
            <div class="col-lg-5">
            	<div class="panel panel-default">
					  <div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-list"></i> Kategori</h3>
					  </div>
						<ul class="list-group">
							<?php 
								$categoryQuery = $db->query("SELECT category_id,sub_category_id,category_name 
															 FROM category 
															 WHERE category_sts = 1 AND sub_category_id = 0");
								while($rowCat = $categoryQuery->fetch_assoc()){
							?>
								<a href="<?php echo URL::Link('artikel/c/'.$rowCat['category_id']) ?>" class="list-group-item">
									<?php echo $rowCat['category_name'] ?>
								</a>
							<?php } ?>
						</ul>
				</div>
                <div class="panel panel-primary">
					  <div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-list"></i> Artikel Populer</h3>
					  </div>
						<ul class="list-group">
							<?php 
								$popularQuery = $db->query("SELECT article_id,article_slug,article_title,
														 article_content,jumlahViewer,jumlahLike
														FROM v_article 
														WHERE article_sts = 1
														ORDER BY jumlahViewer DESC,jumlahLike DESC LIMIT 5;"); 
								while($rowPop = $popularQuery->fetch_assoc()){
							     $article_pict = !empty($rowPop['article_pict'])?URL::Base().'/uploads/article_cover/'.$rowPop['article_pict']:URL::Link('assets/images/no-image.jpg');
                            ?>
                            <li class="list-group-item">
                                
                            
                            <div class="media" style="margin-top:-30px;">
                              
                              <div class="media-body">
                                <h4 class="media-heading" style="padding-top:30px;">
                                    <a  href="<?php echo URL::Link('artikel/baca/'.$rowPop['article_id'].'/'.$rowPop['article_slug']) ?>" >
                                        <?php echo $rowPop['article_title'] ?> 
                                    </a>
                                </h4>
                                <?php echo substr($rowPop['article_content'], 0,60) ?>
                              </div>
                            </div>
								
							</li>	
							<?php } ?>
							
						</ul>
				</div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript'>
//<![CDATA[
$(function() {
    if ($('.side').length) { // Ganti "#sticky-sidebar" dengan ID tertentu
        var el = $('.side');
        var stickyTop = $('.side').offset().top;
        var stickyHeight = $('.side').height();
        $(window).scroll(function() {
          var limit = $('.footerWrap').offset().top - stickyHeight - 105; // Jarak berhenti di "#footer-wrapper"
          var windowTop = $(window).scrollTop();
          if (stickyTop < windowTop) {
            el.css({
                width: 400,
                position: 'fixed',
                top: 80,
                right: 150 // Jarak atau margin sticky dari atas
            });
          } else {
            el.css('position', 'static').addClass('sticky');;
          }
          if (limit < windowTop) {
            var diff = limit - windowTop;
            el.css({
              top: diff,

            });
          }
        });
    }
});
//]]>
</script>  