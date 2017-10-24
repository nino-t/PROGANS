<?php 
session_start();
include '../config/config.php';
include '../lib/Auth.php';
$auth = new Auth();
$user_id = $auth->getSession('user_id');
$user_photo_id = $_POST['user_photo_id'];
$query = $db->query("UPDATE users SET user_photo_id = '$user_photo_id' WHERE user_id = '$user_id' ");
if ($query) {
	echo json_encode(array('status'=>'success'));
} else {
	echo json_encode(array('status'=>'failed'));
}

