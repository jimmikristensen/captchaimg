PHP Captcha Image
================================

This is a very simple, yet advanced, Captcha Image generator for PHP.
It works by creating a jpeg image in PHP, which is outputted in a <img> tag.

It stores a session whenever the image is generated, which can be read on a form submit page for validation.

Try out the different examples in the examples dir. It countains a simple html example, two examples that uses JavaScript and jQuery to reload a new image on click and an advanced example that uses an image that is harder to read.

Installation
-------------------------

### Step 1: Download the project.

Download the project and put it on your web server somewhere.
You do not need the examples dir only the captchaimg.class.php and the fonts dir.

### Step 2: Create a PHP file for the image.

Create a PHP file that includes the captchaimg.class.php file, create a new instance of the CaptchaImg class and set your configuration. The simplest form looks like below:

``` php
<?php
include('captchaimg.class.php');
$cap = new CaptchaImg();
$cap->draw();
?>
```php

### Step 3: Make an image in your HTML.

In your html file, create a <img> that uses your .php image file as src.
You also need a form that reads the user input to check if the user wrote the same captcha as in the image.

``` html
<form action="result.php" method="post">
	<label for="captcha">Write the content of the image</label>
	<input type="text" name="captcha" value=""/>
	<img src="demo.php"/>
	<input type="submit" name="submit-img" value="Submit"/>
</form>
```

### Step 4: Validate the captcha.

On the submission page, you validate if the user input string is equal to the string saved in the $_SESSION('captchaimg').

Options
=======

You change the properties of the image by changing the public variables in the CaptchaImg class. Below is a list of all possible configurations.


``` php
$cap->base_dir = '/usr/local/nginx/html/captchaimg/';
```php



License
=======

The Captcha Image is under the GPL license.