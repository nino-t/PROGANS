<?php 
session_start();
include "../app/config/config.php";
include '../app/lib/Url.php';
include '../app/lib/Auth.php';
$auth = new Auth();
$auth->required(URL::Link('../beranda'));
if ($auth->getSession('user_lvl') != 1) {
	URL::Redirect('../beranda');
}
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kesini</title>

	    <!-- CSS Libs -->
	    <link rel="shortcut icon" href="<?php echo URL::Link('../assets/images/icon.png') ?>">
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/css/bootstrap.min.css') ?>">
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/css/font-awesome.min.css') ?>">
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/css/animate.min.css') ?>">	    	  
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/css/jquery.dataTables.min.css') ?>">
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/css/dataTables.bootstrap.css') ?>">	    	   


	    <!-- CSS App -->
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/tema/style.css') ?>">
	    <link rel="stylesheet" href="<?php echo URL::Link('assets/tema/themes/flat-blue.css') ?>">	    
		<!-- jQuery -->
		<script src="<?php echo URL::Link('assets/js/jquery.js')?>"></script>

		<!-- Bootstrap JavaScript -->
		<script src="<?php echo URL::Link('assets/js/bootstrap.min.js')?>"></script>


		<!-- plugin jquery -->
		<script src="<?php echo URL::Link('assets/js/Chart.min.js')?>"></script>		
		<script src="<?php echo URL::Link('assets/js/jquery.matchHeight-min.js')?>"></script>
		<script src="<?php echo URL::Link('assets/js/jquery.dataTables.min.js')?>"></script>		
		<script src="<?php echo URL::Link('../assets/plugin/ckeditor/ckeditor.js') ?>"></script>
		<script src="<?php echo URL::Link('../assets/js/init.js') ?>"></script>
		<script src="<?php echo URL::Link('assets/js/select2.full.min.js')?>"></script>

		<!-- plugin jquery bootstrap -->
		<script src="<?php echo URL::Link('assets/js/bootstrap-switch.min.js')?>"></script>
		<script src="<?php echo URL::Link('assets/js/dataTables.bootstrap.min.js')?>"></script>
		<script src="<?php echo URL::Link('../assets/js/markerclusterer_packed.js') ?>"></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script src="<?php echo URL::Link('../assets/js/init_google_map.js') ?>"></script>
        <!-- Javascript Dashboard Utama-->
        <script src="<?php echo URL::Link('assets/js/app.js')?>"></script>  
	</head>
	<body class="flat-blue">
		<div class="app-container">
        	<div class="row content-container">

	        	<!-- menu top -->
	        	<?php include('template/menu_top.php'); ?>		 

	        	<!-- menu sidebar -->
	        	<?php include('template/menu_sidebar.php'); ?>		

	        	<!-- content -->
				<div class="container-fluid">		
					<?php 
					if (empty($_GET['page'])) {
						include("template/content/home.php");
					} else {
						include("template/content/".$_GET['page'].".php");
					}
					 ?>					 
					<!-- For Modal -->
					<div class="modal fade" id="Data_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<!-- For Data Modal -->
					</div>					

				</div>				
        	</div>

        	<?php include('template/footer.php'); ?>		

        </div>		

		      

		<!-- title -->
		<script>
			title("<?php echo isset($title)?$title:'Kesini.com'; ?>");
			CKEDITOR.replace('isi',{
				height: 600,
				filebrowserUploadUrl: "<?php echo URL::Link('../app/ajaxRequest/upload_ckeditor.php')?>"
			});			
		</script>
	    <!-- Main Ajax -->
	    <?php include("assets/js/Main-ajax.js"); ?>




	</body>
</html>