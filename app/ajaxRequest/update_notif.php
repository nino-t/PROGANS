<?php
session_start();
include '../config/config.php';
include '../lib/Auth.php';

$auth = new Auth();
$table 		 = 'notification';	
$primaryKey  = 'notification_id';
$statusField = 'notification_sts';	
$wh_user	 = 'user_id_parent';
$user_id 	 = $auth->getSession('user_id');	
$db->query("UPDATE $table SET $statusField = 0 WHERE $wh_user = '$user_id' ");
