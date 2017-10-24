<!-- my product -->
<?php

	session_start();
	include '../config/config.php';
	include '../lib/Auth.php';
	include '../lib/Url.php'; 
		 
	// data access default
	$auth = new Auth();

	$table 		 = 'article_like';	
	$primaryKey  = 'like_id';
	$statusField = 'like_sts';	
	$wh_user	 = 'user_id';
	$art_id		 = 'article_id';
	$user_id 	 = $auth->getSession('user_id');		
	$fieldInsert= 'article_id,user_id,like_sts';	
	$article_id_like = $_GET['id'];
	$id_like = $_GET['id_like'];

	// data access default

 

	// for cek Data Like user
	$cek = $db->query("SELECT * FROM $table WHERE $wh_user = '$user_id' AND $art_id = '$article_id_like' ");
	$data_cek = $cek->num_rows;

	$sql_insert =  "INSERT INTO $table ($fieldInsert) VALUES('$article_id_like','$user_id','1')";
	
	if ($data_cek > 0) {
		$cek2 = $db->query("SELECT * FROM $table WHERE $wh_user = '$user_id' AND $art_id = '$article_id_like' AND like_sts = '1' ")->num_rows;
		if ($cek2 > 0) {
			$sql_update	 = "UPDATE $table SET $statusField = '0' WHERE $wh_user = '$user_id' AND $art_id = '$article_id_like' ";
		} else {
			$sql_update  = "UPDATE $table SET $statusField = '1' WHERE $wh_user = '$user_id' AND $art_id = '$article_id_like'";
		}
		
		$db->query($sql_update);		
	}else{
		$db->query($sql_insert);						
	}
	
	
	// for cek Data Like user

?>