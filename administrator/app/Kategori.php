<?php 
	
	include "../app/lib/Pagination.php";
	include "../app/lib/IUploads.php";

	$title			= 'Buat Kategori';
	$table 			= 'category';
	$primaryKey 	= 'category_id';
	$fieldInsert	= 'category_name,sub_category_id,category_desc,map_icon';
	$act 			= 'add';
	$sub_category_id = $category_desc =$category_name 	= '';
	$path =  realpath(dirname(__FILE__));
	if (strpos($path,"administrator/app") == false) {
		$rootFolder = str_replace("administrator\app", "", $path);
	} else {
		$rootFolder = str_replace("administrator/app", "", $path);
	}
	
	$uploadRules = array(
		'allow_type'=>'jpg|png|jpeg|gif',
		'upload_folder'=>$rootFolder."uploads/map_icon/",
		'max_size'=>1000
	);
	if (isset($_POST['simpan'])) {
		$category = $db->escape_string($_POST['kategori']);
		$category_id = $db->escape_string($_POST['category_id']);
		$category_description = $db->escape_string($_POST['desk_kategori']);
		$sub_category = $db->escape_string($_POST['subkategori']);
		switch ($_POST['act']) {
			case 'add':
				if (!empty($_FILES['map_marker']['tmp_name'])) {
					$map_icon = new IUploads('map_marker',$uploadRules);
					if ($map_icon->upload()) {
						$dataUpload = $map_icon->data();
						$sql = "INSERT INTO $table ($fieldInsert) 
							VALUES('$category','$sub_category','$category_description','$dataUpload[nameHashed]') ";
						$query = $db->query($sql);	
					} else {
						$uploadError = $map_icon->uploadError();
						$category_name = $category;
						$category_desc = $category_description;
						$sub_category_id = $sub_category;
					}
					
					
				} else {
					$sql = "INSERT INTO $table ($fieldInsert) 
							VALUES('$category','$sub_category','$category_description','') ";
						$query = $db->query($sql);
				}
				
				
				break;
			
			case 'update':
				if (!empty($_FILES['map_marker']['tmp_name'])) {
					$map_icon = new IUploads('map_marker',$uploadRules);
					if ($map_icon->upload()) {
						$dataUpload = $map_icon->data();
						$sql = "UPDATE $table 
							SET category_name = '$category',sub_category_id = '$sub_category',
								 category_desc = '$category_description', map_icon = '$dataUpload[nameHashed]' 
								WHERE $primaryKey = $category_id ";
						$query = $db->query($sql);
					} else {
						$uploadError = $map_icon->uploadError();
						$category_name = $category;
						$category_desc = $category_description;
						$sub_category_id = $sub_category;
					}
					
					
				} else {
					$sql = "UPDATE $table 
							SET category_name = '$category',sub_category_id = '$sub_category', category_desc = '$category_description' 
								WHERE $primaryKey = $category_id ";
					$query = $db->query($sql);
				}
				
				break;
		}

		URL::Redirect('kategori');
		
	}

	if (isset($_GET['act'])) {
		switch ($_GET['act']) {
			case 'delete':
				$id = $db->escape_string($_GET['id']);
				$db->query("UPDATE $table 
								SET category_sts = 0 
									WHERE $primaryKey = '". $id ."'");
				URL::Redirect('kategori');
				break;
			
			case 'edit':
				$id = $db->escape_string($_GET['id']);
				$find = $db->query("SELECT * FROM $table WHERE $primaryKey = $id");
				$row = $find->fetch_object();
				$category_id = $row->category_id;
				$category_name = $row->category_name;
				$category_desc = $row->category_desc;
				$sub_category_id = $row->sub_category_id;
				$act = 'update';
				$title = 'Edit Kategori';
				break;
		}
	}

	$paging = new Pagination();
	$batas = 10;
	$posisi = $paging->cariPosisi($batas);
	$result = $db->query("SELECT * FROM $table  WHERE category_sts = 1 LIMIT $posisi,$batas");
	$alldata = $db->query("SELECT * FROM $table WHERE category_sts = 1")->num_rows;
	$jmlhalaman = $paging->jumlahHalaman($alldata, $batas);
	$renderPagination = $jmlhalaman > 1?$paging->navHalaman($_GET['hal'],'kategori',$jmlhalaman):'';
