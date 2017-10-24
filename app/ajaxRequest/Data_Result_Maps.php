<!-- my product -->
<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php';
		
	// data access default
	$auth = new Auth();
		
	$user_id 	 = $auth->getSession('user_id');	
	$id_wilayah = $_POST['id'];

	// data access default

	// for view maps
	$dataWilayah = $db->query("SELECT provinsi_nama FROM master_provinsi WHERE provinsi_id = '$id_wilayah' ");
	$rowWilayah = $dataWilayah->fetch_assoc();
	$dataArtikel = $db->query("SELECT count(article_id) as jumlahArtikel,provinsi_nama 
		FROM v_article WHERE provinsi_id = '$id_wilayah' AND article_sts = 1 ");
	$dataTopik = $db->query("SELECT count(thread_id) as jumlahTopik,provinsi_nama 
		FROM v_thread WHERE provinsi_id = '$id_wilayah' AND thread_sts = 1 ");
	$rowTopik = $dataTopik->fetch_assoc();
	$rowArtikel = $dataArtikel->fetch_assoc();
?>

<?php if ($dataArtikel->num_rows > 0 && $dataTopik->num_rows > 0): ?>

		<div class="col-lg-5"  style="margin: 7% 0px 0px 30%;">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title text-center">Data Daerah: <?php echo $rowWilayah['provinsi_nama']; ?></h3> 
				  </div>
				  <div class="panel-body">				
						<div class="form-group">
							<div class="col-lg-12">
								<label for="username">Total Artikel: <?php echo $rowArtikel['jumlahArtikel'] ?> </label>							
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="password">Total Thread: <?php echo $rowTopik['jumlahTopik'] ?></label>							
							</div>
						</div>
				  </div>
			</div>
		</div>
		
<?php else: ?>

		<div class="col-lg-5"  style="margin: 7% 0px 0px 30%;">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title text-center">Tidak Ada Data: </h3> 
				  </div>
			</div>
		</div>

<?php endif; ?>


