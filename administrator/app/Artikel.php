<?php 

	include "../app/lib/Pagination.php";
	include "../app/lib/IUploads.php";
	include '../app/lib/Slug.php';
	include '../app/lib/Filter.php';

	$table 		= 'article';
	$view		= 'v_article';
	$primaryKey = 'article_id';
	$fieldInsert= 'category_id,article_title,article_content,article_pict,user_id,article_slug,kota_id';
	$uploadError = '';
	$statusField = 'article_sts';
	$act = 'add';
	$act_title = "Buat Artikel Baru";
	$article_id = $category_id = $article_title = $article_content = $latitude = $longitude = '';
	$uploadRules = array(
		'allow_type'=>'jpg|png',
		'upload_folder'=>'../uploads/article_cover/',
		'max_size'=>1000
	);

	$list_category = $db->query('SELECT * FROM category 
									WHERE category_sts = 1 AND sub_category_id = 0');

	if (isset($_POST['simpan'])) {
		$article_id  = $db->escape_string($_POST['id']);
		$category_id = $db->escape_string($_POST['kategori']);
		$judul 		 = $db->escape_string(Filter::XSS($_POST['judul']));
		$slug  		 = Slug::Make($judul);
		$isi 		 = $db->escape_string($_POST['isi']);
		$kabupaten    = $db->escape_string($_POST['kabupaten']);
		$captcha 	 = $db->escape_string($_POST['captcha']);
		$user_id 	 = $auth->getSession('user_id');
		switch ($_POST['act']) {
			case 'add':
				if (md5($captcha) == $_SESSION['captcha_session']) {
									
					if (!empty($latitude) && !empty($longitude)) {
						if (!empty($_FILES['gambar']['tmp_name'])) {

							$gambar = new IUploads('gambar',$uploadRules);
							if ($gambar->upload()) {
								$dataUpload = $gambar->data();
								$sql = "INSERT INTO $table ($fieldInsert) 
											VALUES('$category_id','$judul','$isi','$dataUpload[nameHashed]','$user_id','$slug','$kabupaten','$latitude','$longitude')";
								$query = $db->query($sql);
								URL::Redirect('artikel');
							} else {
								$uploadError = $gambar->uploadError();	
								$article_title = $judul;
								$article_content = $isi;
							}

						} else {

							$sql = "INSERT INTO $table ($fieldInsert) 
										VALUES('$category_id','$judul','$isi','','$user_id','$slug','$kabupaten','$latitude','$longitude')";
							$query = $db->query($sql);
							URL::Redirect('artikel');

						}
					} else {
						$errorCaptcha = 'Anda Belum menandai peta';
						$article_title = $judul;
						$article_content = $isi;
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
					$latitude = $rowEdit['latitude']; 
					$longitude = $rowEdit['longitude'];  
				}
				break;
		}
	}

	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM $view WHERE $statusField = 1 ORDER BY $primaryKey DESC LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM $view WHERE $statusField = 1")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'artikel',$jmlhalaman):'';
