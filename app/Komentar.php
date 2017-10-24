<?php 

	include "lib/Pagination.php";
	include "lib/IUploads.php";
	include 'lib/Slug.php';

	$title 		= 'Tambah Komentar';
	$table 		= 'article_comment';
	$view		= 'v_article';
	$primaryKey = 'comment_id';
	$fieldInsert= 'article_id,user_id,replay_id,comment,created_at';
	$uploadError = '';
	$statusField = 'comment_sts';
	$act = 'add';
	$act_title = "Buat Komentar Baru";
	$comment_id = $article_id = $user_id = $replay_id = $comment = '';

	$list_article = $db->query('SELECT * FROM article 
									WHERE article_sts = 1');

	if (isset($_POST['simpan'])) {
		$commentar_id  = $db->escape_string($_POST['id']);
		$article_id = $db->escape_string($_POST['article']);
		$judul 		 = $db->escape_string($_POST['judul']);		
		$isi 		 = $db->escape_string($_POST['isi']);
		$kabupaten    = $db->escape_string($_POST['kabupaten']);
		$captcha 	 = $db->escape_string($_POST['captcha']);
		$user_id 	 = $auth->getSession('user_id');
		switch ($_POST['act']) {
			case 'add':
				if (md5($captcha) == $_SESSION['captcha_session']) {
									
					if (!empty($_FILES['gambar']['tmp_name'])) {

						$gambar = new IUploads('gambar',$uploadRules);
						if ($gambar->upload()) {
							$dataUpload = $gambar->data();
							$sql = "INSERT INTO $table ($fieldInsert) 
										VALUES('$category_id','$judul','$isi','$dataUpload[nameHashed]','$user_id','$slug','$kabupaten')";
							$query = $db->query($sql);
							URL::Redirect('artikel');
						} else {
							$uploadError = $gambar->uploadError();	
							$article_title = $judul;
							$article_content = $isi;
						}

					} else {

						$sql = "INSERT INTO $table ($fieldInsert) 
									VALUES('$category_id','$judul','$isi','','$user_id','$slug','$kabupaten')";
						$query = $db->query($sql);
						URL::Redirect('artikel');

					}

				} else {
					$errorCaptcha = 'Captcha Tidak Cocok';
					$article_title = $judul;
					$article_content = $isi;
				}

				break;
			
			case 'update':
				if (md5($captcha) == $_SESSION['captcha_session']) {
									
					if (!empty($_FILES['gambar']['tmp_name'])) {

						$gambar = new IUploads('gambar',$uploadRules);
						if ($gambar->upload()) {
							$dataUpload = $gambar->data();
							$sql = "UPDATE $table SET article_title = '$judul' ,
											 article_content = '$isi' , 
												article_pict = '$dataUpload[nameHashed]',
													updated_at = NOW() 
														WHERE $primaryKey = '$article_id' ";
							$query = $db->query($sql);
							
							URL::Redirect('artikel');

						} else {
							$uploadError = $gambar->uploadError();
							$article_title = $judul;
							$article_content = $isi;	
						}

					} else {

						$sql = "UPDATE $table SET article_title = '$judul' , 
									article_content = '$isi', updated_at = NOW() 
										WHERE $primaryKey = $article_id ";
						$query = $db->query($sql);
						
						URL::Redirect('artikel');
						

					}

				} else {
					$errorCaptcha = 'Captcha Tidak Cocok';
					$article_title = $judul;
					$article_content = $isi;
				}
				break;
		}
	}

	if (isset($_GET['act'])) {
		
		switch ($_GET['act']) {
			case 'delete':
				$id = $db->escape_string($_GET['id']);
				$db->query("UPDATE $table SET $statusField = 0 WHERE $primaryKey = $id");
				URL::Redirect('artikel');
				break;
			
			case 'edit':
				$act = 'update';
				$act_title = "Edit Artikel";
				$id = $db->escape_string($_GET['id']);
				$edit = $db->query("SELECT * FROM $table WHERE $primaryKey = $id");
				if ($edit->num_rows == 1) {
					$rowEdit = $edit->fetch_assoc();
					$article_id = $id; 
					$category_id = $rowEdit['category_id']; 
					$article_title = $rowEdit['article_title']; 
					$article_content = $rowEdit['article_content']; 
					$article_pict = $rowEdit['article_pict']; 
				}
				break;
		}
	}

	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM article_comment JOIN article ON article.article_id = article_comment.article_id JOIN users ON users.user_id = article.user_id  WHERE article_comment.comment_sts = 1 ORDER BY article_comment.comment_id DESC LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM article_comment JOIN article ON article.article_id = article_comment.article_id JOIN users ON users.user_id = article.user_id  WHERE article_comment.comment_sts = 1")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'komentar',$jmlhalaman):'';
?>
