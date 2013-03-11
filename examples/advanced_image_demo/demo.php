<?php
include('../../captchaimg.class.php');
$cap = new CaptchaImg();
$cap->base_dir = '/usr/local/nginx/html/captchaimg/';
$cap->font = 'Momоt___.ttf';
$cap->font_size = 26;
$cap->code_length = 5;
$cap->bg_color = '#E0E3E5';
$cap->text_color = '#96999B';
$cap->text_angle = 20;
$cap->letter_jump_x = 16;
$cap->letter_jump_y = 10;
$cap->text_start_location = 20;
$cap->line_count = 10;
$cap->line_color = '#96999B';
$cap->arc_count = 20;
$cap->arc_color = '#96999B';
$cap->noise_count = 200;
$cap->noise_color = '#CACCCE';
$cap->draw();
?>
