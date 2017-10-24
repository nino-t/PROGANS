
<div class="side-body padding-top">
	<form action="<?php echo URL::Current() ?>" method="POST" class="form-horizontal" role="form">
		<input type="hidden" name="category_id" value="<?php echo $comment_id; ?>">
		<input type="hidden" name="act" value="<?php echo $act; ?>">
			<div class="form-group">
				<legend><h1><?php echo $title; ?></h1></legend>
			</div>
			<div class="form-group">
				<label for="kategori">Sub Kategori</label>
				<select name="subkategori" id="subkategori" class="form-control">
					<option value="0">Kategori Utama</option>
					<?php 
						$subkategori = $db->query("SELECT category_name,category_id 
														FROM category 
															WHERE sub_category_id = 0 AND category_sts = 1");
						while($rowSub = $subkategori->fetch_assoc()){
							$selected = $rowSub['category_id'] == $sub_catego	ry_id?'selected':'';
					?>
					<option <?php echo $selected ?> value="<?php echo $rowSub['category_id'] ?>"><?php echo $rowSub['category_name'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<input type="text" class="form-control" value='<?php echo $category_name ?>' name="kategori" required>
			</div>
			<div class="form-group">
				<label for="kategori">Deskripsi Kategori</label>
				<textarea type="text" class="form-control" value='' name="desk_kategori" required rows="5"><?php echo $category_desc ?></textarea>
			</div>
			
			<div class="form-group">
				<input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary col-lg-12">
			</div>
	</form>
</div>  