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

Create a PHP, in this case demo.php, file that includes the captchaimg.class.php file, create a new instance of the CaptchaImg class and set your configuration. The simplest form looks like below:

``` php
<?php
include('captchaimg.class.php');
$cap = new CaptchaImg();
$cap->draw();
?>
```

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
include('captchaimg.class.php');				// include the captcha image file
$cap = new CaptchaImg();						// create a new instance
$cap->base_dir = '/usr/local/nginx/html/capt/';	// absolute path to the project
$cap->font_path = 'fonts/';						// font dir inside the project dir
$cap->font = 'Momоt___.ttf';					// the font to use
$cap->font_size = 30;							// font size
$cap->letter_jump_x = 10;						// the space between letters will be a random between 0 and 10 pixels
$cap->letter_jump_y = 10;						// makes the letters not stand on a line, but will jump up and down in a random pattern from -10 to 10 pixels from the middle line
$cap->text_start_location = 10;					// the staring location of the letters, here it start 10 pixels form the left border
$cap->code = 'foo'								// sets the word on the image to 'foo'
$cap->code_length = 5;							// sets the code length to 5 letters. Does only work if a code is not set
$cap->width = 300;								// sets the width of the image to 300 pixels
$cap->height = 40;								// sets the height of the image to 40 pixels
$cap->bg_color = '#ffffff';						// sets the background color of the image to white
$cap->text_color = '#ff0000';					// sets the color of the font to red
$cap->noise_count = 100;						// adds 100 noise circles to the image
$cap->noise_color = '#ff0000';					// sets the noise color to red
$cap->arc_count = 10;							// adds 10 random arcs to the image
$cap->arc_color = '#ff0000';					// sets the arc color to red
$cap->arc_thickness = 3;						// sets the thickness of the arc to 3 pixels
$cap->line_count = 20;							// adds 20 lines in random locations on the image
$cap->line_color = '#ff0000';					// sets the color of the lines to red
$cap->line_thickness = 3;						// sets the line thickness to 3 pixels
$cap->text_angle = 10;							// will tilt each letter 10 pixels forwards or backwards
$cap->draw();									// outputs the image

```


License
=======

The Captcha Image is under the GPL license.