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
	$response = '<li class="dropdown-header">Pemberitahuan</li>
			            <li role="separator" class="divider" id="notification-separator"></li>';
	$notifikasi = $db->query("SELECT * FROM $table WHERE $wh_user = '$user_id' GROUP BY article_id,thread_id ORDER BY created_at DESC LIMIT 5");		

	if($notifikasi->num_rows > 0){
	    while($row = $notifikasi->fetch_assoc()){	    		    	

	    	if ($row['thread_id'] == 0){
	    		$query_data = $db->query("SELECT a.article_slug, a.article_id,a.article_title,c.username FROM v_article a
								LEFT JOIN notification b ON a.article_id = b.article_id
								LEFT JOIN users c ON b.user_id = c.user_id
								WHERE b.article_id = '$row[article_id]'
								ORDER BY b.created_at DESC");
	    		$jumlahNot = $query_data->num_rows;
	    		$jumlahOrang = $jumlahNot - 1;
	    		$row_data = $query_data->fetch_assoc();
	    		if ($jumlahNot > 1) {
		    		$str = $row_data['username']." dan ".$jumlahOrang." Orang Lainnya Berkomentar di Artikel ". '"'. $row_data['article_title'] .'"';
	    		} else {
		    		$str = $row_data['username']." Berkomentar di Artikel ". '"'. $row_data['article_title'] .'"';
	    		}
	    		
	    		$cutStr = strlen($str)>50? substr($str, 0,50)."...":$str;
    			$response .= "<li id='notification_list'><a href='". URL::Link('../../artikel/baca/'.$row_data['article_id']) .'/'.$row_data['article_slug']."' title='". $str ."'>". $cutStr ."</a></li>";
	    	}else{
	    		$query_data = $db->query("SELECT a.thread_id,a.thread_slug,c.username,a.thread_title FROM v_thread a
								LEFT JOIN notification b ON a.thread_id = b.thread_id
								LEFT JOIN users c ON b.user_id = c.user_id
								WHERE b.thread_id = '$row[thread_id]' 
								ORDER BY b.created_at DESC");
	    		$jumlahNot = $query_data->num_rows;
	    		$jumlahOrang = $jumlahNot - 1;
	    		$row_data = $query_data->fetch_assoc();
	    		if ($jumlahNot > 1) {
		    		$str = $row_data['username']." dan ".$jumlahOrang." Orang Lainnya Memposting di Topik ". '"'.$row_data['thread_title'].'"';
	    		} else {
		    		$str = $row_data['username']." Memposting di Topik ". '"'.$row_data['thread_title'].'"';
	    		}
	    		
	    		$cutStr = strlen($str)>50? substr($str, 0,50)."...":$str;	    		    	
	    		$response .= "<li id='notification_list'><a href='". URL::Link('../../forum/topik/baca/'.$row_data['thread_id'].'/'.$row_data['thread_slug']) ."' title='".$str."'>". $cutStr ."</a></li>";
	    		
	    	}

		}
		
		



	}else{
    	$response .= "<li><a href='#' class='text-center'>Tidak Ada Notifikasi.</a></li>";
	}

	$response .='<li role="separator" class="divider"></li>
			            <li><a href="'.URL::Link('../../me').'" class="text-center">Lihat Semua</a></li>';
	echo $response;
	// data access notifikasi real time

?>

