<?php
	session_start();
	include '../config/config.php';
	include '../lib/Notification.php';
	include '../lib/Auth.php';
	$auth = new Auth();
	$table = "thread_post";
	$fieldInsert = 'thread_id,user_id,post_title,content';
	
	$judul = $db->escape_string($_POST['judul']);
	$isi = $db->escape_string($_POST['isi2']);
	$captcha = $db->escape_string($_POST['captcha']);
	$user_id = $auth->getSession('user_id');
	$thread_id = $db->escape_string($_POST['id']);

	$q = $db->query("SELECT user_id FROM v_thread_post WHERE thread_id = '$thread_id' ");
	$r = $q->fetch_assoc();
	$user_id_parent = $r['user_id'];
	switch ($_POST['act']) {
		case 'add':
			if (md5($captcha) == $_SESSION['captcha_session']) {
				// if (isset($_GET['id'])) {
				$sql = "INSERT INTO $table ($fieldInsert) VALUES('$thread_id','$user_id','$judul','$isi')";
				// } else if(isset($_GET['quote_id'])){
				// 	$quote_id = $db->escape_string($_POST['quote_id']);
				// 	$sql = "INSERT INTO $table ($fieldInsert) VALUES('$thread_id','$user_id','$quote_id','$judul','$isi')";
				// }
				$query = $db->query($sql);
				Notif::Make($db,'topic',$thread_id,$user_id,$user_id_parent);
				
				// URL::Redirect('forum/topik/baca/'.$slug);
				echo json_encode(array('status'=>'success','msg'=>'Berhasil'));
			} else {
				$errorCaptcha = 'Captcha Tidak Cocok';
				echo json_encode(array('status'=>'error','msg'=>$errorCaptcha));
			}
			break;
		
		case 'update':
			if (md5($captcha) == $_SESSION['captcha_session']) {
				$reply_id = $_POST['id'];
				$sql = "UPDATE thread_post SET 
							post_title = '$judul',
								content = '$isi',
									updated_at = NOW() 
										WHERE post_id = '$reply_id' ";
				$query = $db->query($sql);
				$sqlSlug = $db->query("SELECT thread_slug 
									FROM v_thread_post 
											WHERE post_id = '$reply_id'");
				$getSlug = $sqlSlug->fetch_assoc();
				$slug = $getSlug['thread_slug'];
				// URL::Redirect('forum/topik/baca/'.$slug);
				echo json_encode(array('status'=>'success','msg'=>'Berhasil'));
			} else {
				$errorCaptcha = 'Kode verifikasi tidak cocok';
				echo json_encode(array('status'=>'error','msg'=>$errorCaptcha,'judul'=>$judul,'isi'=>$isi));
			}
			break;
	}
		

// echo json_encode(array('test'=>'test'));