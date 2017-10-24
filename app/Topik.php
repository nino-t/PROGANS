<?php 

	include 'lib/Slug.php';
	include 'lib/Pagination.php';
	include 'lib/Filter.php';

	$table 		= 'thread';
	$view		= 'v_thread';
	$primaryKey = 'thread_id';
	$fieldInsert= 'category_id,thread_title,user_id,thread_slug,kota_id';
	$statusField = 'thread_sts';
	$category_id = $thread_id = $thread_title = $thread = '';
	$act_title = "Buat Topik Baru";
	$act = 'add';
	$list_category = $db->query('SELECT * FROM category 
									WHERE category_sts = 1 AND sub_category_id = 0');

	if (isset($_POST['simpan'])) {
		
		$thread_id = $db->escape_string($_POST['id']);
		$category_id = isset($_POST['kategori'])?$db->escape_string($_POST['kategori']):'';
		$judul = $db->escape_string(Filter::XSS($_POST['judul']));
		$slug  = Slug::Make($judul);
		$isi = $db->escape_string($_POST['isi']);
		$kabupaten    = $db->escape_string($_POST['kabupaten']);
		$captcha = $db->escape_string($_POST['captcha']);
		$user_id = $auth->getSession('user_id');
		
		switch ($_POST['act']) {
			case 'add':
				if (md5($captcha) == $_SESSION['captcha_session']) {
		
					$sql = "INSERT INTO $table ($fieldInsert) 
								VALUES('$category_id','$judul','$user_id','$slug','$kabupaten')";
					$query = $db->query($sql);
					$last_id = $db->insert_id;
					$sql2 = "INSERT INTO thread_post(thread_id,user_id,post_title,content) 
								VALUES('$last_id','$user_id','$judul','$isi')";
					$query2 = $db->query($sql2);
					URL::Redirect('forum');
					
				} else {
		
					$errorCaptcha = 'Captcha Tidak Cocok';
					$thread_title = $judul;
					$thread = $isi;
				
				}
				
				break;
			
			case 'update':
				if (md5($captcha) == $_SESSION['captcha_session']) {
				
					$sql = "UPDATE thread_post SET post_title = '$judul',
					 				 content = '$isi',
					 				 	 updated_at = NOW() WHERE post_id = '$thread_id' ";
					$query = $db->query($sql);
					URL::Redirect('forum');
				
				} else {
				
					$errorCaptcha = 'Captcha Tidak Cocok';
					$thread_title = $judul;
					$thread = $isi;
				
				}
				
				break;
		}
	}

	if (isset($_GET['act'])) {
		
		$id = $db->escape_string($_GET['id']);
		
		switch ($_GET['act']) {
			case 'delete':
				
				$delete = $db->query("UPDATE thread SET thread_sts = 0 
										WHERE $primaryKey = '$id' ");
				$delete2 = $db->query("UPDATE thread_post SET post_sts = 0 
										WHERE $primaryKey = '$id' ");
				header("Location:".$_SERVER['HTTP_REFERER']);			
				break;
			
			case 'edit':
		
				$act='update';
				$act_title = "Edit Topik";
				$edit = $db->query("SELECT post_title, content FROM thread_post WHERE post_id = $id");
				if ($edit->num_rows == 1) {
					$rowEdit = $edit->fetch_assoc();
					$thread_id = $id; 
					$thread_title = $rowEdit['post_title']; 
					$thread = $rowEdit['content']; 
				}
				break;
		}
	}

	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM v_thread
						  WHERE thread_sts = 1
						  ORDER BY thread_id DESC
						  LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM v_thread
						   WHERE thread_sts = 1
						   ORDER BY thread_id DESC")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'forum',$jmlhalaman):'';