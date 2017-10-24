<?php 
include '../config/config.php';
include '../lib/Pagination.php';
include '../lib/Url.php';
$batas = 5;
$paging = new Pagination();
if ($_GET['o'] == "topik") {
$posisi = $paging->cariPosisi($batas);
$result = $db->query("SELECT * FROM v_thread WHERE user_id = '$_GET[user]' AND thread_sts = 1 LIMIT $posisi,$batas");
$alldata = $db->query("SELECT * FROM v_thread WHERE user_id = '$_GET[user]' AND thread_sts = 1")->num_rows;
$jmlhalaman = $paging->jumlahHalaman($alldata,$batas);
$renderPagination = $jmlhalaman > 1?$paging->navHalamanAjax($_GET['hal'],'page_topik',$jmlhalaman):'';
if($alldata > 0 ){
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Topik</th>
			<th>Kategori</th>
			<th>Statistik</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($rowTopik = $result->fetch_assoc()){
				$postQuery = $db->query("SELECT post_id,count(post_id) as jumlahPost FROM thread_post 
											WHERE user_id = '$_GET[user]' AND thread_id = '$rowTopik[thread_id]' AND post_sts = 1 LIMIT 1 ");
				$rowPost = $postQuery->fetch_assoc();
				$jumlahBalasan = $rowPost['jumlahPost'] - 1;
				$viewThreadQuery = $db->query("SELECT view_id FROM thread_view_log WHERE thread_id = '$rowTopik[thread_id]' ");
				$jumlahThreadViewer = $viewThreadQuery->num_rows;
		?>		
		<tr>
			<td><a href="<?php echo URL::Link('../../forum/topik/baca/'.$rowTopik['thread_id'].'/'.$rowTopik['thread_slug']); ?>"><?php echo $rowTopik['thread_title'] ?></a></td>
			<td><?php echo $rowTopik['category_name'] ?></td>
			<td>
				<p>Balasan: <?php echo $jumlahBalasan ?></p>
				<p>Dilihat: <?php echo $jumlahThreadViewer ?></p>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<?php echo $renderPagination ?>

<?php }else{ ?>
	<div class="panel-body">
	<div class="well well-sm text-center">Tidak Ada Topik</div>
	</div>
<?php } ?>

<?php  } else {
$posisi = $paging->cariPosisi($batas);
$result = $db->query("SELECT * FROM v_article WHERE user_id = '$_GET[user]' AND article_sts = 1 LIMIT $posisi,$batas");
$alldata = $db->query("SELECT * FROM v_article WHERE user_id = '$_GET[user]' AND article_sts = 1")->num_rows;
$jmlhalaman = $paging->jumlahHalaman($alldata,$batas);
$renderPagination = $jmlhalaman > 1?$paging->navHalamanAjax($_GET['hal'],'page_artikel',$jmlhalaman):'';
if($alldata > 0 ){
?>
<table class="table table-bordered">
  	<thead>
  		<tr>
  			<th>Artikel</th>
  			<th>Kategori</th>
  			<th>Statistik</th>
  		</tr>
  	</thead>
  	<tbody>
		<?php while($rowArtikel = $result->fetch_assoc()){ 
			$statQuery = $db->query("SELECT count(article_id) as jumlahKomen 
										FROM article_comment  WHERE user_id = '$_GET[user]' AND article_id = '$rowArtikel[article_id]' AND comment_sts = 1");
			$rowStat = $statQuery->fetch_assoc();
			$jumlahKomen = $rowStat['jumlahKomen'];
			$viewArticleQuery = $db->query("SELECT view_id FROM article_view_log WHERE article_id = '$rowArtikel[article_id]' ");
  			$jumlahArticleViewer = $viewArticleQuery->num_rows;
		?>
  		<tr>
  			<td><a href="<?php echo URL::Link('../../artikel/baca/'.$rowArtikel['article_id'].'/'.$rowArtikel['article_slug']); ?>"><?php echo $rowArtikel['article_title'] ?></a></td>
  			<td><?php echo $rowArtikel['category_name'] ?></td>
  			<td>
  				<p>Komentar: <?php echo $jumlahKomen ?></p>
  				<p>Dilihat: <?php echo $jumlahArticleViewer ?></p>
  			</td>
  		</tr>
  		<?php } ?>
  	</tbody>
  </table>
  <?php echo $renderPagination ?>
  <?php }else{ ?>
  	<div class="panel-body">
		<div class="well well-sm text-center">Tidak Ada Artikel</div>
  	</div>
  <?php } ?>
<?php } ?>


