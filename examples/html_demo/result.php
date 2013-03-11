<?php
session_start();
$captcha_img = strtolower($_SESSION['captchaimg']);
$captcha_post = strtolower($_POST['captcha']);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Captcha Img Example 1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style>
			body {
				background-color: #F4F4F4;
				color: #004458;
				font-family: arial;
				font-size: 13px;
				line-height: 140%;
			}
			#content {
				width: 500px;
				margin: 0 auto;
				background-color: #D9ECF4;
				border-radius: 4px 4px 4px 4px;
				box-shadow: 0 0 2px #999999;
				padding: 1px 30px 30px 30px;
			}
			label {
				display: block;
			}
			img {
				border: 1px solid black;
				display: block;
				margin: 10px auto;
			}
			#form-div {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<?php if ($captcha_img == $captcha_post) {	?>
			<h1>Captcha image and text matches!</h1>
			<?php } else { ?>
			<h1>Captcha image and text did not match!</h1>
			<?php } ?>
			<p>
				Captcha Image: <b><?php echo $captcha_img; ?></b>
			</p>
			<p>
				Captcha Text: <b><?php echo $captcha_post; ?></b>
			</p>
			<a href="example.html">Try Again</a>
		</div>
	</body>
</html>
