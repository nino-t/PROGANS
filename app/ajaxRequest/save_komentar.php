<?php
session_start(); 
include '../config/config.php';	
include '../lib/Auth.php';
include '../lib/Notification.php';
$auth = new Auth();	
$id = $db->escape_string($_POST['id']);
$komentar = $db->escape_string($_POST['komentar']);
$user_id = $auth->getSession('user_id');
if (isset($_POST['reply_id'])) {
	$reply_id = $db->escape_string($_POST['reply_id']);
	$sql = "INSERT INTO article_comment(article_id,reply_id,user_id,comment) VALUES('$id','$reply_id','$user_id','$komentar')";
} else {
	$sql = "INSERT INTO article_comment(article_id,user_id,comment) VALUES('$id','$user_id','$komentar')";
}
$query = $db->query($sql);
$lastID = $db->insert_id;
$getData = $db->query("SELECT b.article_id,b.user_id FROM article_comment a 
							LEFT JOIN article b ON a.article_id = b.article_id
								WHERE comment_id = '$lastID' ");
$rowData = $getData->fetch_assoc();
$user_id_parent = $rowData['user_id'];
Notif::Make($db,'article',$id,$user_id,$user_id_parent);
if ($query) {
	$response = json_encode(array('status'=>'success'));
} else {
	$response = json_encode(array('status'=>'failed'));
}

echo $response;
?>