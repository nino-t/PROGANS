<?php 
session_start();
include '../config/config.php';
include '../lib/Auth.php';
include '../lib/Url.php';
$auth = new Auth();
$user_id = $auth->getSession('user_id');
$query = $db->query("SELECT a.user_id, b.photo_name FROM users a 
						LEFT JOIN users_photo b ON a.user_photo_id = b.user_photo_id 
							WHERE a.user_id = '$user_id' ");
$row = $query->fetch_assoc();
$photo = $row['photo_name'];
$photo_src =  empty($photo)?URL::Link('../../assets/images/user.png'):URL::Link('../../uploads/user_photo/'.$photo);
echo $photo_src;
?>