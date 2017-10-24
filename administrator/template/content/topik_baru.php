<?php 
	include '../app/Topik.php';
	$auth->required(URL::Link('masuk'));
	$title="Admin - Buat Topik Baru";
?>
<div class="side-body padding-top">
	<form action="<?php echo URL::Current() ?>" method="POST" class="form-horizontal" role="form">
			<input type="hidden" name="id" value="<?php echo $thread_id ?>">
			<input type="hidden" name="act" value="<?php echo $act ?>">
			<div class="form-group">
				<legend><h1>Buat Topik Baru</h1></legend>
				<?php echo isset($errorCaptcha)?$errorCaptcha:''; ?>
			</div>
			<?php if($act == "add"){ ?>
			<div class="form-group">
				<label for="kategori">Kategori</label>
				<select required name="kategori" id="" class="form-control">
					<option value="">--Pilih Kategori--</option>
					<?php while($row = $list_category->fetch_assoc()){ 
						$selected = ($row['category_id'] == $category_id)?'selected':'';
					?>
						<option <?php echo $selected ?> value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
						<?php 
							$subKategoriQuery = $db->query("SELECT category_id,category_name FROM category WHERE sub_category_id = '$row[category_id]'");
							while($rowSubKat = $subKategoriQuery->fetch_assoc()){
						?>
						<option value="<?php echo $rowSubKat['category_id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowSubKat['category_name'] ?></option>
						<?php } ?>			
					<?php } ?>
				</select>
			</div>
			<?php } ?>
			<div class="form-group">
				<label for="provinsi">Provinsi</label>
				<select onchange="chain_combobox()" name="provinsi" id="provinsi" class="form-control" required>
					<option value="">--Pilih Provinsi--</option>
					<?php 
						$provinsiQuery = $db->query("SELECT * FROM master_provinsi");
						while($rowProvinsi = $provinsiQuery->fetch_assoc()){
					 ?>
						<option value="<?php echo $rowProvinsi['provinsi_id'] ?>"><?php echo $rowProvinsi['provinsi_nama'] ?></option>
					 <?php } ?>
				</select>
			</div>
			<div class="form-group" id="inputkab">
				<label for="kabupaten">Kabupaten</label>
				<select name="kabupaten" id="kabupaten" class="form-control" required></select>
			</div>
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" class="form-control" name="judul" value="<?php echo $thread_title ?>" required>
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="20" name="isi" id="isi" required><?php echo $thread ?></textarea>
			</div>
			<div class="form-group">
				<label for="captcha">Kode Verifikasi</label><br>
				<img src="<?php echo URL::Link('../app/lib/captcha.php') ?>" alt=""><br><br>
				<input type="text" autocomplate="off" name="captcha" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary col-lg-12">
			</div>
	</form>
</div>  