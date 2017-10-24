<?php include 'app/Kategori.php'; ?>
<div class="side-body padding-top">
	<h1>List Kategori</h1>
	<a href="<?php echo URL::Link('kategori/baru') ?>" style="margin-bottom:10px;" class="btn btn-primary">
		<i class="fa fa-plus"></i> Tambah Kategori
	</a>

	<?php if ($result->num_rows > 0): ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center" width="5%">No</th>
					<th class="text-center">Nama Kategori</th>
					<th class="text-center">Sub Kategori</th>
					<th class="text-center">Deskripsi Kategori</th>
					<th class="text-center">Ikon Peta</th>
					<th class="text-center">Aksi</th>
				</tr>
			</thead>
			<tbody> 
				<?php $no=1; ?>
				<?php while($row = $result->fetch_assoc()){ ?>				
				<tr>
					<td class="text-center" width="5%"><?php echo $no; ?></td>					
					<td><?php echo $row['category_name'] ?></td> 
					<td class="text-center">
						<?php 
							$subQuery = $db->query("SELECT category_name,sub_category_id FROM category WHERE category_id = '$row[sub_category_id]' "); 
							$rowSub = $subQuery->fetch_assoc();
							echo $row['sub_category_id'] == 0 ?'Kategori Utama':$rowSub['category_name'];
						?>
					<td><?php echo $row['category_desc'] ?></td> 
					<td><img src="<?php echo URL::Link('../uploads/map_icon/'.$row['map_icon']) ?>" alt="<?php echo $row['map_icon'] ?>"></td> 
					</td>
					<td class="text-center">
						<a href="<?php echo URL::Link('kategori/delete/'.$row['category_id']) ?>" onclick = "return confirm('Anda Yakin Akan Menghapus Kategori <?php echo $row["category_name"] ?>')" class="btn btn-danger btn-sm">
							<i class="fa fa-trash-o"></i>
						</a>
						<a href="<?php echo URL::Link('kategori/edit/'.$row['category_id']) ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-pencil"></i>
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