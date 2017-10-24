<?php 
include 'app/Topik.php'; 

$auth->required(URL::Link('masuk'));

$title = "Kesini.com - $act_title";
?>

<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name"><?php echo $act_title ?></div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="top-section"></div>

    <div class="container main-content-area content">
        <form action="<?php echo URL::Current() ?>" method="POST" class="" role="form">
            <input type="hidden" name="id" value="<?php echo $thread_id ?>">
            <input type="hidden" name="act" value="<?php echo $act ?>">
            <div class="form-group">
                <?php echo isset($errorCaptcha)?$errorCaptcha:''; ?>
            </div>
            
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $thread_title ?>" required>
                <small class="help-block">Wajib Di Isi</small>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <small class="help-block">Wajib Di Isi</small>
                <textarea class="form-control" rows="20" placeholder="" name="isi" id="isi" required><?php echo $thread ?></textarea>
            </div>
            <?php if($act == "add"){ ?>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select required name="kategori" id="" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <?php while($row = $list_category->fetch_assoc()){ 
                        $selected = ($row['category_id'] == $category_id)?'selected':'';
                    ?>
                    <option <?php echo $selected ?> value="<?php echo $row['category_id'] ?>">
                        <?php echo $row['category_name'] ?>
                    </option>
                    <?php 
                        $subKategoriQuery = $db->query("SELECT category_id,category_name FROM category WHERE sub_category_id = '$row[category_id]'");
                        while($rowSubKat = $subKategoriQuery->fetch_assoc()){
                    ?>
                    <option value="<?php echo $rowSubKat['category_id'] ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $rowSubKat['category_name'] ?>
                    </option>
                    <?php } ?>			
                    <?php } ?>
                 </select>
                 <small class="help-block">Silakan Pilih Kategori</small>
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select onchange="chain_combobox()" name="provinsi" id="provinsi" class="form-control" required>
                    <option value="">Pilih Provinsi</option>
                    <?php 
                        $provinsiQuery = $db->query("SELECT * FROM master_provinsi");
                        while($rowProvinsi = $provinsiQuery->fetch_assoc()){
                     ?>
                    <option value="<?php echo $rowProvinsi['provinsi_id'] ?>"><?php echo $rowProvinsi['provinsi_nama'] ?></option>
                    <?php } ?>
                </select>
                <small class="help-block">Silakan Pilih Provinsi</small>
            </div>
            <div class="form-group" id="inputkab">
                <label for="kabupaten">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-control" required></select>
                <small class="help-block">Silakan Pilih Kabupaten</small>
            </div>
            <div class="form-group">
                <label for="captcha">Kode Verifikasi</label><br>
                        <img src="<?php echo URL::Link('app/lib/captcha.php') ?>" alt=""><br><br>
                        <input type="text" autocomplate="off" name="captcha" class="form-control">
                <small class="help-block">Masukkan Kode Verifikasi Dengan Benar</small>
            </div>
            <div class="form-group content">
                <input type="submit" value="KIRIM OBROLAN" name="simpan" class="btn btn-primary col-lg-12">
            </div>
        </form>
    </div>
</div>
<script>
	$("#inputkab").hide();
	function chain_combobox()
	{
		$("#kabupaten").html('<option value="">--Pilih Kabupaten--</option>');
		$.ajax({
			url : "<?php echo URL::Link('app/ajaxRequest/chain_combobox.php') ?>",
			type:"POST",
			data:{provinsi : $("#provinsi").val()},
			success: function(data){
				var res = JSON.parse(data);
                $("#inputkab").fadeIn();
                $('#kabupaten').append(res.option);
			},
			error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
		})
	}

	CKEDITOR.replace('isi',{
		height: 600,
		filebrowserUploadUrl: "<?php echo URL::Link('app/ajaxRequest/upload_ckeditor.php')?>"
	});
</script>