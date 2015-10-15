<?php 

// $startID = 5;
// $useLightbox = true;


$startID = round(count($images_array['imgname'])/2);
$useLightbox = false;
foreach ($images_array['target'] as $target) {
	if ($target == 'lightbox') {
		$useLightbox = true;
		break;
	}
}


$ulX = ($settings_array['Global']['coverflowWidth']/2-$settings_array['Global']['imageWidth']/2-(($startID-1)*$settings_array['Global']['imageSpacing']));
$html .= '
	<style id="style">
	#coverflow img {
		max-width: none !important;
	}
	#coverflow li {
		margin-left: 0;
		margin-right: 0;
		margin-top: 0;
	}

	#coverflow {'.
		'max-width: '. $settings_array['Global']['coverflowWidth'] .'px;'.
		'height: '. $settings_array['Global']['coverflowHeight'] .'px;'.
		(($settings_array['Global']['backgroundColor'] !== '')?'background: '.$settings_array['Global']['backgroundColor'] .';':'').
		'position: relative;'.
		'margin: 0 auto;'.
		'-moz-user-select: none;'.
		'-webkit-user-select: none;'.
		'-ms-user-select: none;'.
		'user-select: none;'.
		( ($settings_array['Global']['bindMouseWheel'] == true) ? 'overflow: hidden;' :''	) .
		( ($settings_array['Global']['bindArrowKeys'] == true) ? 'outline: solid 0px;' :'' ) .
	'}'.

	'.covers {width: 100%;height: 100%;margin: 0 auto;overflow: hidden;position: absolute;}'.

	'#coverflow ul {'.
		'top: '. ($settings_array['Global']['imageHeight']*($settings_array['Global']['frontImageScaleRatio']/100 - 1)/2) .'px;'.
		'width: 5000px;'.
		'margin: 0;'.
		'padding: 0;'.
		'position: absolute;'.
		'-webkit-transition: -webkit-transform '. $settings_array['Global']['transitionDuration']/1000 .'s '.$settings_array['Global']['transitionFunction'].';'.
		'transition: transform '. $settings_array['Global']['transitionDuration']/1000 .'s '.$settings_array['Global']['transitionFunction'].';'.
		'-webkit-transform: translate3d('. $ulX .'px, 0, 0);'.
		'transform: translate3d('. $ulX .'px, 0, 0);'.
	'}'.

	'#coverflow li {'.
		'width: '.$settings_array['Global']['imageSpacing'].'px;'.
		'list-style: none;'.
		'float: left;'.
		'-webkit-transition: margin '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].', -webkit-transform '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].';'.
		'transition: margin '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].', transform '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].';'.
		'position: relative;'.
		'pointer-events: none;'.
	'}'.

	'#coverflow .imgdiv {'.
		'width: '.$settings_array['Global']['imageWidth'].'px;'.
		'-webkit-transition: -webkit-transform '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].';'.
		'transition: transform '.$settings_array['Global']['transitionDuration']/1000 . 's '.$settings_array['Global']['transitionFunction'].';'.
		'pointer-events: auto;'.
		'position: relative;'.
		'display: block;'.
		(
			($settings_array['Shadow']['imageShadows'] == true)
			? 'box-shadow: '. $settings_array['Shadow']['shadowSize'] .'px 5px 15px -10px rgba(0,0,0,'. $settings_array['Shadow']['shadowOpacity']/100 .'),'
				. ' -'. $settings_array['Shadow']['shadowSize'] .'px 5px 15px -10px rgba(0,0,0,'. $settings_array['Shadow']['shadowOpacity']/100 .');'
			: ""
		)

	.'}'.

	'#coverflow .imgdiv img {'.
		'width: '. $settings_array['Global']['imageWidth'] .'px;'.
		'display: block;'.
	'}'.

	(
	($settings_array['Reflection']['reflection'] == true)
		? '#coverflow .refl {'.
			'display: block;'.
			'position: absolute;'.
			'top: 100%;'.
			'-webkit-transform: scaleY(-1);'.
			'transform: scaleY(-1);'.
			'opacity: '.$settings_array['Reflection']['reflectionOpacity']/100 . ';'.
		'}'.

		'#coverflow .refl img {'.
			'display: block;'.
		'}'.

		'#coverflow .refl::before {'.
			'content: "";'.
			'position: absolute;'.
			'width: 102%;'.
			'margin-left: -1%;'.
			'height: 100%;'.
			'box-shadow: inset '. $settings_array['Reflection']['reflectionColor'] .' 0 '. $settings_array['Global']['imageWidth']*(100-$settings_array['Reflection']['reflectionSize'])/100 .'px '. $settings_array['Reflection']['reflectionSpread'] . 'px;'.
		'}'
		: '#coverflow .refl {'.
			'display: none;'.
		'}'
	)

	.'#coverflow .text {'.
		'position: absolute;'.
		(
			(($settings_array['Text']['fontPosition'] === 'bottom')?
				'bottom: '.(-$settings_array['Global']['imageHeight']*($settings_array['Global']['frontImageScaleRatio']/100 -1)/2).'px;'.
				'top: auto;':'').
			(($settings_array['Text']['fontPosition'] === 'top')?
				'top: '.(-$settings_array['Global']['imageHeight']*($settings_array['Global']['frontImageScaleRatio']/100 -1)/2).'px;'.
				'bottom: auto;':'').
			(($settings_array['Text']['fontPosition'] !== 'bottom' && $settings_array['Text']['fontPosition'] !== 'top')?
				'bottom: auto;'.
				'top: '.$settings_array['Text']['fontMarginTop'].'px;':'')
		).
		'-moz-box-sizing: border-box;'.
		'box-sizing: border-box;'.
		'-webkit-transition: opacity '.$settings_array['Global']['transitionDuration']/1000 . 's;'.
		'transition: opacity '.$settings_array['Global']['transitionDuration']/1000 . 's;'.
		'opacity: 0;'.
		'visibility: hidden;'.
		'pointer-events: auto;'.
		'background: '.$settings_array['Text']['fontBackColor'].';'.
		(
			($settings_array['Text']['fontWidth'] === 'auto')?
			'width: '.($settings_array['Global']['imageWidth']*$settings_array['Global']['frontImageScaleRatio']/100).'px;'.
			'margin-left: '.(-$settings_array['Global']['imageWidth']*($settings_array['Global']['frontImageScaleRatio']/100 - 1)/2).'px;'
			:
			'width: '.$settings_array['Text']['fontWidth'].'px;'.
			'margin-left: '.(($settings_array['Global']['imageWidth']-$settings_array['Text']['fontWidth'])/2).'px;'
		).
	'}'.

	'#coverflow .text,
	 #coverflow .text p {
		font-size: '.$settings_array['Text']['fontSize'].'px;
		font-family: '.$settings_array['Text']['fontFamily'].',Helvetica, sans-serif;
		color: '.$settings_array['Text']['fontColor'].';
	 }
	'.

	'#coverflow .text p {'.
		'margin: 5px;'.
		'position: relative;'.
		'text-align: center;'.
	'}'.


	'li:nth-child(-n+'.($startID-1).') .imgdiv,'.
	'#coverflow ul li .leftItems {'.
		'-webkit-transform: perspective('.$settings_array['Global']['imagePerspective'].'px) rotateY('.$settings_array['Global']['imageRotation'].'deg);'.
		'transform: perspective('.$settings_array['Global']['imagePerspective'].'px) rotateY('.$settings_array['Global']['imageRotation'].'deg);'.
	'}'.

	'li:nth-child(n+'.($startID+1).') .imgdiv,'.
	'#coverflow ul li .rightItems {'.
		'-webkit-transform: perspective('.$settings_array['Global']['imagePerspective'].'px) rotateY(-'.$settings_array['Global']['imageRotation'].'deg);'.
		'transform: perspective('.$settings_array['Global']['imagePerspective'].'px) rotateY(-'.$settings_array['Global']['imageRotation'].'deg);'.
	'}'.

	'li:nth-child('.$startID.') .imgdiv,'.
	'#coverflow ul li .straight {'.
		'-webkit-transform: rotateY(0deg) scale('.$settings_array['Global']['frontImageScaleRatio']/100 . ');'.
		'transform: rotateY(0deg) scale('.$settings_array['Global']['frontImageScaleRatio']/100 . ');'.
	'}'.


	'#coverflow li:nth-child(-n+'.($startID-1).'),'.
	'#coverflow ul li.leftLI {'.
		'-webkit-transform: translate3d(-'.$settings_array['Global']['frontImageSpacing'].'px, 0, 0);'.
		'transform: translate3d(-'.$settings_array['Global']['frontImageSpacing'].'px, 0, 0);'.
	'}'.

	'#coverflow li:nth-child(n+'.($startID+1).'),'.
	'#coverflow ul li.rightLI {'.
		'-webkit-transform: translate3d('.$settings_array['Global']['frontImageSpacing'].'px, 0, 0);'.
		'transform: translate3d('.$settings_array['Global']['frontImageSpacing'].'px, 0, 0);'.
	'}'.

	'#coverflow ul .straightLI {'.
		'-webkit-transform: translate3d(0, 0, 0);'.
		'transform: translate3d(0, 0, 0);'.
	'}'.

	'.notransition {'.
		'-webkit-transition: none !important;'.
		'transition: none !important;'.
	'}'.


	'#coverflow .imgdiv a,'.
	'#coverflow .text {'.
		'cursor: pointer;'.
		(
			($settings_array['Global']['mouseCursor'] === "grab")
			? 'cursor: -webkit-grab;'.
			  'cursor: grab;'
			: ''
		)
	.'}' .

	'#coverflow .Preloader {'.
		(
			($settings_array['Controller']['autoPlay'] == true)
			? 'display: block;'
			: 'display: none;'
		)
	.'}'.

	'#coverflow .Lightbox {'.
		(
			($useLightbox) 
			? 'display: block;'
			: 'display: none;'
		)
	.'}';
	
