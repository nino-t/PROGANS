<?php
include '../config/config.php';
$kabupaten = $_POST['kabupaten'];
$kabQuery = $db->query("SELECT * FROM master_kokab WHERE kota_id = '$kabupaten' ");
$rowKab   = $kabQuery->fetch_assoc();
echo json_encode(array('lat'=>$rowKab['latitude'],'lng'=>$rowKab['longitude']));