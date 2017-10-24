<?php include 'app/balasTopik.php'; 
	$auth->required(URL::Link('masuk'));
	$title = "Kesini.com - $page_title";
?>
<div id="subheader" data-type="background" data-speed="3">
    <div id="subheader-inner" class="inner-block">
        <div class="site-name"><?php echo $page_title ?></div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="top-section"></div>

    <div class="container main-content-area content">
		<?php if (isset($_GET['id']) && $act == 'add'){ ?>
		<div class="panel panel-default" style="margin-top:30px;">
		  	<div class="panel-heading">
				<h5>Membalas postingan : <?php echo $rowReply['post_title'] ?> </h5>
				<h5>Oleh : <?php echo $rowReply['username'] ?> </h5>
			</div>
		</div>
		<?php }else if(isset($_GET['quote_id'])){ ?>

		<?php }else{ ?>
			<div class="panel panel-default" style="margin-top:30px;">
			<div class="panel-heading">
			  <h5>Ubah Balasan</h5>
			</div>
		</div>
		<?php } ?>

		<form action="<?php echo URL::Current() ?>" id="form-balasan" method="POST" role="form">
				
				<input type="hidden" name="id" value="<?php echo $thread_id ?>">
				<input type="hidden" name="act" value="<?php echo $act ?>">
				
				
				<div id="errorCaptcha" class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span></span>
				</div>
					
				
				<div class="form-group">
					<label for="judul">Judul</label>
					<input type="text" class="form-control" name="judul" value="<?php echo $thread_title ?>">
					<small class="help-block">Boleh Di Isi Atau Tidak</small>
				</div>
				
				<div class="form-group">
					<label for="isi">Balasan</label>
					<small class="help-block">Harus Di Isi</small>
					<textarea class="form-control" rows="20" name="isi" id="isi" required><?php echo $thread ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="captcha">Kode Verifikasi</label><br>
					<img src="<?php echo URL::Link('app/lib/captcha.php') ?>" alt=""><br><br>
					<input type="text" name="captcha" class="form-control" required>
					<small class="help-block">Masukkan Kode Verifikasi Dengan Benar</small>
				</div>
				
				<div class="form-group content">
					<input type="submit" value="BALAS" name="balas" class="btn btn-primary col-lg-12">
				</div>

		</form>
	</div>
</div>

<script>
	CKEDITOR.replace('isi',{
		height: 600,
		filebrowserUploadUrl: "<?php echo URL::Link('app/ajaxRequest/upload_ckeditor.php')?>"
	});
	$("#errorCaptcha").hide();
	$("#form-balasan").submit(function(e){
		var val_isi = CKEDITOR.instances['isi'].getData();
		$.post('<?php echo URL::Link("app/ajaxRequest/balasTopik.php") ?>',
			$('#form-balasan').serialize()+"&isi2="+val_isi,function(data){
				var res = JSON.parse(data);
				if (res.status == 'success') {
					sendNotif();
					window.location = '<?php echo URL::Link("forum/topik/baca/".$thread_id."/".$slug) ?>';
				} else{
					$("#errorCaptcha").show();
					$("#errorCaptcha span").text(res.msg);
				};
				// alert(data);
			});
		e.preventDefault();
	})
</script>