<?php include '../app/Pengguna.php'; ?>
<div class="side-body padding-top">
	<h1>List Pengguna</h1>

	<?php if ($result->num_rows > 0): ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Nama Pengguna</th>
					<th class="text-center">Tanggal Terdaftar</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				<?php while($row = $result->fetch_assoc()){ ?>				
				<tr>
					<td class="text-center" width="5%"><?php echo $no; ?></td>					
					<td><?php echo $row['name'] ?></td>
					<td class="text-center"><?php echo $row['registered_at'] ?></td>
					<td class="text-center">
						<a href="<?php echo URL::Link('pengguna/delete/'.$row['user_id']) ?>" class="btn btn-danger btn-sm">
							Blokir
						</a>
						<a href="<?php echo URL::Link('pengguna/edit/'.$row['user_id']) ?>" class="btn btn-primary btn-sm">
							Ganti Password
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