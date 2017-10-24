<?php 
	
	include "lib/Pagination.php";

	$title			= 'Buat Kategori';
	$table 			= 'category';
	$primaryKey 	= 'category_id';
	$fieldInsert	= 'category_name,sub_category_id,category_desc';
	$act 			= 'add';
	$sub_category_id = $category_desc =$category_name 	= '';
	
	if (isset($_POST['simpan'])) {
		$category = $db->escape_string($_POST['kategori']);
		$category_id = $db->escape_string($_POST['category_id']);
		$category_desc = $db->escape_string($_POST['desk_kategori']);
		$sub_category_id = $db->escape_string($_POST['subkategori']);
		switch ($_POST['act']) {
			case 'add':
				$sql = "INSERT INTO $table ($fieldInsert) 
							VALUES('$category','$sub_category_id','$category_desc') ";
				$query = $db->query($sql);
				break;
			
			case 'update':
				$sql = "UPDATE $table 
							SET category_name = '$category',sub_category_id = '$sub_category_id', category_desc = '$category_desc' 
								WHERE $primaryKey = $category_id ";
				$query = $db->query($sql);
				break;
		}

		URL::Redirect('administrator/kategori');
		
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
