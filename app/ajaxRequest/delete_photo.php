<?php 

include '../config/config.php';

$response = '';
$photo_id = $_GET['id'];
$path =  realpath(dirname(__FILE__));
$replace = '';
if (strpos($path, "app/ajaxRequest") == false) {
	$replace = str_replace("app\ajaxRequest", "uploads\user_photo\\", $path);
} else {
	$replace = str_replace("app/ajaxRequest", "uploads/user_photo/", $path);
}

$query = $db->query("SELECT photo_name FROM users_photo WHERE user_photo_id = '$photo_id' ");

$row = $query->fetch_assoc();

if(unlink($replace.$row['photo_name'])){

	$queryHapus = $db->query("DELETE FROM users_photo WHERE user_photo_id = '$photo_id' ");
	if ($queryHapus) {
		$response = json_encode(array('status'=>'success','msg'=>'Berhasil Menghapus Photo'));
	} else {
		$response = json_encode(array('status'=>'error','msg'=>'Gagal Menghapus Photo Terjadi Kesalahan'));
	}
	
	
}else{
	$response = json_encode(array('status'=>'error','msg'=>'Gagal Menghapus Photo Terjadi Kesalahan'));
}


echo $response;