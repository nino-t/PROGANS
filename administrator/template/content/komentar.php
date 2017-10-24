<?php include 'app/Komentar.php'; ?>
<div class="side-body padding-top">
	<h1>List Komentar</h1>

	<?php if ($result->num_rows > 0): ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Nama Commenter</th>
					<th class="text-center">komen</th>
					<th class="text-center">Tanggal Comment</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				<?php while($row = $result->fetch_assoc()){ ?>				
				<tr>
					<td class="text-center" width="5%"><?php echo $no; ?></td>					
					<td><?php echo $row['username'] ?></td>
					<td class="text-center"><?php echo $row['comment'] ?></td>
					<td class="text-center"><?php echo $row['created_at'] ?></td>
					<td class="text-center">
						<a href="<?php echo URL::Link('komentar/delete/'.$row['comment_id']) ?>" class="btn btn-danger btn-sm">
							<i class="fa fa-trash-o"></i>
						</a>
						<a href="<?php echo URL::Link('../artikel/baca/'.$row['article_id'].'/'.$row['article_slug']) ?>" title="Detail" class="btn btn-primary btn-sm">
							<i class="fa fa-share"></i>
						</a>
					</td>
				</tr>				
				<?php $no++; ?>
				<?php } ?>
			</tbody>
		</table>
		<center>
		<?php
			echo $renderPagination;
		?>	
		</center>
	<?php else: ?>
		<div class="text-center">Tidak Ada Data</div>
	<?php endif ?>
</div>  