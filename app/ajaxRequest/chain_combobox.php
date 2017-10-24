<?php
include '../config/config.php';
$provinsi = $_POST['provinsi'];
$kabQuery = $db->query("SELECT * FROM master_kokab WHERE provinsi_id = '$provinsi' ");
$proQuery = $db->query("SELECT * FROM master_provinsi WHere provinsi_id = '$provinsi' ");
$rowPro   = $proQuery->fetch_assoc();
$option = '';
while ($row = $kabQuery->fetch_assoc()) {
	$option .= "<option value='".$row['kota_id']."'>".$row['kokab_nama']."</option>";
}

echo json_encode(array('option'=>$option,'lat'=>$rowPro['latitude'],'lng'=>$rowPro['longitude']));