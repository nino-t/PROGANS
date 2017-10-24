<?php 
include '../config/config.php';
include '../lib/Pagination.php';
include '../lib/Url.php';
$keyword = $_GET['keyword'];
$paging = new Pagination();
$batas  = 10;
$posisi = $paging->cariPosisi($batas);
$result = $db->query("SELECT a.*,count(a.thread_id) as thread_view FROM v_thread a LEFT JOIN thread_view_log b ON a.thread_id = b.thread_id WHERE thread_title LIKE '".$keyword."%' GROUP BY a.thread_id LIMIT $posisi,$batas");
$alldata = $db->query("SELECT a.*,count(a.thread_id) as thread_view FROM v_thread a LEFT JOIN thread_view_log b ON a.thread_id = b.thread_id WHERE thread_title LIKE '".$keyword."%' GROUP BY a.thread_id ")->num_rows;
$jmlhalaman = $paging->jumlahHalaman($alldata,$batas);
$renderPagination = $jmlhalaman > 1?$paging->navHalamanAjax($_GET['hal'],'page_topik',$jmlhalaman):'';
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
					<p><a href="<?php echo URL::Link('../../forum/topik/baca/'.$row['thread_id'].'/'.$row['thread_slug']) ?>"><?php echo $row['thread_title'] ?></a></p>
					<small>
                        Oleh : <?php echo $row['name'] ?>
                        , <?php echo date("d-m-Y h:i",strtotime($row['created_at'])) ?>
                         | Di Lihat : <?php echo $row['jumlahViewer'] ?>
                         | Kategori <a href="<?php echo URL::Link('../../forum/c/'.$row['category_id']); ?>"><?php echo $row['category_name'] ?></a>
                         | Daerah <a href="<?php echo URL::Link('../../forum/k/'.$row['kota_id']); ?>"><?php echo $row['kokab_nama'] ?></a>,
                                  <a href="<?php echo URL::Link('../../forum/p/'.$row['provinsi_id']); ?>"><?php echo $row['provinsi_nama'] ?></a> 
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