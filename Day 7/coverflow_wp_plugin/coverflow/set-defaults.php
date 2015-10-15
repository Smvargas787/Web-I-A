<?php
$settings_array['Global']['path'] = 'coverflow/';
$settings_array['Global']['coverflowWidth'] = 1200;
$settings_array['Global']['coverflowHeight'] = 450;
$settings_array['Global']['backgroundColor'] = "";
$settings_array['Global']['imageWidth'] = 250;
$settings_array['Global']['imageHeight'] = 200;
$settings_array['Global']['imageSpacing'] = 100;
$settings_array['Global']['frontImageSpacing'] = 140;
$settings_array['Global']['imageRotation'] = 60;
$settings_array['Global']['imagePerspective'] = 600;
$settings_array['Global']['frontImageScaleRatio'] = 150;
$settings_array['Global']['bindMouseWheel'] = false;
$settings_array['Global']['bindArrowKeys'] = true;
$settings_array['Global']['mouseCursor'] = "grab";
$settings_array['Global']['transitionDuration'] = 500;
$settings_array['Global']['transitionFunction'] = "ease";

$settings_array['Reflection']['reflection'] = true;
$settings_array['Reflection']['reflectionColor'] = "#ffffff";
$settings_array['Reflection']['reflectionSize'] = 33;
$settings_array['Reflection']['reflectionSpread'] = 50;
$settings_array['Reflection']['reflectionOpacity'] = 50;

$settings_array['Scrollbar']['scrollbar'] = true;
$settings_array['Scrollbar']['scrollbarWidth'] = 770;
$settings_array['Scrollbar']['scrollbarHeight'] = 20;
$settings_array['Scrollbar']['thumbWidth'] = "auto";
$settings_array['Scrollbar']['scrollBackColor'] = "rgba(100,100,100,0.3)";
$settings_array['Scrollbar']['thumbColor'] = "#f2f2f2";
$settings_array['Scrollbar']['borderRadius'] = 10;
$settings_array['Scrollbar']['useArrows'] = false;
$settings_array['Scrollbar']['marginTop'] = 330;

$settings_array['Shadow']['imageShadows'] = true;
$settings_array['Shadow']['shadowSize'] = 30;
$settings_array['Shadow']['shadowOpacity'] = 15;

$settings_array['Controller']['controller'] = true;
$settings_array['Controller']['arrows'] = true;
$settings_array['Controller']['autoPlay'] = false;
$settings_array['Controller']['pauseDelay'] = 3000;
$settings_array['Controller']['controllerSkin'] = "light";
$settings_array['Controller']['controllerMarginTop'] = 380;
$settings_array['Controller']['preloaderMarginTop'] = 1;
$settings_array['Controller']['preloaderMarginLeft'] = 62;

$settings_array['Text']['fontFamily'] = "Lucida Sans Unicode";
$settings_array['Text']['fontSize'] = 18;
$settings_array['Text']['fontColor'] = "#ffffff";
$settings_array['Text']['fontBackColor'] = "rgba(0, 0, 0, 0.3)";
$settings_array['Text']['fontPosition'] = "bottom";
$settings_array['Text']['fontMarginTop'] = 100;
$settings_array['Text']['fontWidth'] = "auto";


$imgname = array
    (
        "01-tunnel.jpg",
        "02-couple.jpg",
        "03-bridge.jpg",
        "04-china.jpg",
        "05-camera.jpg",
        "06-free.jpg",
        "07-joy.jpg",
        "08-feet.jpg",
        "09-girl.jpg",
        "10-beach.jpg",
    );

$textinput = array
    (
        '<p>The text and images are easily indexed by search engines</p>',
        '<p>The text over the images is optional <br> and it is <span style=\"color: #f55; font-weight: bold; font-size: 20px;\">CSS</span><span style=\"color: yellow; font-style: italic;\">formatted</span></p>',
        '<p>You can also have <a href=\"http://www.example.com\" target=\"_blank\" style=\"color: #00a;\">links</a></p>',
        '', 
        '<p>This is a new CSS Jquery Coverflow.</p><p>Install it for free on your website</p>',
        '<p>Works great on iPhone and iPad</p><p>with tap and swipe movements</p>',
        '<p>The Coverflow is responsive</p><p>Narrow the width of your browser to see</p>',
        '<p>Clicking on this image</p><p>Will open a lightbox with a bigger image</p>',
        '<p>Clicking on this image</p><p>Will take you to an external link</p>',
        '<p>But it could also take you to a link inside your web page</p>',
    );

$cap = array
    (
        '',
        'lightbox caption 02',
        'lightbox caption 03',
        '',
        'lightbox caption 05',
        'lightbox caption 06',
        'lightbox caption 07',
        'lightbox caption 08',
        '',
        'lightbox caption 10',
    );

$target = array
    (
        '_blank',
        'lightbox',
        'lightbox',
        'none',
        'lightbox',
        'lightbox',
        'lightbox',
        'lightbox',
        '_blank',
        'lightbox',
    );

$linkinput = array
    (
        'http://www.example.com',
        'img/02-couple.jpg',
        'img/03-bridge.jpg',
        '',
        'img/05-camera.jpg',
        'img/06-free.jpg',
        'img/07-joy.jpg',
        'img/08-feet.jpg',
        'http://www.example.com',
        'img/10-beach.jpg',
    );

$images_array = array(
		'imgname' => $imgname,
		'textinput' => $textinput,
		'cap' => $cap,
		'target' => $target,
		'linkinput' => $linkinput,
	);


?>