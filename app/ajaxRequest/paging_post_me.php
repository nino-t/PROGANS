<?php
session_start(); 
include '../config/config.php';
include '../lib/Pagination.php';
include '../lib/Url.php';
include '../lib/Auth.php';
$auth = new Auth();

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
			<th>Aksi</th>
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
			<td>
				<a href="<?php echo URL::Link('../../forum/topik/delete/'.$rowTopik['thread_id']); ?>" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>
				<a href="<?php echo URL::Link('../../forum/topik/edit/'.$rowPost['post_id']); ?>" class="btn btn-default btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
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

<?php  } else if($_GET['o'] == 'artikel') {
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
  			<th>Aksi</th>
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
  			<td>
  				<a href="<?php echo URL::Link('../../artikel/delete/'.$rowArtikel['article_id']); ?>" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash-o"></i></a>
  				<a href="<?php echo URL::Link('../../artikel/edit/'.$rowArtikel['article_id']); ?>" class="btn btn-default btn-xs" title="Edit"><i class="fa fa-edit"></i></a>
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
<?php } else {
	$str = '';
	$response = '';
	$posisi = $paging->cariPosisi($batas);
	$user_id = $auth->getSession('user_id');
	$result = $db->query("SELECT * FROM notification WHERE user_id_parent = '$user_id' GROUP BY article_id,thread_id ORDER BY created_at DESC LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT notification_id FROM notification WHERE user_id_parent = '$user_id' GROUP BY article_id,thread_id ORDER BY created_at DESC ")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata,$batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalamanAjax($_GET['hal'],'page_notif',$jmlhalaman):'';
	if($alldata > 0){?>
		<ul class="list-group">
			
		<?php while ($rowNotif = $result->fetch_assoc()) {
			if ($rowNotif['thread_id'] == 0) {
				$query_data = $db->query("SELECT a.article_slug, a.article_id,a.article_title,c.username FROM v_article a
								LEFT JOIN notification b ON a.article_id = b.article_id
								LEFT JOIN users c ON b.user_id = c.user_id
								WHERE b.article_id = '$rowNotif[article_id]'
								ORDER BY b.created_at DESC");
	    		$jumlahNot = $query_data->num_rows;
	    		$jumlahOrang = $jumlahNot - 1;
	    		$row_data = $query_data->fetch_assoc();
	    		if ($jumlahNot > 1) {
		    		$str = $row_data['username']." dan ".$jumlahOrang." Orang Lainnya Berkomentar di Artikel ". '"'. $row_data['article_title'] .'"';
	    		} else {
		    		$str = $row_data['username']." Berkomentar di Artikel ". '"'. $row_data['article_title'] .'"';
	    		}
	    		echo "<a href='". URL::Link('../../artikel/baca/'.$row_data['article_id']) .'/'.$row_data['article_slug']."' class='list-group-item' title='". $str ."'>". $str ."</a>";
			
			 }else{ 
			 	$query_data = $db->query("SELECT a.thread_id,a.thread_slug,c.username,a.thread_title FROM v_thread a
								LEFT JOIN notification b ON a.thread_id = b.thread_id
								LEFT JOIN users c ON b.user_id = c.user_id
								WHERE b.thread_id = '$rowNotif[thread_id]' 
								ORDER BY b.created_at DESC");
	    		$jumlahNot = $query_data->num_rows;
	    		$jumlahOrang = $jumlahNot - 1;
	    		$row_data = $query_data->fetch_assoc();
	    		if ($jumlahNot > 1) {
		    		$str = $row_data['username']." dan ".$jumlahOrang." Orang Lainnya Memposting di Topik ". '"'.$row_data['thread_title'].'"';
	    		} else {
		    		$str = $row_data['username']." Memposting di Topik ". '"'.$row_data['thread_title'].'"';
	    		}
	    		echo "<a href='". URL::Link('../../forum/topik/baca/'.$row_data['thread_id'].'/'.$row_data['thread_slug']) ."' class='list-group-item' title='".$str."'>". $str ."</a>";
			 }
		?>
		<?php } ?>
		</ul>
		<?php echo $renderPagination ?>
<?php }else{?>
	<div class="panel-body">
		<div class="well well-sm text-center">Tidak Ada Pemberitahuan</div>
  	</div>
<?php } ?>

<?php } ?>


