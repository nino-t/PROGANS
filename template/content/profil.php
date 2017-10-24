<?php 
$username= $_GET['username'];
$userQuery = $db->query("SELECT a.*,b.kokab_nama,c.provinsi_nama FROM users a
							INNER JOIN master_kokab b ON a.kota_id = b.kota_id
								INNER JOIN master_provinsi c ON c.provinsi_id = b.provinsi_id
								 	WHERE a.username = '$username' ");
$user_id = $auth->getSession('user_id');
$rowUser = $userQuery->fetch_assoc();
$title = "Kesini.com - ".$rowUser['username'];
if ($rowUser['user_id'] == $user_id) {
	URL::Redirect('me');
}
$photoQuery = $db->query("SELECT a.user_id, b.photo_name FROM users a 
						LEFT JOIN users_photo b ON a.user_photo_id = b.user_photo_id 
							WHERE a.user_id = '$rowUser[user_id]' ");
$rowPhoto = $photoQuery->fetch_assoc();
$photo = $rowPhoto['photo_name'];
$photo_src =  empty($photo)?URL::Link('assets/images/user.png'):
				URL::Link('uploads/user_photo/'.$photo);
?>
<div id="content" class="site-content">
    <div class="top-section"></div>

    <div class="container main-content-area">
		<h1>Profil <?php echo $rowUser['username'] ?></h1>
		<div class="panel panel-default">
		  	  <div class="panel-heading">
					<h3 class="panel-title"></h3>
			  </div>
			  <table class="table table-bordered">
						<tbody>
							<tr>
								<td width="20%" align="center" rowspan="10">
									<img src="<?php echo $photo_src ?>" id="photo" width="200px" height="200px" alt=""><br><br>
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
    </div>
</div>

<script>
	function load_user_post()
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post.php?o=topik&user='.$rowUser['user_id'].'&hal='); ?>";
		$.get(url,function(data){
			$("#hasilTopik").html(data);
		});
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post.php?o=artikel&user='.$rowUser['user_id'].'&hal='); ?>";
		$.get(url,function(data){
			$("#hasilArtikel").html(data);
		});		
	}

	function page_topik(page)
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post.php?o=topik&user='.$rowUser['user_id'].'&hal='); ?>"+page;
		$.get(url,function(data){
			$("#hasilTopik").html(data);
		});
	}

	function page_artikel(page)
	{
		url = "<?php echo URL::Link('app/ajaxRequest/paging_post.php?o=artikel&user='.$rowUser['user_id'].'&hal='); ?>"+page;
		$.get(url,function(data){
			$("#hasilArtikel").html(data);
		});	
	}

	load_user_post();
</script>