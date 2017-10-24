<?php 
	session_start();
	
	include 'app/config/config.php';
	include 'app/lib/Url.php';
	include 'app/lib/Auth.php';
	
	$errorLogin = '';
	$auth = new Auth();
	$auth->setConnection($db);
	
	if (!$auth->guest()) {
		URL::Redirect('');
	}

	
	if (isset($_POST['masuk'])) {
		$login = $auth->login('users',array(
				'username'=>array('username'=>$_POST['username']),
				'password'=>array('password'=>md5($_POST['password'])),
		));
		if ($login) {
			$auth->setSession(array(
				'user_id'=>$auth->getDataUser('user_id'),
				'user_lvl'=>$auth->getDataUser('group_id'),
				'name'=>$auth->getDatauser('name')
			));
			if ($auth->getSession('user_lvl') == 1) {
				URL::Redirect('administrator');
			} else {
				URL::Redirect('');
			}
			
		} else {
			$errorLogin = "Nama Pengguna dan Kata Sandi Salah";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" />
    <meta property="og:site_name" content="Kesini.com" />
    <meta property="og:author" content="PROGANS" />
    <meta property="og:description" content="Jelajahi Indonesia" />
    <meta property="og:image" content="<?php echo URL::Link('assets/images/user.png') ?>" />
    <title>Masuk</title>

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
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/style-login.css">
    <link rel="stylesheet" href="<?php echo URL::Base() ?>assets/css/custom.css">
</head>

<body>
    <div class="form" style="margin-top:-40px;">
        <div class="forceColor"></div>
        <div class="col-lg-12 topbar">
            <div class="spanColor"></div>
            <div class="panel-heading">
                <a href="<?php echo URL::Link('beranda') ?>">
                    <img src="<?php echo URL::Base() ?>assets/images/kesini.png" width="365" heigth="auto" alt="Kesini.com" />
                </a>
            </div>
            <div class="panel-body">
                <?php if(!empty($errorLogin)){ ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p class="text-danger"><i class="fa fa-exclamation-circle"></i> Peringatan</p>
                    <?php echo $errorLogin ?>
                </div>
                <?php } ?>
                <form action="<?php echo URL::Current() ?>" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" class="input" name="username" placeholder="Nama Pengguna">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="password" class="input" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" name="masuk" class="btn btn-primary col-lg-12">Masuk</button>
                        </div>
                    </div>
                </form>
                <h4>Belum Punya Akun? Gabung <a href="<?php echo URL::Link('daftar') ?>">Disini!</a></h4>
                <h4 style="margin-top:-5px;">Atau Kembali Ke <a href="<?php echo URL::Link('beranda') ?>">Beranda</a></h4>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo URL::Base() ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="<?php echo URL::Base() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/init.js"></script>
    <script src="<?php echo URL::Base() ?>assets/plugin/ckeditor/ckeditor.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="<?php echo URL::Base() ?>assets/js/fbSDK.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/move-top.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/easing.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/scrolling-nav.js"></script>
    <!-- Maps Jquery -->
    <script src="<?php echo URL::Base() ?>assets/js/raphael.min.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/Maps.js"></script>
    <script src="<?php echo URL::Base() ?>assets/js/Support_Maps.js"></script>

</body>

</html>