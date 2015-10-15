<?php 

/**
 * The contents here are similar with those from index.html file from the main coverflow dist folder
 * I added "name" attributes to each input tag
 * A problem I encountered is about namig conventions for properties - they all should be unique and the same across all files
 * Also approach from this file will be useful for creating multiple presets (demos)
 */
$livedemo_cj .= '
		<style>
		#wpcontent {background:white;}
		</style>
			<!--	LIVE DEMO	-->
		
			<div class="LD" style="display:none;">
				<div class="gridlock">
				<div class="row contained">

					<ul id="tabs">
						<li class="current"><a href="#settings"><i class="fa fa-gear"></i>&nbsp;&nbsp;Settings</a></li>
						<li><a href="#images"><i class="fa fa-image"></i>&nbsp;&nbsp;Images</a></li>
					</ul>
					<div class="content">
						<div id="settings" class="current">
							<form action="" method="post">
								<div class="tabbed cf">
									<div class="tabber-menu desktop-3 tablet-2 mobile-1 contained" style="width:20%;">
										<a href="#tab-1" class="tabber-handle cf"><i class="fa fa-globe sz"></i><span class="txt">Global Properties</span></a>
										<a href="#tab-2" class="tabber-handle cf"><i class="fa fa-files-o sz"></i><span class="txt">Reflection</span></a>
										<a href="#tab-3" class="tabber-handle cf"><i class="fa fa-bars sz"></i><span class="txt">Scrollbar</span></a>
										<a href="#tab-4" class="tabber-handle cf"><i class="fa fa-adjust sz"></i><span class="txt">Shadow</span></a>
										<a href="#tab-5" class="tabber-handle cf"><i class="fa fa-play-circle sz"></i><span class="txt">Controller</span></a>
										<a href="#tab-6" class="tabber-handle cf"><i class="fa fa-file-text-o sz"></i><span class="txt">Text</span></a>
									</div>
									<!-- GENERAL -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-1" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Coverflow Width</div><input id="cfw" name="coverflowWidth" type="number" data-min="30" data-max="3000" data-step="10" value="'.$settings_array['Global']['coverflowWidth'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Coverflow Height</div><input id="cfh" name="coverflowHeight" type="number" data-min="10" data-max="1500" data-step="10" value="'.$settings_array['Global']['coverflowHeight'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Background Color</div><div class="colorbox"><input class="backgroundColor colorhex" type="text" name="backgroundColor" /><input type="text" id="backgroundColor" value="'.$settings_array['Global']['backgroundColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Image Width</div><input id="imageWidth" name="imageWidth" type="number" data-min="10" data-max="500" data-step="10" value="'.$settings_array['Global']['imageWidth'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Image Spacing</div><input id="imageSpacing" name="imageSpacing" type="number" data-min="0" data-max="300" data-step="2" value="'.$settings_array['Global']['imageSpacing'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Front Image Spacing</div><input id="frontImageSpacing" name="frontImageSpacing" type="number" data-min="0" data-max="300" data-step="5" value="'.$settings_array['Global']['frontImageSpacing'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Image Rotation (deg)</div><input id="imageRotation" name="imageRotation" type="number" data-min="0" data-max="180" data-step="5" value="'.$settings_array['Global']['imageRotation'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Image Perspective</div><input id="imagePerspective" name="imagePerspective" type="number" data-min="0" data-max="2000" data-step="50" value="'.$settings_array['Global']['imagePerspective'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Front Image Scale Ratio %</div><input id="scaleRatio" name="frontImageScaleRatio" type="number" data-min="100" data-max="300" data-step="10" value="'.$settings_array['Global']['frontImageScaleRatio'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem tip" data-title="Use the mouse wheel<br>over the Coverflow">
											<div class="propname">Bind Mouse Wheel</div>
											<div class="propname"><input id="bindMouseWheel" type="checkbox" name="bindMouseWheel" '.($settings_array['Global']['bindMouseWheel']?'checked':'').'/><label for="bindMouseWheel">Bind Mouse Wheel</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem tip" data-title="Use the keyboard arrow<br>keys on the Coverflow">
											<div class="propname">Bind Arrow Keys</div>
											<div class="propname"><input id="bindArrowKeys" type="checkbox" name="bindArrowKeys" '.($settings_array['Global']['bindArrowKeys']?'checked':'').'/><label for="bindArrowKeys">Bind Arrow Keys</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Mouse Cursor</div><select name="mouseCursor" id="cursor">
												<option value="pointer" '.(($settings_array['Global']['mouseCursor'] == "pointer")?'selected="selected"':'').'>pointer</option>
												<option value="grab" '.(($settings_array['Global']['mouseCursor'] == "grab")?'selected="selected"':'').'>grab</option>
											</select>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Transition Duration (ms)</div><input id="transitionDur" name="transitionDuration" type="number" data-min="0" data-max="5000" data-step="100" value="'.$settings_array['Global']['transitionDuration'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Transition Function</div><select name="transitionFunction" id="transitionFunc">
											<option value="ease" '.(($settings_array['Global']['transitionFunction'] == "ease")?'selected="selected"':'').'>ease</option>
											<option value="linear" '.(($settings_array['Global']['transitionFunction'] == "linear")?'selected="selected"':'').'>linear</option>
											<option value="ease-in" '.(($settings_array['Global']['transitionFunction'] == "ease-in")?'selected="selected"':'').'>ease-in</option>
											<option value="ease-out" '.(($settings_array['Global']['transitionFunction'] == "ease-out")?'selected="selected"':'').'>ease-out</option>
											<option value="ease-in-out" '.(($settings_array['Global']['transitionFunction'] == "ease-in-out")?'selected="selected"':'').'>ease-in-out</option>
										</select>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Path</div><input id="path" name="path" type="text" data-min="0" data-max="0" data-step="0" value="'.$settings_array['Global']['path'].'" />
										</div>
									</div>
									<!-- REFLECTION -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-2" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Reflection</div>
											<div class="propname"><input id="useRefl" type="checkbox" name="useRefl" '.($settings_array['Reflection']['reflection']?'checked':'').'/><label for="useRefl">Use Reflection</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Reflection Color</div><div class="colorbox"><input class="reflectionColor colorhex" type="text" /><input type="text" id="reflectionColor" name="reflectionColor" value="'.$settings_array['Reflection']['reflectionColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Reflection Size</div><input id="reflWidth" name="reflectionSize" type="number" data-min="0" data-max="100" data-step="2" value="'.$settings_array['Reflection']['reflectionSize'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Reflection Spread</div><input id="reflSpread" name="reflectionSpread" type="number" data-min="0" data-max="100" data-step="5" value="'.$settings_array['Reflection']['reflectionSpread'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Reflection Opacity</div><input id="reflOpacity" name="reflectionOpacity" type="number" data-min="0" data-max="100" data-step="10" value="'.$settings_array['Reflection']['reflectionOpacity'].'" />
										</div>
									</div>
									<!-- SCROLLBAR -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-3" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Scrollbar</div>
											<div class="propname"><input id="useScrollbar" type="checkbox" name="useScrollbar" '.($settings_array['Scrollbar']['scrollbar']?'checked':'').'/><label for="useScrollbar">Use Scrollbar</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Scrollbar Width</div><input id="scrollbarWidth" name="scrollbarWidth" type="number" data-min="0" data-max="2000" data-step="10" value="'.$settings_array['Scrollbar']['scrollbarWidth'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Scrollbar Height</div><input id="scrollbarHeight" name="scrollbarHeight" type="number" data-min="1" data-max="100" data-step="1" value="'.$settings_array['Scrollbar']['scrollbarHeight'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Thumb Width</div><input id="thumbWidth" name="thumbWidth" type="text" data-min="1" data-max="300" data-step="2" value="'.$settings_array['Scrollbar']['thumbWidth'].'" /> <!-- min, max, auto - not allowed -->
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Scroll Back Color</div><div class="colorbox"><input class="scrollBackColor colorhex" type="text" name="scrollBackColor" /><input type="text" id="scrollBackColor" value="'.$settings_array['Scrollbar']['scrollBackColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Thumb Color</div><div class="colorbox"><input class="thumbColor colorhex" type="text" name="thumbColor" /><input type="text" id="thumbColor" value="'.$settings_array['Scrollbar']['thumbColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Border Radius</div><input id="scrollBorderRad" name="scrollBorderRad" type="number" data-min="0" data-max="100" data-step="1" value="'.$settings_array['Scrollbar']['borderRadius'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Arrows</div>
											<div class="propname"><input id="useArrows" type="checkbox" name="useArrows" '.($settings_array['Scrollbar']['useArrows']?'checked':'').'/><label for="useArrows">Use Arrows</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Margin Top</div><input id="scrollMT" name="scrollMT" type="number" data-min="0" data-max="1000" data-step="10" value="'.$settings_array['Scrollbar']['marginTop'].'" />
										</div>
									</div>
									<!-- SHADOW -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-4" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Image Shadows</div>
											<div class="propname"><input id="useImageShadow" type="checkbox" name="useImageShadow" '.($settings_array['Shadow']['imageShadows']?'checked':'').'/><label for="useImageShadow">Use Image Shadow</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Shadow Size</div><input id="shadowSize" name="shadowSize" type="number" data-min="0" data-max="100" data-step="10" value="'.$settings_array['Shadow']['shadowSize'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Shadow Opacity</div><input id="shadowOpacity" name="shadowOpacity" type="number" data-min="0" data-max="100" data-step="5" value="'.$settings_array['Shadow']['shadowOpacity'].'" />
										</div>
									</div>
									<!-- CONTROLLER -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-5" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Controller</div>
											<div class="propname"><input id="useController" type="checkbox" name="useController" '.($settings_array['Controller']['controller']?'checked':'').'/><label for="useController">Use Controller</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Arrows</div>
											<div class="propname"><input id="showArrows" type="checkbox" name="showArrows" '.($settings_array['Controller']['arrows']?'checked':'').'/><label for="showArrows">Show Arrows</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Auto Play</div>
											<div class="propname"><input id="autoPlay" type="checkbox" name="autoPlay" '.($settings_array['Controller']['autoPlay']?'checked':'').'/><label for="autoPlay">Auto Play</label></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem tip" data-title="The waiting time on each item">
											<div class="propname">Pause Delay (ms)</div><input id="pauseDelay" name="pauseDelay" type="number" data-min="0" data-max="10000" data-step="500" value="'.$settings_array['Controller']['pauseDelay'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Controller Skin</div><select name="controllerSkin" id="controllerSkin" name="controllerSkin">
												<option value="light" '.(($settings_array['Controller']['controllerSkin'] == "light")?'selected="selected"':'').'>light</option>
												<option value="dark" '.(($settings_array['Controller']['controllerSkin'] == "dark")?'selected="selected"':'').'>dark</option>
											</select>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Controller Margin Top</div><input id="controllerMT" name="controllerMarginTop" type="number" data-min="0" data-max="1000" data-step="10" value="'.$settings_array['Controller']['controllerMarginTop'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Preloader Margin Top (%)</div><input id="preloaderMT" name="preloaderMarginTop" type="number" data-min="0" data-max="100" data-step="1" value="'.$settings_array['Controller']['preloaderMarginTop'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Preloader Margin Left (%)</div><input id="preloaderML" name="preloaderMarginLeft" type="number" data-min="0" data-max="100" data-step="1" value="'.$settings_array['Controller']['preloaderMarginLeft'].'" />
										</div>
									</div>
									<!-- TEXT -->
									<div class="tabber-tab desktop-9 tablet-3 mobile-2 contained" id="tab-6" style="width:80%;">
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Family</div><select name="fontFamily" id="fontFamily">
												<option value="Lucida Sans Unicode" '.(($settings_array['Text']['fontFamily'] == "Lucida Sans Unicode")?'selected="selected"':'').'>Lucida Sans Unicode</option>
												<option value="Open Sans" '.(($settings_array['Text']['fontFamily'] == "Open Sans")?'selected="selected"':'').'>Open Sans</option>
												<option value="PT Sans" '.(($settings_array['Text']['fontFamily'] == "PT Sans")?'selected="selected"':'').'>PT Sans</option>
												<option value="Arial" '.(($settings_array['Text']['fontFamily'] == "Arial")?'selected="selected"':'').'>Arial</option>
												<option value="Verdana" '.(($settings_array['Text']['fontFamily'] == "Verdana")?'selected="selected"':'').'>Verdana</option>
												<option value="Tahoma" '.(($settings_array['Text']['fontFamily'] == "Tahoma")?'selected="selected"':'').'>Tahoma</option>
											</select>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Size</div><input id="fontSize" name="fontSize" type="number" data-min="1" data-max="30" data-step="1" value="'.$settings_array['Text']['fontSize'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Color</div><div class="colorbox"><input class="fontColor colorhex" type="text" name="fontColor"/><input type="text" id="fontColor" value="'.$settings_array['Text']['fontColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Back Color</div><div class="colorbox"><input class="fontBackColor colorhex" type="text" name="fontBackColor"/><input type="text" id="fontBackColor" value="'.$settings_array['Text']['fontBackColor'].'"></div>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Position</div><select name="fontPosition" id="fontPosition">
												<option value="top" '.(($settings_array['Text']['fontPosition'] == "top")?'selected="selected"':'').'>top</option>
												<option value="bottom" '.(($settings_array['Text']['fontPosition'] == "bottom")?'selected="selected"':'').'>bottom</option>
												<option value="custom" '.(($settings_array['Text']['fontPosition'] == "custom")?'selected="selected"':'').'>custom</option>
											</select>
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Margin Top</div><input id="fontMT" name="fontMarginTop" type="number" data-min="-300" data-max="700" data-step="10" value="'.$settings_array['Text']['fontMarginTop'].'" />
										</div>
										<div class="desktop-4 tablet-3 mobile-4 contained propitem">
											<div class="propname">Font Width</div><input id="fontWidth" name="fontWidth" type="text" data-min="0" data-max="1000" data-step="10" value="'.$settings_array['Text']['fontWidth'].'" />
										</div>
									</div>
								</div>

								<input type="hidden" name="action" value="update">
								<style>.savebutton {width: 260px; height: 60px; background: #51c4d4; color: #fff; font-size: 20px;	border: none;cursor: pointer;margin-top:20px;} </style>				
								<input type="submit" value="Save configuration" class="savebutton">
							</form>
							<form action="" method="post">						
								<div class="gridlock">
									<div class="row contained">
										<input type="hidden" name="action" value="restore">
										<input type="submit" value="Reset to defaults" style="width: 200px;color: #777; background: #fff; border: 1px solid #cfcfcf; float:right; font-size:16px; height:40px;cursor: pointer;">
									</div>
								</div>
							</form>
						</div>
						<div id="images">
							<div class="preld"><i class="fa fa-spinner fa-spin"></i></div>
							<div class="img-tab-container">    
							    <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
							    	<div class="fileupload-buttonbar">
						        	<div class="imghead">
						        		<div class="addimg hhh fileinput-button">
						        			<div class="addbtn">
						        				<i class="fa fa-plus mart"></i>
						        				<span>Add Images</span>
						        				<div class="botb"></div>
						        				<input type="file" name="files[]" multiple>
						        			</div>
						        		</div>
							        	<div class="flr">
							        		<div class="selall hhh">
							        			<span>select<br>all</span>
												<div class="square">
													<input type="checkbox" class="toggle" value="none" id="square" name="check"></input>
													<label for="square"></label>
												</div>
							        		</div>
							        		<div class="remsel hhh">
							        			<span>remove selected</span>
							        			<button type="button" class="tursq delete">
								                     <i class="fa fa-trash-o"></i>
								                </button>
							        		</div>
						        		</div>
						        		<div class="flex">
							        		<div class="progdesc hhh">
							        			<div class="prog fileupload-progress">
							        				<div class="progress progress-striped active" role="progressbar" data-min="0" data-max="100">
									                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
									                </div>
							        			</div>
							        			<div class="desc">image description</div>
							        		</div>
							        		<div class="imgact hhh">
							        			<div class="smll"></div>
							        			<span>action on image click</span>
							        			<div class="smlr"></div>
							        		</div>
							        		<div class="imgdet hhh">details</div>
						        		</div>
						        		<!-- The global file processing state -->
						        		<span class="fileupload-process"></span> <!--  ???  -->
						        	</div>
						        	</div>		            
							        <!-- The table listing the files available for upload/download -->
							        <!-- <table role="presentation" class="table table-striped"> -->
							        	<div class="files"></div>
							        <!-- </table> -->
							    
							    <!-- The template to display files available for upload -->
								<script id="template-upload" type="text/x-tmpl">
									{% for (var i=0, file; file=o.files[i]; i++) { %}
								    <div class="template-download cf tempup">
								        <div class="rowflr">
								            {% if (!i && !o.options.autoUpload) { %}
								                <button class="graysq start" disabled>
								                    <i class="fa fa-upload"></i>
								                </button>
								            {% } %}
								            {% if (!i) { %}
								                <button class="graysq cancel">
								                    <i class="fa fa-ban"></i>
								                </button>
								            {% } %}
								        </div>
								        <div class="rowflr rowact pgss">
								            <p class="name">{%=file.name%}</p>
								            <div class="progress progress-striped active" role="progressbar" data-min="0" data-max="100" data-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
								            <p class="size">Processing...</p>
								        </div>
								        <div class="rowflr errr">
								            <strong class="error text-danger"></strong>
								        </div>
								    </div>
								{% } %}
								</script>
								<!-- The template to display files available for download -->
								<script id="template-download" type="text/x-tmpl">
									{% for (var i=0, file; file=o.files[i]; i++) { %}
								    <div class="template-download cf">
								        <div class="dragg ggg">
								            <i class="fa fa-arrows-v"></i>
								        </div>
								        <div class="prevw ggg">
								            <div class="smallpr"><i class="fa fa-spinner fa-spin"></i></div>
								            <span class="preview">
								                {% if (file.thumbnailUrl) { %}
								                    <img src="{%=file.thumbnailUrl%}" alt="">
								                {% } %}
								            </span>
								        </div>
								        <div class="rowflr">
								            <div class="rowsel ggg">
								                <div class="square wht">
								                    <!--<input type="checkbox" name="delete" value="1" class="toggle">-->
								                    <input type="checkbox" class="toggle" value="1" id="{%=file.name%}" name="delete"></input>
								                    <label for="{%=file.name%}"></label>
								                    <input type="hidden" name="imgname" class="imgname" value="{%=file.name%}">
								                </div>
								            </div>
								            <div class="rowdel ggg">
								                {% if (file.deleteUrl) { %}
								                    <button class="graysq delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields="{"withCredentials":true}"{% } %}>
								                        <i class="fa fa-times"></i>
								                    </button>
								                {% } else { %}
								                    <button class="graysq cancel">
								                        <i class="fa fa-ban"></i>
								                    </button>
								                {% } %}
								            </div>
								        </div>
								        <div class="rowflex ggg cf">
								            <div class="rowtxt ggg">
								                <a data-name="{%=file.name%}"></a>
								                <div class="toi jjj">
								                    <i class="fa fa-file-text-o smli"></i>
								                    <textarea class="textinput txtarea" placeholder="text over image"></textarea>
								                </div>
								                <div class="tol jjj dsbld">
								                    <i class="fa fa-file-text smli"></i>
								                    <textarea class="cap txtarea" disabled placeholder="image caption when lightbox is activated on image click"></textarea>
								                </div>
								            </div>
								            <div class="rowact ggg">
								                <div class="trgt cf">
								                    <span class="spn">target</span>
								                    <div class="targetwrap tip" data-title="_blank opens the link in a new page<br>_self opens the link in the same page">
								                        <select class="target">
								                            <option value="_blank">_blank</option>
								                            <option value="_self">_self</option>
								                            <option value="lightbox">lightbox</option>
								                            <option value="none" selected="selected">none</option>
								                        </select>
								                    </div>
								                </div>
								                <div class="lnk cf">
								                    <span class="spn">link</span>                    
								                    <div class="toi dsbld targetwrap llnk jjj">
								                        <i class="fa fa-link smli"></i>
								                        <textarea class="linkinput txtarea href" disabled placeholder="http://www.example.com"></textarea>
								                    </div>
								                </div>
								            </div>
								            <div class="rowdet ggg">
								                <p class="name">
								                    {% if (file.url) { %}
								                        {%=file.name%}
								                    {% } else { %}
								                        <span>{%=file.name%}</span>
								                    {% } %}
								                </p>
								                {% if (file.error) { %}
								                    <div><span class="label label-danger">Error</span> {%=file.error%}</div>
								                {% } %}
								                <p class="size">{%=o.formatFileSize(file.size)%}</p>
								            </div>
								        </div>
								    </div>
								{% } %}
								</script>
								<input type="hidden" name="action" value="update_images">
								<!--<input type="submit" id="saveimg" value="Save images" class="savebutton">-->
								</form>
							</div>
							<p style="font-size:18px;">* Changes made on this tab are saved automatically</p>
						</div>
					</div>
					
				</div>
				</div>
			</div>

		<script src="'.COVERFLOW_CJ_PLUGIN_URL.'LD/LD.coverflow.wp.min.js"></script>
		<script>
		var $ld = jQuery(".LD").LiveDemo({"path": "coverflow/"});
			jQuery(".LD").fadeIn(200); //fadeIn makes .LD display to block		
		</script>
		';	
		
		/**
		 * Loading uploader JS file and sending params to it
		 */
		wp_enqueue_script('uploader', COVERFLOW_CJ_PLUGIN_URL.'LD/uploadall.wp.min.js');
		$upload_dir = wp_upload_dir();
		$params = array(
		 	'upload_url' => UPLOAD_URL,
		 	'upload_dir' => $upload_dir['basedir'],
			'plugin_url' => COVERFLOW_CJ_PLUGIN_URL,
			'admin_ajax_url' => admin_url( 'admin-ajax.php')
		);
		wp_localize_script( 'uploader', 'params', $params );

 ?>