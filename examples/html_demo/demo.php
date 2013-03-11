<?php
include('../../captchaimg.class.php');
$cap = new CaptchaImg();
$cap->base_dir = '/usr/local/nginx/html/captchaimg/';
$cap->draw();
?>
