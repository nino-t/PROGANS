<?php 
session_start();
include '../lib/IUploads.php';
include '../lib/Auth.php';
include '../config/config.php';
$auth = new Auth();
$path =  realpath(dirname(__FILE__));
if (strpos($path, "app/ajaxRequest") == false) {
	$replace = str_replace("app\ajaxRequest", "uploads\user_photo\\", $path);
} else {
	$replace = str_replace("app/ajaxRequest", "uploads/user_photo/", $path);
}

$uploadRules = array(
	'allow_type'=>'jpg|png|gif|jpeg',
	'upload_folder'=>$replace,
	'max_size'=>1000,
);
$gambar = new IUploads('gambar',$uploadRules);
if ($gambar->upload()) {
	$dataUpload = $gambar->data();
	$user_id = $auth->getSession('user_id');
	$query = $db->query("INSERT INTO users_photo(user_id,photo_name) VALUES('$user_id','$dataUpload[nameHashed]')");
	$response = json_encode(array('status'=>'success'));
} else {
	$response = json_encode(array('status'=>'failed','error'=>$gambar->uploadError()));
}

echo $response;

