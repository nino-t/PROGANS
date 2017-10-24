<?php 
include "lib/Pagination.php";
include "lib/IUploads.php";
include 'lib/Slug.php';
$table 		= 'users';
$primaryKey = 'user_id';
$fieldInsert= 'name,username,password,email,kota_id';
$uploadError = '';
$statusField = 'user_sts';
// TMABAHAN
$group_id = $auth->getSession('group_id');
// TMBAHAN
$act = 'add'; 
$name = $username = $password = $email = $kota_id = '';

if (isset($_POST['simpan'])) {
	$user_id  	 = $db->escape_string($_POST['id']);
	$name 		 = $db->escape_string($_POST['nama']); 
	$username 	 = $db->escape_string($_POST['username']);	
	$email 		 = $db->escape_string($_POST['email']);	
	$pass_cn	 = $db->escape_string($_POST['password']);
	$password	 = md5($pass_cn);
	$kabupaten    = $db->escape_string($_POST['kabupaten']);
	$checkUsername = $db->query("SELECT * FROM users WHERE username = '$username' ")->num_rows;
	$checkEmail = $db->query("SELECT * FROM users WHERE email = '$email' ")->num_rows;

	switch ($_POST['act']) {
		case 'add':
			if ($checkUsername > 0) {
				$errorRegister = "Nama Pengguna Telah Dipakai";
			} else if($checkEmail > 0){
				$errorRegister = "Email Telah Dipakai";
			}else{
				if (md5($captcha) == $_SESSION['captcha_session']) {
					$sql = "INSERT INTO $table ($fieldInsert) VALUES('$name','$username','$password','$email','$kabupaten')";
					$query = $db->query($sql);

					URL::Redirect('administrator/pengguna');

				} else { 
					$errorRegister = "Kode Verifikasi tidak cocok";					

					URL::Redirect('administrator/pengguna/baru');
				}
				
			}			
		break;
		
		case 'update':
			if (md5($captcha) == $_SESSION['captcha_session']) {
				$sql = "UPDATE users SET password = '$password' WHERE user_id = '$user_id'";
				$query = $db->query($sql);

				URL::Redirect('administrator/pengguna');

			} else {
				$username = $username;
				$errorRegister = "Kode Verifikasi tidak cocok";

				URL::Redirect('administrator/pengguna/baru');
			}
			
			break;
	}
}

if (isset($_GET['act'])) {
	$id = $db->escape_string($_GET['id']);
	switch ($_GET['act']) { 
		case 'delete':
			$delete = $db->query("UPDATE users SET user_sts = 0 WHERE $primaryKey = '$id' ");			

			URL::Redirect('administrator/pengguna');

			break;
		
		case 'edit':
			$act='update';
			$edit = $db->query("SELECT * FROM $table WHERE $primaryKey = $id");
			if ($edit->num_rows == 1) {
				$rowEdit = $edit->fetch_assoc();
				$username = $rowEdit['username']; 
			}
			break;
	}
}

$paging = new Pagination();
$batas = 10;
$posisi = $paging->cariPosisi($batas);
$result = $db->query("SELECT * FROM $table WHERE $statusField = 1 AND group_id = 2 ORDER BY $primaryKey DESC LIMIT $posisi,$batas");
$alldata = $db->query("SELECT * FROM $table WHERE $statusField = 1")->num_rows;
$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'artikel',$jmlhalaman):'';
 