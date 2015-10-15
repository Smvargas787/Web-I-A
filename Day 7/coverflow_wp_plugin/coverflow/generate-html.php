<?php 
$html .= '
	<div id="coverflow">
		<div class="covers">
			<ul>';

			$total_images = count($images_array['imgname']);
			
			for ($i = 0; $i < $total_images; $i++) {
				$html .= '<li><div class="imgdiv">'.
							'<a'.
							(
								($images_array['linkinput'][$i] != "" && $images_array['target'][$i] != "none")
								?' href="'.	(
												(substr($images_array['linkinput'][$i], 0, 4) == "http")
													? $images_array['linkinput'][$i]
													: UPLOAD_URL . 'files/' . $images_array['imgname'][$i]
											) . '"' 
								:''
							).
							(($images_array['target'][$i] == "lightbox")?' data-gallery="gallery"':'').
							(($images_array['target'][$i] =="_blank" || $images_array['target'][$i] == "_self")?' target="'.$images_array['target'][$i].'"':'').
							(($images_array['cap'][$i] != "" && $images_array['cap'][$i])? ' data-cap="'.$images_array['cap'][$i].'"':'').
							'>'.
							'<img src="'. UPLOAD_URL . 'files/' . $images_array['imgname'][$i] .'" alt="">'.
							'</a></div>'.
							'<div class="text">'.
								stripslashes(htmlspecialchars_decode($images_array['textinput'][$i])).
							'</div></li>';
			}



$html .=	'</ul>
		</div>'.
		($settings_array['Controller']['controller'] ? '<div class="Controller"></div>' : '').
		($settings_array['Scrollbar']['scrollbar'] ? '<div class="ScrollBar"></div>' : '').
	'</div>

	<script src="'.COVERFLOW_CJ_PLUGIN_URL.'coverflow/js/coverflow.min.js"></script>
	<script> $coverflow = jQuery("#coverflow").coverflow({"path":"'.COVERFLOW_CJ_PLUGIN_URL.'coverflow/"}); </script>
	';

 ?>