if ($settings_array['Controller']['controller']) {
	$html .= 
	'.Controller { z-index: 10000; position: absolute; left: 50%; margin-top: '. $settings_array['Controller']['controllerMarginTop'].'px; }'.
	'#relativediv { position: relative; left: -50%; }'.
	'.Controller img { margin-right: 3px; position: relative; opacity: .6; cursor: pointer; }'.
	'.Controller img:hover { opacity: 1; }'.
	'#prev {'. ($settings_array['Controller']['arrows']?'-webkit-transform: scaleX(-1); transform: scaleX(-1); margin-left:3px;':'display: none').'}'.
	($settings_array['Controller']['arrows']?'':'#next {display: none}').
	'#play { position: relative; }'.
	'#pause-span { visibility: hidden; position: relative; }'.
	'#pause { position: absolute; right: 100%; }'.
	'.Preloader {'.
		'position: absolute;'.
		'width: 30px;'.
		'height: 30px;'.
		'margin-left: '.$settings_array['Controller']['preloaderMarginLeft'].'%;'.
		'margin-top: '.$settings_array['Controller']['preloaderMarginTop'].'%;'.
		'background-color: #aaa;'.
		'border: 3px solid #333;'.
		'-webkit-border-radius: 100%;'.
		'border-radius: 100%;'.
		'z-index: 9999;'.
		'opacity: 0;'.
		'visibility: hidden;'.
		'-webkit-transition: -webkit-transform '.$settings_array['Controller']['pauseDelay']/1000 .'s ease-in-out,'.
					'opacity '.$settings_array['Controller']['pauseDelay']/1000 .'s ease-in-out;'.
		'transition: transform '.$settings_array['Controller']['pauseDelay']/1000 .'s ease-in-out,'.
					'opacity '.$settings_array['Controller']['pauseDelay']/1000 .'s ease-in-out;'.
	'}'.
	'.modified { opacity: 1; -webkit-transform: scale(0); transform: scale(0); }';
};

