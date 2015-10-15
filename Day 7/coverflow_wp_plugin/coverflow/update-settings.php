<?php 

if ($_POST['action'] == "update") {

	if (isset($_POST['path'])) $settings_array['Global']['path'] = $_POST['path'];
	if (isset($_POST['coverflowWidth'])) $settings_array['Global']['coverflowWidth'] = $_POST['coverflowWidth'];
	if (isset($_POST['coverflowHeight'])) $settings_array['Global']['coverflowHeight'] = $_POST['coverflowHeight'];
	if (isset($_POST['backgroundColor'])) $settings_array['Global']['backgroundColor'] = $_POST['backgroundColor'];
	if (isset($_POST['imageWidth'])) $settings_array['Global']['imageWidth'] = $_POST['imageWidth'];

	//change imageHeight property in here
	$settings_array['Global']['imageHeight'] = $settings_array['Global']['imageWidth'] / 1.25;
	if (isset($_POST['imageSpacing'])) $settings_array['Global']['imageSpacing'] = $_POST['imageSpacing'];
	if (isset($_POST['frontImageSpacing'])) $settings_array['Global']['frontImageSpacing'] = $_POST['frontImageSpacing'];
	if (isset($_POST['imageRotation'])) $settings_array['Global']['imageRotation'] = $_POST['imageRotation'];
	if (isset($_POST['imagePerspective'])) $settings_array['Global']['imagePerspective'] = $_POST['imagePerspective'];
	if (isset($_POST['frontImageScaleRatio'])) $settings_array['Global']['frontImageScaleRatio'] = $_POST['frontImageScaleRatio'];
	if (isset($_POST['bindMouseWheel'])) $settings_array['Global']['bindMouseWheel'] = true;
	else $settings_array['Global']['bindMouseWheel'] = false;
	if (isset($_POST['bindArrowKeys']))	$settings_array['Global']['bindArrowKeys'] = true;
	else $settings_array['Global']['bindArrowKeys'] = false;
	if (isset($_POST['mouseCursor'])) $settings_array['Global']['mouseCursor'] = $_POST['mouseCursor'];
	if (isset($_POST['transitionDuration'])) $settings_array['Global']['transitionDuration'] = $_POST['transitionDuration'];
	if (isset($_POST['transitionFunction'])) $settings_array['Global']['transitionFunction'] = $_POST['transitionFunction'];

	if ( isset($_POST['useRefl'])) $settings_array['Reflection']['reflection'] = true;
	else $settings_array['Reflection']['reflection'] = false;
	if (isset($_POST['reflectionColor'])) $settings_array['Reflection']['reflectionColor'] = $_POST['reflectionColor'];
	if (isset($_POST['reflectionSize'])) $settings_array['Reflection']['reflectionSize'] = $_POST['reflectionSize'];
	if (isset($_POST['reflectionSpread'])) $settings_array['Reflection']['reflectionSpread'] = $_POST['reflectionSpread'];
	if (isset($_POST['reflectionOpacity'])) $settings_array['Reflection']['reflectionOpacity'] = $_POST['reflectionOpacity'];

	if ( isset($_POST['useScrollbar'])) $settings_array['Scrollbar']['scrollbar'] = true;
	else $settings_array['Scrollbar']['scrollbar'] = false;
	if (isset($_POST['scrollbarWidth'])) $settings_array['Scrollbar']['scrollbarWidth'] = $_POST['scrollbarWidth'];
	if (isset($_POST['scrollbarHeight'])) $settings_array['Scrollbar']['scrollbarHeight'] = $_POST['scrollbarHeight'];
	if (isset($_POST['thumbWidth'])) $settings_array['Scrollbar']['thumbWidth'] = $_POST['thumbWidth'];
	if (isset($_POST['scrollBackColor'])) $settings_array['Scrollbar']['scrollBackColor'] = $_POST['scrollBackColor'];
	if (isset($_POST['thumbColor'])) $settings_array['Scrollbar']['thumbColor'] = $_POST['thumbColor'];
	if (isset($_POST['scrollBorderRad'])) $settings_array['Scrollbar']['borderRadius'] = $_POST['scrollBorderRad'];
	if (isset($_POST['useArrows'])) $settings_array['Scrollbar']['useArrows'] = true;
	else $settings_array['Scrollbar']['useArrows'] = false;
	if (isset($_POST['scrollMT'])) $settings_array['Scrollbar']['marginTop'] = $_POST['scrollMT'];

	if ( isset($_POST['useImageShadow'])) $settings_array['Shadow']['imageShadows'] = true;
	else $settings_array['Shadow']['imageShadows'] = false;
	if (isset($_POST['shadowSize'])) $settings_array['Shadow']['shadowSize'] = $_POST['shadowSize'];
	if (isset($_POST['shadowOpacity'])) $settings_array['Shadow']['shadowOpacity'] = $_POST['shadowOpacity'];

	if ( isset($_POST['useController'])) $settings_array['Controller']['controller'] = true;
	else $settings_array['Controller']['controller'] = false;
	if ( isset($_POST['showArrows'])) $settings_array['Controller']['arrows'] = true;
	else $settings_array['Controller']['arrows'] = false;
	if ( isset($_POST['autoPlay'])) $settings_array['Controller']['autoPlay'] = true;
	else $settings_array['Controller']['autoPlay'] = false;
	if (isset($_POST['pauseDelay'])) $settings_array['Controller']['pauseDelay'] = $_POST['pauseDelay'];
	if (isset($_POST['controllerSkin'])) $settings_array['Controller']['controllerSkin'] = $_POST['controllerSkin'];
	if (isset($_POST['controllerMarginTop'])) $settings_array['Controller']['controllerMarginTop'] = $_POST['controllerMarginTop'];
	if (isset($_POST['preloaderMarginTop'])) $settings_array['Controller']['preloaderMarginTop'] = $_POST['preloaderMarginTop'];
	if (isset($_POST['preloaderMarginLeft'])) $settings_array['Controller']['preloaderMarginLeft'] = $_POST['preloaderMarginLeft'];

	if (isset($_POST['fontFamily'])) $settings_array['Text']['fontFamily'] = $_POST['fontFamily'];
	if (isset($_POST['fontSize'])) $settings_array['Text']['fontSize'] = $_POST['fontSize'];
	if (isset($_POST['fontColor'])) $settings_array['Text']['fontColor'] = $_POST['fontColor'];
	if (isset($_POST['fontBackColor'])) $settings_array['Text']['fontBackColor'] = $_POST['fontBackColor'];
	if (isset($_POST['fontPosition'])) $settings_array['Text']['fontPosition'] = $_POST['fontPosition'];
	if (isset($_POST['fontMarginTop'])) $settings_array['Text']['fontMarginTop'] = $_POST['fontMarginTop'];
	if (isset($_POST['fontWidth'])) $settings_array['Text']['fontWidth'] = $_POST['fontWidth'];
} elseif ($_POST['action'] == "restore") {
	require('set-defaults.php');
}

 ?>