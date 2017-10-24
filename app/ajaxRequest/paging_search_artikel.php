<?php 
include '../config/config.php';
include '../lib/Pagination.php';
include '../lib/Url.php';
$keyword = $_GET['keyword'];
$paging = new Pagination();
$batas  = 10;
$posisi = $paging->cariPosisi($batas);
$result = $db->query("SELECT * FROM v_article WHERE article_title LIKE '".$keyword."%' LIMIT $posisi,$batas");
$alldata = $db->query("SELECT * FROM v_article WHERE article_title LIKE '".$keyword."%' ")->num_rows;
$jmlhalaman = $paging->jumlahHalaman($alldata,$batas);
$renderPagination = $jmlhalaman > 1?$paging->navHalamanAjax($_GET['hal'],'page_artikel',$jmlhalaman):'';
?>
<?php if ($alldata > 0): ?>
	<?php if (!empty($renderPagination)): ?>
		<div class="panel-body">
			<div class="pull-right">
				<?php echo $renderPagination; ?>
			</div>
		</div>
	<?php endif ?>
		<ul class="list-group">
			<?php while($row = $result->fetch_assoc()){ ?>
				<li  class="list-group-item">
					<p><a href="<?php echo URL::Link('../../artikel/baca/'.$row['article_id'].'/'.$row['article_slug']) ?>"><?php echo $row['article_title'] ?></a></p>
					<small>
                        Oleh : <?php echo $row['name'] ?>
                        , <?php echo date("d-m-Y h:i",strtotime($row['created_at'])) ?>
                         | Di Lihat : <?php echo $row['jumlahViewer'] ?>
                         | Kategori <a href="<?php echo URL::Link('../../artikel/c/'.$row['category_id']); ?>"><?php echo $row['category_name'] ?></a>
                         | Daerah <a href="<?php echo URL::Link('../../artikel/k/'.$row['kota_id']); ?>"><?php echo $row['kokab_nama'] ?></a>,
                                  <a href="<?php echo URL::Link('../../artikel/p/'.$row['provinsi_id']); ?>"><?php echo $row['provinsi_nama'] ?></a> 
                    </small>
				</li>
			<?php } ?>
		</ul>
	<?php if (!empty($renderPagination)): ?>
		<div class="panel-body">
			<div class="pull-right">
				<?php echo $renderPagination; ?>
			</div>
		</div>
	<?php endif ?>
<?php else: ?>
	<center>
		<div class="well well-sm">
			Tidak Ada Hasil Pencarian
		</div>
	</center>	
<?php endif ?>