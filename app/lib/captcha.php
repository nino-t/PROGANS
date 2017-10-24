<?php

    session_start();
    $alphaNumeric  = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $captcha_image = imagecreatefromjpeg("../../assets/images/captcha.jpg");
    $captcha_text = substr(str_shuffle($alphaNumeric), 0, 5);
    $captcha_color = imagecolorallocate($captcha_image,0,0,0);
    
    $_SESSION["captcha_session"] = md5($captcha_text);
    
    imagestring($captcha_image,5,8,7,$captcha_text,$captcha_color);
    imagejpeg($captcha_image);
    imagedestroy($captcha_image);


?>