if($settings_array['Scrollbar']['scrollbar']) {
	$html .=
	'.ScrollBar {'.
		'width: '.$settings_array['Scrollbar']['scrollbarWidth'].'px;'.
		'height: '.$settings_array['Scrollbar']['scrollbarHeight'].'px;'.
		'cursor: pointer;'.
		'position: absolute;'.
		'z-index: 10000;'.
		'margin-left: auto;'.
		'margin-right: auto;'.
		'left: 0;'.
		'right: 0;'.
		'margin-top:'.$settings_array['Scrollbar']['marginTop'] .'px;'.
		'overflow: hidden;'.
	'}'.

	'.ScrollBar .firstArrow,'.
	'.ScrollBar .lastArrow{'.
		'display: '.(($settings_array['Scrollbar']['useArrows'])?'block':'none').';'.
		'width: '.$settings_array['Scrollbar']['scrollbarHeight'].'px;'.
		'height: '.$settings_array['Scrollbar']['scrollbarHeight'].'px;'.
		'background: '.$settings_array['Scrollbar']['thumbColor'].';'.
		'float: left;'.
		'border-radius: '.$settings_array['Scrollbar']['borderRadius'].'px;'.
	'}'.

	'.ScrollBar .firstTriangle,'.
	'.ScrollBar .lastTriangle {'.
		'margin-top: '. round($settings_array['Scrollbar']['scrollbarHeight']/3).'px;'.
		'margin-left: '.($settings_array['Scrollbar']['scrollbarHeight']*.35).'px;'.
		'width: 0;'.
		'height: 0;'.
		'border-top: 4px solid transparent;'. 
		'border-bottom: 4px solid transparent;'.
	'}'.

	'.ScrollBar .firstTriangle { border-right: 5px solid #777; }'.
	'.ScrollBar .lastTriangle { border-left: 5px solid #777; }'.

	'.ScrollBar .dragArea {'.
		'width: '.
		(($settings_array['Scrollbar']['useArrows'])?$settings_array['Scrollbar']['scrollbarWidth'] - 2*$settings_array['Scrollbar']['scrollbarHeight']
									: $settings_array['Scrollbar']['scrollbarWidth']
		)
		.'px;'.
		'height: '.$settings_array['Scrollbar']['scrollbarHeight'].'px;'.
		'background: '.$settings_array['Scrollbar']['scrollBackColor'].';'.
		'float: left;'.
		'border-radius: '.$settings_array['Scrollbar']['borderRadius'].'px;'.
	'}'.

	'.ScrollBar .tracker {'.
		'width: '. (($settings_array['Scrollbar']['thumbWidth'] === "auto")?0:$settings_array['Scrollbar']['thumbWidth']) .'px;'.
		'height: '.($settings_array['Scrollbar']['scrollbarHeight'] - 4).'px;'.
		'background: '.$settings_array['Scrollbar']['thumbColor'].';'.
		'margin: 2px;'.
		'border-radius: '.$settings_array['Scrollbar']['borderRadius'].'px;'.
		'float: left;'.
		'left: 0;'.
		'z-index: 1000;'.
		'transition: left '.$settings_array['Global']['transitionDuration']/1000 .'s;'.
	'}';
};

$html .= '</style>';

 ?>