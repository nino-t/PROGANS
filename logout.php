<?php 
session_start();
include 'app/lib/Auth.php';
include 'app/lib/Url.php';
$auth = new Auth();
$auth->logout();
URL::Redirect('');
?>