<?php 
include '../lib/IUploads.php';
include '../lib/Url.php';
$path =  realpath(dirname(__FILE__));
$replace = str_replace("app/ajaxRequest", "uploads/ckeditor_upload/", $path);
$uploadRules = array(
	'allow_type'=>'jpg|png|gif',
	'upload_folder'=>$replace,
	'max_size'=>1000,
);
$upload = new IUploads('upload',$uploadRules);
if ($upload->upload()) {
	$dataImage = $upload->data();
    $funcNum = $_GET['CKEditorFuncNum'];
    $url = URL::Link('../../uploads/ckeditor_upload/'.$dataImage['nameHashed']);
    $message = '.....';
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
} else {
	echo $upload->uploadError();
}
