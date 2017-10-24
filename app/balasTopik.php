<?php
include 'lib/Notification.php';
include 'lib/Filter.php';

$thread_id = $thread = $thread_title = $page_title = "";
$table = "thread_post";
$act = "add";
$fieldInsert = 'thread_id,user_id,post_title,content';

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$reply = $db->query("SELECT thread_id,post_title,username,thread_slug,user_id 
							FROM v_thread_post WHERE thread_id = '$id' ");
	$rowReply = $reply->fetch_assoc();
	$user_id_parent = $rowReply['user_id'];
	$thread_id = $rowReply['thread_id'];
	$slug = $rowReply['thread_slug'];
	$page_title = "Balas Topik";

}
if(isset($_GET['quote_id'])){

	$quote_id = $_GET['quote_id'];
	$quote = $db->query("SELECT * FROM v_thread_post WHERE post_id = '$quote_id' ");
	$rowQuote = $quote->fetch_assoc();
	$thread_id = $rowQuote['thread_id'];
	$user_id_parent = $rowQuote['user_id'];
	$quote_content = "<blockquote>Mengutip:".$rowQuote['username']."<br>".$rowQuote['content']."</blockquote>";
	$thread .= $quote_content; 
	$slug = $rowQuote['thread_slug'];
	$page_title = "Mengutip Topik";

}


if (isset($_POST['balas'])) {

	$judul = $db->escape_string(Filter::XSS($_POST['judul']));
	$isi = $db->escape_string($_POST['isi']);
	$captcha = $db->escape_string($_POST['captcha']);
	$user_id = $auth->getSession('user_id');
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
				URL::Redirect('forum/topik/baca/'.$slug);
			} else {
				$errorCaptcha = 'Captcha Tidak Cocok';
				$thread_title = $judul;
				$thread = $isi;
			}
			break;
		
		case 'update':
			if (md5($captcha) == $_SESSION['captcha_session']) {
				$reply_id = $_POST['id'];
				$sql = "UPDATE thread_reply SET 
							reply_title = '$judul',
								reply = '$isi',
									updated_at = NOW() 
										WHERE reply_id = '$reply_id' ";
				$query = $db->query($sql);
				$sqlSlug = $db->query("SELECT b.thread_slug 
									FROM thread_reply a 
										LEFT JOIN thread b ON a.thread_id = b.thread_id
											WHERE a.reply_id = '$reply_id'");
				$getSlug = $sqlSlug->fetch_assoc();
				$slug = $getSlug['thread_slug'];
				URL::Redirect('forum/topik/baca/'.$slug);
			} else {
				$errorCaptcha = 'Captcha Tidak Cocok';
				$thread_title = $judul;
				$thread = $isi;
			}
			break;
	}
	
}

if (isset($_GET['act'])) {
	switch ($_GET['act']) {
		case 'edit':
			$act = "update";
			$id = $db->escape_string($_GET['id']);
			$edit = $db->query("SELECT thread_slug,thread_id,content,post_title,post_id 
									FROM v_thread_post 
											WHERE post_id = '$id'");
			$rowEdit = $edit->fetch_assoc();
			$slug = $rowEdit['thread_slug'];
			$thread_id = $rowEdit['post_id'];
			$thread_title = $rowEdit['post_title'];
			$thread = $rowEdit['content'];
			break;
		
		case 'delete':
			$id = $db->escape_string($_GET['id']);
			$delete = $db->query("SELECT b.thread_slug 
									FROM thread_reply a 
										LEFT JOIN thread b ON a.thread_id = b.thread_id
											WHERE a.reply_id = '$id'");
			$rowDelete = $delete->fetch_assoc();
			$slug = $rowDelete['thread_slug'];;
			$db->query("UPDATE thread_reply SET reply_sts = 0 WHERE reply_id = $id");
			URL::Redirect('forum/topik/baca/'.$slug);
			break;
	}
}