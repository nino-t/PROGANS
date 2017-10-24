<!-- myproduct -->
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


	// data access notifikasi real time	

	$notifikasi = $db->query("SELECT * FROM $table WHERE $wh_user = '$user_id' AND $statusField = '1' ORDER BY created_at DESC ");		

	if($notifikasi->num_rows > 0){
	    while($row = $notifikasi->fetch_assoc()){	    		    	

	    	if ($row['thread_id'] == 0){
	    		$query_data = $db->query("SELECT * FROM article
								JOIN notification ON article.article_id = notification.article_id
								JOIN users ON notification.user_id = users.user_id
								WHERE article.article_id = {$row['article_id']}");

	    		while($row_data = $query_data->fetch_assoc()){	    		    	
	    			echo "<li><a href='". URL::Link('artikel/baca/'.$row_data['article_id']) .'/'.$row_data['article_title']."'>". $row_data['username']." Berkomentar di Artikel ". $row_data['article_title']."</a></li>";
	    		}
	    	}else{
	    		$query_data = $db->query("SELECT *
								FROM thread
								JOIN notification ON thread.thread_id = notification.thread_id
								JOIN users ON notification.user_id = users.user_id
								WHERE thread.thread_id = {$row['thread_id']} ");
	    		while($row_data = $query_data->fetch_assoc()){	    		    	
	    			echo "<li><a href='". URL::Link('topik/'.$row_data['thread_id']) ."'>". $row_data['username']." Memposting di Topik ". $row_data['thread_title']."</a></li>";
	    		}
	    	}

		}
	    	// auto update data

		$db->query("UPDATE $table SET $statusField = '0' WHERE $wh_user = $user_id");

	    	// auto update data

	}else{
    	echo "<li><a href='#' class='text-center'>Tidak Ada Notifikasi.</a></li>";
	}

	// data access notifikasi real time

?>

