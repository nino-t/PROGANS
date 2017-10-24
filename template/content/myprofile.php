<?php 

	$auth->required('masuk');
	$title = "Kesini.com - Profil Saya";
	$user_id = $auth->getSession('user_id');
	$userQuery = $db->query("SELECT a.*,b.kokab_nama,c.provinsi_nama FROM users a
								INNER JOIN master_kokab b ON a.kota_id = b.kota_id
									INNER JOIN master_provinsi c ON c.provinsi_id = b.provinsi_id 
										WHERE user_id = '$user_id' ");
	$rowUser = $userQuery->fetch_assoc();

?>
<div id="content" class="site-content" style="margin-top:40px;">
    <div class="top-section"></div>

    <div class="container main-content-area">
		<div class="panel panel-default">
			  <div class="panel-heading">
					<h3 class="panel-title">Profil Saya</h3>
			  </div>
			  <table class="table table-bordered">
						<tbody>
							<tr>
								<td width="20%" align="center" rowspan="10">
									<div id="photo">
										<img src="" width="200px" height="200px" alt=""><br><br>
									</div>
									
									<button onclick="init_modal_foto()" class="btn btn-default">Ganti Foto</button>
								</td>
							</tr>
							<tr>
								<td width="20%">ID Pengguna:</td>
								<td width="2%">:</td>
								<td><?php echo $rowUser['user_id'] ?></td>
							</tr>
							<tr>
								<td width="20%">Nama Pengguna:</td>
								<td width="2%">:</td>
								<td><?php echo $rowUser['username'] ?></td>
							</tr>
							<tr>
								<td width="20%">Nama Lengkap:</td>
								<td width="2%">:</td>
								<td><?php echo $rowUser['name'] ?></td>
							</tr>
							<tr>
								<td width="20%">Tanggal Bergabung:</td>
								<td width="2%">:</td>
								<td><?php echo date("d-m-Y",strtotime($rowUser['registered_at'])) ?></td>
							</tr>
							<tr>
								<td width="20%">Daerah Asal</td>
								<td width="2%">:</td>
								<td><?php echo $rowUser['kokab_nama'].", ".$rowUser['provinsi_nama'] ?></td>
							</tr>
						</tbody>
					</table>
					<div class="panel-body">
						<a href="javascript:void()" onclick="init_modal_pass()" class="btn btn-default">Ubah Kata Sandi</a>
					</div>
		</div>
		<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Topik Saya</h3>
			  </div>
			  <div id="hasilTopik"></div>
		</div>
		<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Artikel Saya</h3>
			  </div>
			  <div id="hasilArtikel"></div>
		</div>
		<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Pemberitahuan</h3>
			  </div>
			  <div id="hasilNotif"></div>
		</div>
    </div>
</div>

<div class="modal fade" id="modal_foto">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<div id="error-upload-photo" class="alert"></div>
				<input type="hidden" id="selected-photo-id">
				<form method="POST" id="form-upload" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-lg-12">
							<label for="upload">Upload Gambar</label>
							<input type="file" id="gambar">
						</div>
					</div>
				</form>
				<button class="btn btn-primary col-lg-12" onclick="upload_gambar()">Upload Foto</button>
				<hr>
				<div class="row">
					<div id="selectPhoto" class="col-lg-4"></div>
				</div>
				
				<div id="list-photo"></div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				<button type="button" onclick="ganti_photo()" class="btn btn-primary">Ganti Foto</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_pass">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<div id="error-pass" class="alert alert-danger"></div>
				<form method="POST" id="form_ubah_pass" class="form-horizontal" role="form">
					
					<div class="form-group">
						<div class="col-lg-12">
							<label for="old_password">Kata Sandi Lama</label>
							<input type="password" class="form-control" required pattern="(?=.*).{5,}" id="old_password" name="old_password">
							<small class="help-block">Minimal 5 Digit</small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-12">
							<label for="new_password">Kata Sandi Baru</label>
							<input type="password" class="form-control" pattern="(?=.*).{5,}" onchange = "form.re_new_password.pattern = this.value;" required id="new_password" name="new_password">
							<small class="help-block">Minimal 5 Digit</small>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-12">
							<label for="re_new_password">Ulangi Kata Sandi Baru</label>
							<input type="password" class="form-control" pattern="(?=.*).{5,}" required id="re_new_password" name="re_new_password">
							<small class="help-block">Minimal 5 Digit</small>
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				<button type="button" onclick="ubah_password()" class="btn btn-primary">Simpan Perubahan</button>
			</div>
		</div>
	</div>
</div>

<script>

	function init_modal_pass()
	{
		$("#modal_pass").modal("show");
		$("#modal_pass .modal-title").text("Ubah Kata Sandi");
		$("#error-pass").hide();
		$("#form_ubah_pass")[0].reset();
	}

	function load_photo()
	{
		$.ajax({
            url : "<?php echo URL::Link('app/ajaxRequest/photo.php'); ?>",
            type: 'GET',
            
            success: function(data)
            {
               //if success close modal and reload ajax table
            	$("#photo img").attr('src',data);
            	
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
		// $.get("<?php echo URL::Link('app/ajaxRequest/photo.php'); ?>",function(data){
		// 	$("#photo").attr('src',data);
		// });
	}

	function load_list_foto()
	{
		$.get("<?php echo URL::Link('app/ajaxRequest/v_list_photo.php'); ?>",function(data){
			$("#list-photo").html(data);
		});
	}
	function init_modal_foto()
	{
		$("#error-upload-photo").hide();
		$("#error-upload-photo").addClass('alert-danger');
		$("#modal_foto").modal("show");
		$("#modal_foto .modal-title").text("Ganti Foto");
		$("#selectPhoto").html("");
		$("#form-upload")[0].reset();
	}

	function delete_foto(id)
	{
		c = confirm('Anda yakin akan menghapus foto ini?');
		if (c) {
			$.ajax({
				url: "<?php echo URL::Link('app/ajaxRequest/delete_photo.php?id='); ?>" + id,
				type: "GET",
				dataType: "JSON",
				success: function(data){
					if (data.status == "success") {
						$("#error-upload-photo").removeClass('alert-danger');
						$("#error-upload-photo").addClass('alert-success');
						$("#error-upload-photo").show();
						$("#error-upload-photo").html(data.msg);
						$("#selectPhoto").html('');
						load_list_foto();
					}else{
						$("#error-upload-photo").addClass('alert-danger');
						$("#error-upload-photo").show();
						$("#error-upload-photo").html(data.msg);
					}
				},
			});
		} else{
			return false;
		};
		
	}

	function selectPhoto(id)
	{
		$("#selected-photo-id").val(id);
		photo_link = $("#photo-"+id).find("img").attr("src");
		$("#selectPhoto").html("<p><strong>Foto Dipilih:</strong></p>"+
			"<img src="+photo_link+" style='height:150px;' class='img-thumbnail' > "+
			"<button class='btn btn-danger btn-xs' onclick='delete_foto("+id+");' style='margin-top:10px;'>Hapus Foto</button>");
		
	}

	function upload_gambar()
	{
		var url = "<?php echo URL::Link('app/ajaxRequest/uploadPhoto.php') ?>";
		var data = new FormData();
		data.append('gambar',$('#gambar')[0].files[0]);
		var http = new XMLHttpRequest();
		http.open("POST",url,true);
		http.send(data);
		http.onreadystatechange = function(){
			if (http.readyState == 4 && http.status == 200) {
				// alert(http.responseText);
				var res = JSON.parse(http.responseText);
				if (res.status == "success") {
					$("#error-upload-photo").removeClass('alert-danger');
					$("#error-upload-photo").addClass('alert-success');
					$("#error-upload-photo").show();
					$("#error-upload-photo").html('Berhasil Upload');
					load_list_foto();
				}else{
					$("#error-upload-photo").addClass('alert-danger');
					$("#error-upload-photo").show();
					$("#error-upload-photo").html('Gagal Upload <br>'+res.error);
				}

			}
		}
	}

	function ubah_password()
	{
		var old_pass = $('[name=old_password]').val();
		var new_pass = $('[name=new_password]').val();
		var re_new_pass = $('[name=re_new_password]').val();
		var pattern = /(?=.*).{5,}/;
		if (pattern.test(old_pass) == false) {
			$("#error-pass").show();
			$("#error-pass").html('Kata sandi lama tidak valid');
		}else if(pattern.test(new_pass) == false){
			$("#error-pass").show();
			$("#error-pass").html('Kata sandi baru tidak valid');
		}else if(pattern.test(re_new_pass) == false){
			$("#error-pass").show();
			$("#error-pass").html('Ulangi kata sandi baru tidak valid');
		}else if(new_pass != re_new_pass){
			$("#error-pass").show();
			$("#error-pass").html('Ulangi kata sandi baru tidak cocok dengan kata sandi baru');
		}else{
			$.post(
				"<?php echo URL::Link('app/ajaxRequest/ubah_password.php'); ?>",
				$("#form_ubah_pass").serialize(),
				function(data){
					var res = JSON.parse(data);
					if (res.status == "success") {
						$('#error-pass').removeClass('alert-danger');
						$('#error-pass').addClass('alert-success');
						$('#error-pass').html('Berhasil Mengganti Password');
						$("#error-pass").hide();
					} else{
						$("#error-pass").show();
						$("#error-pass").html(res.error);
					}
				}			
			);	
		};
		
	}

	function ganti_photo()
	{	
		var photo = $("#selected-photo-id").val();
		if(photo == ""){
			$("#error-upload-photo").addClass('alert-danger');
			$("#error-upload-photo").show();
			$("#error-upload-photo").html('Anda Belum Pilih Photo');
		}else{
			var url = "<?php echo URL::Link('app/ajaxRequest/ganti_photo.php') ?>";
			dat = { user_photo_id: photo };
			$.post(url,dat,function(data){
				res = JSON.parse(data);
				load_photo();
				$("#modal_foto").modal("hide");
			});	
		}
		
	}

	function load_user_post()
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=topik&user='.$rowUser['user_id'].'&hal='); ?>";
		$.get(url,function(data){
			$("#hasilTopik").html(data);
		});
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=artikel&user='.$rowUser['user_id'].'&hal='); ?>";
		$.get(url,function(data){
			$("#hasilArtikel").html(data);
		});
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=notif&user='.$rowUser['user_id'].'&hal='); ?>";
		$.get(url,function(data){
			$("#hasilNotif").html(data);
		});		
	}

	function page_topik(page)
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=topik&user='.$rowUser['user_id'].'&hal='); ?>"+page;
		$.get(url,function(data){
			$("#hasilTopik").html(data);
		});
	}

	function page_artikel(page)
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=artikel&user='.$rowUser['user_id'].'&hal='); ?>"+page;
		$.get(url,function(data){
			$("#hasilArtikel").html(data);
		});	
	}

	function page_notif(page)
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post_me.php?o=notif&user='.$rowUser['user_id'].'&hal='); ?>"+page;
		$.get(url,function(data){
			$("#hasilNotif").html(data);
		});	
	}

	load_user_post();
	load_photo();
	load_list_foto();
</script>