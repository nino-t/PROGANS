<?php 
session_start();
include "app/config/config.php";
include 'app/lib/Url.php';
include 'app/lib/Auth.php';
$auth = new Auth();
?>
<!DOCTYPE html>
<html>
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
		<meta property="og:image" content="<?php echo URL::Link('assets/images/gunung.png') ?>" />

		<title>Kesini</title>

		<link rel="shortcut icon" href="<?php echo URL::Link('assets/images/icon.png') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/font.css') ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crete+Round" type="text/css">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/style.css') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/animate.css') ?>">
        <link rel="stylesheet" href="<?php echo URL::Link('assets/css/style2.css') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/style-home.css') ?>">
		<link rel="stylesheet" href="<?php echo URL::Link('assets/css/tabstyles.css') ?>">
        <link rel="stylesheet" href="<?php echo URL::Link('assets/css/custom.css') ?>">
        <link rel="stylesheet" href="<?php echo URL::Link('assets/css/wpp.css') ?>">
		
		<!-- jQuery -->
		<script src="<?php echo URL::Link('assets/js/jQuery-2.1.4.min.js')?>"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo URL::Link('assets/js/bootstrap.min.js')?>"></script>
		<!-- Plugins -->
		<script src="<?php echo URL::Link('assets/js/fbSDK.js')?>"></script>
		<script src="<?php echo URL::Link('assets/plugin/ckeditor/ckeditor.js')?>"></script>
		<script src="<?php echo URL::Link('assets/js/raphael.min.js')?>"></script>
		<script src="<?php echo URL::Link('assets/js/init.js')?>"></script>
		<script src="<?php echo URL::Link('assets/js/move-top.js') ?>"></script>
        <script src="<?php echo URL::Link('assets/js/easing.js') ?>"></script>
        <script src="<?php echo URL::Link('assets/js/markerclusterer_packed.js') ?>"></script>
        <script src="<?php echo URL::Link('assets/js/scrolling-nav.js') ?>"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script src="<?php echo URL::Link('assets/js/init_google_map.js')?>"></script>
		
	</head>
	<body class="home blog group-blog">

		<div id="page" class="hfeed site">
			<?php include('template/menu.php'); ?>
			<!-- <div class="versi">
				<center>
					<h3>Alpha TEST
					<img src="<?php echo URL::Link('assets/images/icon_versi.png') ?>" alt="">
					</h3>
				</center>
			</div> -->
			<?php 
			if (empty($_GET['page'])) {
				include("template/content/home.php");
			} else {
				include("template/content/".$_GET['page'].".php");
			}
			 ?>
			 <?php include 'template/footer.php'; ?>
		</div>

		<script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                */
                $().UItoTop({
                    easingType: 'easeOutQuart'
                });
            });
        </script>
        
        <script>
            document.querySelector( "#nav-toggle" )
              .addEventListener( "click", function() {
                this.classList.toggle( "active" );
              });
        </script>

	</body>
	
		<script>
			title("<?php echo isset($title)?$title:'Kesini.com'; ?>");
			
			$.getScript("<?php echo URL::Base() ?>assets/js/Maps.js");				

			$(document).ready(function(){
			    // function auto load
			$("#search-form").submit(function(e){
				cari();
				e.preventDefault();
			});
			socket = new WebSocket("ws://<?php echo $_SERVER['SERVER_ADDR'] == '::1'?'127.0.0.1':$_SERVER['SERVER_ADDR'] ?>:8080");
			socket.onopen = function(e) {
			    console.log("Connection established!");
			};

			socket.onmessage = function(e) {
				var d = JSON.parse(e.data);
			    if (d.notifsts == true) {
			    	sNotif = true;
			    }
			    if (sNotif == true) {
			    	loadData();
			    	loadData_list();
				    console.log("Berhasil");	
			    } else{
			    	console.log("Gagal");
			    };
			    
			};	

			    function loadData() {        
			        $.ajax({
			        	url : "<?php echo URL::Base() ?>app/ajaxRequest/Cek_notic.php",
			        	type: "GET",
			        	dataType: "JSON",
			        	success: function(data){
			        		if (data.jumlahNotif > 0) {
			        			$("#notifikasi").show();
				        		$("#notifikasi span").html(data.jumlahNotif);
			        		}else{
			        			$("#notifikasi").hide();
			        		};
			        		// alert(data.jumlahNotif);
			        	}
			        });
			    }

			    function updateNotif()
			    {
			    	$.get("<?php echo URL::Base() ?>app/ajaxRequest/update_notif.php");
			    }

			    // function auto load list
			    function loadData_list() {        
			        $.get('<?php echo URL::Base() ?>/app/ajaxRequest/Notifikasi.php',function(data){
			        	$("#list-notif").html(data);
			        });
			    }    			    
			    // function auto load list
			    loadData();
			    loadData_list();        
			    // function auto load



			    // function show data load
			    $("#notic_click").on('show.bs.dropdown',function(){

			        // loading data show
			        updateNotif();
			        loadData();
			               
			    });


			    $( "#map" ).on( "petaklik", function(event, idwilayah) {
					$.ajax({
						url: '<?php echo URL::Link('app/ajaxRequest/Data_Result_Maps.php'); ?>',
						type: 'POST',
						data: {id: +idwilayah},
						success : function(data){
							$("#data-result-maps").html(data);
						}
					})
									
				});
				
			});
			
				
		</script>
</html>