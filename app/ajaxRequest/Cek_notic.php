<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php';
		
	// data access default
	$auth = new Auth();

	$table 		 = 'notification';	
	$primaryKey  = 'notification_id';
	$statusField = 'notification_sts';	
	$wh_user	 = 'user_id_parent';
	$user_id 	 = $auth->getSession('user_id');	

	// data access default

	// for view notifikasi
	$sql = "SELECT notification_id FROM $table WHERE $wh_user = $user_id AND $statusField = 1";
	$notifikasi = $db->query($sql);	
	$not_number = $notifikasi->num_rows;	

	echo json_encode(array("jumlahNotif"=>$not_number,"query_notif"=>$sql));

	// for view notifikasi

?>