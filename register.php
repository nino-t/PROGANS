<?php 
	session_start();
	include 'app/lib/Url.php';
    include 'app/lib/Filter.php';
	include 'app/lib/Auth.php';
	include 'app/config/config.php';
    $auth = new Auth();
    if (!$auth->guest()) {
        URL::Redirect('beranda');
    } 
    
	if (isset($_POST['daftar'])) {
		$nama = $db->escape_string(Filter::XSS($_POST['nama']));
		$username = $db->escape_string(Filter::XSS($_POST['username']));
		$password = md5($db->escape_string(Filter::XSS($_POST['password'])));
		$email    = $db->escape_string(Filter::XSS($_POST['email']));
		$kabupaten    = $db->escape_string(Filter::XSS($_POST['kabupaten']));
		$captcha    = $_POST['captcha'];
		$checkUsername = $db->query("SELECT * FROM users WHERE username = '$username' ")->num_rows;
		$checkEmail = $db->query("SELECT * FROM users WHERE email = '$email' ")->num_rows;
		$errorRegister = "";
		if ($checkUsername > 0) {
			$errorRegister .= "Nama Pengguna Telah Dipakai";
		} else if($checkEmail > 0){
			$errorRegister .= "Email Telah Dipakai";
		}else{
			if (md5($captcha) == $_SESSION['captcha_session']) {
				$insert = $db->query("INSERT INTO users(name,username,password,email,kota_id)
										 VALUES('$nama','$username','$password','$email','$kabupaten')");
				if ($insert) {
                    
					$user_id = $db->insert_id;
                    $autologin = $db->query("SELECT * FROM users WHERE user_id = '$user_id' ");
                    $rowAuto = $autologin->fetch_assoc();
                    $cek = $autologin->num_rows;
                    if ($cek == 1) {
                        $auth->setSession(array(
                            'user_id'=>$rowAuto['user_id'],
                            'user_lvl'=>$rowAuto['group_id'],
                            'name'=>$rowAuto['name']
                        ));
                        URL::Redirect('beranda');
                    }else{
                        $errorRegister .= "Gagal Daftar Terjadi Kesalahan";
                    }
				} else {
					$errorRegister .= "Gagal Daftar Terjadi Kesalahan";
				}
			} else {
				$errorRegister .= "Kode Verifikasi tidak cocok";
			}
			
		}
		
	}
    $error_input = "x-moz-errormessage='Sesuaikan dengan format' title='Sesuaikan dengan format'";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" />
    <meta property="og:site_name" content="Kesini.com" />
    <meta property="og:author" content="PROGANS" />
    <meta property="og:description" content="Jelajahi Indonesia" />
    <meta property="og:image" content="<?php echo URL::Link('assets/images/user.png') ?>" />
    <title>Daftar</title>

    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/font.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crete+Round" type="text/css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/style2.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/wpp.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/style-register.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/custom.css">
</head>

<body>
    <div class="form" style="margin-top:-20px;">
        <div class="forceColor"></div>
        <div class="col-lg-12 topbar">
            <div class="spanColor"></div>
            <div class="panel-heading">
                <h3 class="text-center">
                    Kesini.com
                </h3>
            </div>
            <div class="panel-body">
                <?php if (!empty($errorRegister)): ?>
                <div class="alert alert-danger">
                    <?php echo $errorRegister ?>
                </div>
                <?php endif ?>
                <form action="<?php echo URL::Current(); ?>" method="POST" class="form-horizontal" role="form">

                        <div class="col-lg-6">
                            <input type="text" required class="input" name="nama" <?php echo $error_input ?> placeholder="Nama Lengkap">
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Tidak Boleh Kosong</small>                         
                            </div>
                        </div>    
  
                        <div class="col-lg-6">
                            <input type="text" required pattern=".{4,}[a-zA-Z0-9_.]+" class="input" name="username" <?php echo $error_input ?> placeholder="Nama Pengguna">
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Minimal 4 huruf dan angka</small>                         
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <input type="email" required onchange="form.re_email.pattern = this.value;" class="input" name="email" <?php echo $error_input ?> placeholder="Email">
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Masukkan E-Mail Dengan Benar</small>                         
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <input type="password" required pattern="(?=.*).{5,}" onchange="form.re_password.pattern = this.value;" class="input" name="password" placeholder="Kata Sandi" <?php echo $error_input ?>>
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Minimal 5 karakter</small>                         
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <input type="password" pattern="(?=.*).{5,}" required class="input" name="re_password" placeholder="Ulangi Kata Sandi" <?php echo $error_input ?>>
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Ulangi Kata Sandi</small>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <select onchange="chain_combobox()" name="provinsi" id="provinsi" class="input" placeholder="Provinsi" required <?php echo $error_input ?>>
                                <option value="">Pilih Provinsi </option>
                                <?php 
                                    $provinsiQuery = $db->query("SELECT * FROM master_provinsi");
                                    while($rowProvinsi = $provinsiQuery->fetch_assoc()){
                                ?>
                                <option value="<?php echo $rowProvinsi['provinsi_id'] ?>"><?php echo $rowProvinsi['provinsi_nama'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Pilih Provinsi Anda Tinggal</small>                         
                            </div>
                        </div>
                        <div class="col-lg-6"  id="inputkab">
                            <select name="kabupaten" id="kabupaten" class="input" placeholder="Kabupaten" required>
                                <option value="">--Pilih Kabupaten--</option>
                            </select>
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Pilih Kabupaten Anda Tinggal</small>                         
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <img src="<?php echo URL::Link('app/lib/captcha.php') ?>" alt="">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" required name="captcha" class="input" placeholder="Verifikasi Kode" <?php echo $error_input ?>>
                            <div class="validasi">
                                <small class="tg-validasi"><span>*</span> Masukkan Kode Verifikasi Dengan Benar</small>                         
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="daftar" class="btn btn-primary col-lg-12">Daftar</button>
                        </div>
                    
                </form>
            </div>
            <p class="text-center">
                <a href="<?php echo URL::Link('masuk'); ?>">Saya Sudah Punya Akun</a> 
                <span style="color:white;">|</span>
                <a href="<?php echo URL::Link('beranda') ?>">Kembali Ke Beranda</a> 
            
            </p>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo URL::Base() ?>assets/js/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo URL::Base() ?>assets/js/bootstrap.min.js"></script>
    <script>

        function chain_combobox() {
            $("#kabupaten").html('<option value="">Pilih Kabupaten</option>');
            $.ajax({
                url: "<?php echo URL::Link('app/ajaxRequest/chain_combobox.php') ?>",
                type: "POST",
                data: {
                    provinsi: $("#provinsi").val()
                },
                success: function(data) {
                    var res = JSON.parse(data);
                    $("#inputkab").fadeIn();
                    $('#kabupaten').append(res.option);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                }
            })
        }
    </script>
</body>

</html>