<?php 
session_start();
include '../config/config.php';
include '../lib/Auth.php';
$auth = new Auth();
$user_id = $auth->getSession('user_id');
$old_password = md5($_POST['old_password']);
$new_password = md5($_POST['new_password']);
$checkOldPassword = $db->query("SELECT user_id FROM users WHERE user_id = '$user_id' AND password = '$old_password' ")->num_rows;
$error = '';
$response = '';
if ($checkOldPassword != 1) {
	$error = "Kata sandi lama salah";
	$response = json_encode(array('status'=>'failed','error'=>$error));
}else{
	$query = $db->query("UPDATE users SET password = '$new_password' WHERE user_id = '$user_id' ");
	if ($query) {
		$response = json_encode(array('status'=>'success'));
	} else {
		$response = json_encode(array('status'=>'failed','error'=>$error));
	}
}
echo $response;