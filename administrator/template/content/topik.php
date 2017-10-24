<?php include 'app/Topik.php'; ?>
<div class="side-body padding-top">	
	<h1>List Topik</h1>
	<a href="<?php echo URL::Link('topik/baru') ?>" style="margin-bottom:10px;" class="btn btn-primary">
		<i class="fa fa-plus"></i> Tambah Topik
	</a>	

	<?php if ($result->num_rows > 0): ?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Topik</th>
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
						<a href="<?php echo URL::Link('topik/detail/'.$row['thread_id']) ?>">
							<?php echo $row['thread_title'] ?>
						</a>
					</td>
					<td  class="text-center">
						<?php echo $row['created_at'] ?>
					</td>
					<td  class="text-center">
						<a href="<?php echo URL::Link('topik/delete/'.$row['thread_id']) ?>" class="btn btn-danger btn-sm">
							<i class="fa fa-trash-o"></i>
						</a>
						<a href="<?php echo URL::Link('topik/edit/'.$row['thread_id']) ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-pencil"></i>
						</a>
						<a href="<?php echo URL::Link('../forum/topik/baca/'.$row['thread_id'].'/'.$row['thread_slug']) ?>" title="Detail" class="btn btn-default btn-sm">
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