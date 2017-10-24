<?php include 'app/Artikel.php'; ?>
<div class="side-body padding-top">	
	<h1>List Artikel</h1>
	<a href="<?php echo URL::Link('artikel/baru') ?>" style="margin-bottom:10px;" class="btn btn-primary">
		<i class="fa fa-plus"></i> Tambah Artikel
	</a>	

	<?php if ($result->num_rows > 0): ?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Artikel</th>
					<th class="text-center" width="20%">Tanggal</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody> 
				<?php $no=1; ?>
				<?php while($row = $result->fetch_assoc()){ ?>				
				<tr>
					<td class="text-center"><?php echo $no; ?></td>
					<td>
						<a href="<?php echo URL::Link('artikel/detail/'.$row['article_id']) ?>">
							<?php echo $row['article_title'] ?>
						</a>
					</td>
					<td  class="text-center">
						<?php echo $row['created_at'] ?>
					</td>
					<td  class="text-center">
						<a href="<?php echo URL::Link('artikel/delete/'.$row['article_id']) ?>" class="btn btn-danger btn-sm">
							<i class="fa fa-trash-o"></i>
						</a>
						<a href="<?php echo URL::Link('artikel/edit/'.$row['article_id']) ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="<?php echo URL::Link('../artikel/baca/'.$row['article_id'].'/'.$row['article_slug']) ?>" title="Detail" class="btn btn-default btn-sm">
							<i class="fa fa-share"></i>
						</a>
					</td>
				</tr>				
				<?php $no++; ?>
				<?php } ?>
			</tbody>
		</table>
		<CENTER>
		<?php
			echo $renderPagination;
		?>	
		</CENTER>
	<?php else: ?>
		<div class="text-center">Tidak Ada Data</div>
	<?php endif ?>
</div>  