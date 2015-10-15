<?php
/*
Plugin Name: Coverflow CJ
Plugin URI: http://www.cssjquery.com
Description: Coverflow CJ
Version: 1.0
Author: CSSjQuery.com
Author URI: http://www.cssjquery.com
*/

/**
 * Un-comment the following lines if your Wordpres site does not load jQuery
 * or if it loads an older version:
 */

// function load_jquery() {
// 	wp_deregister_script( 'jquery' );
// 	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
// 	wp_enqueue_script( 'jquery' );
// }
// add_action( 'wp_enqueue_scripts', 'load_jquery' );



/**
 * Setting folder constant names
 */
define('COVERFLOW_CJ_PLUGIN_URL', plugins_url() . '/coverflow/' );
$upload_url = wp_upload_dir();
define('UPLOAD_URL', $upload_url['baseurl'] . '/coverflow/' );


/**
 * Loading specific style files for LiveDemo on the Coverflow admin page
 */
add_action( 'admin_init', 'add_livedemo_style' );
function add_livedemo_style() {
	if (isset($_GET['page']) && $_GET['page'] === 'coverflow_cj') {
		wp_enqueue_style('livedemo_style', COVERFLOW_CJ_PLUGIN_URL . 'LD/LD.min.css');
		wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
		wp_enqueue_style('robotofont', 'http://fonts.googleapis.com/css?family=Roboto:300,400');
	}
};


/**
 * Recursive directory copy function
 */
function recurs_copy($src,$dst) {
	$dir = opendir($src);
	mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurs_copy($src . '/' . $file,$dst . '/' . $file);
			} else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}


/**
 * Declare a global settings array
 */
$settings_array = array();


/**
 * setting default options at the first plugin activation 
 */
function coverflow_cj_set_defaults() {
	if (! get_option('coverflow_cj_settings')) {
		global $settings_array;		
		require('set-defaults.php');
		add_option('coverflow_cj_settings', $settings_array);
		add_option('coverflow_cj_images', $images_array);
	};

	$plugin_dir = plugin_dir_path(__FILE__);
	$source = $plugin_dir.'coverflow/img';

	$upload_dir = wp_upload_dir();
	$dest = $upload_dir['basedir'].'/coverflow/';

	if (! file_exists($dest)) {
		recurs_copy($source, $dest);	
	}
}
register_activation_hook(__FILE__, 'coverflow_cj_set_defaults' );


/**
 * Shortcode
 */
add_shortcode('coverflow_cj', 'coverflow_cj');



/**
 * coverflow_cj function returning string containing html code
 * The html has <scripts> at the end
 */
function coverflow_cj() {
	global $settings_array;
	$settings_array = get_option('coverflow_cj_settings');
	$images_array = get_option('coverflow_cj_images');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {		
		require('update-settings.php');
		update_option('coverflow_cj_settings', $settings_array);
	}

	$html = '';
	require('generate-style.php');
	require('generate-html.php');
	return $html;
}

/**
 * livedemo_cj function returning string containing html code
 * The html has <scripts> at the end
 */
function livedemo_cj() {
	global $settings_array;
	$livedemo_cj = '';
	require('generate-livedemo.php');
	return $livedemo_cj;
}



/**
 * Adding a "Coverflow" link in the "Settings" WP Menu
 * Echoing coverflow and livedemo upon clicking this link
 */
add_action('admin_menu', 'coverflow_cj_admin_menu');
function coverflow_cj_admin_menu() {
	add_options_page('Coverflow', 'Coverflow', 'administrator', 'coverflow_cj', 'coverflow_cj_add_menu');
};
function coverflow_cj_add_menu() {
	echo coverflow_cj();
	echo livedemo_cj();
};



/**
 * Adding "Settings" link next to Coverflow CJ in Plugins listing
 */
add_filter('plugin_action_links', 'myplugin_plugin_action_links', 10, 2);
function myplugin_plugin_action_links($links, $file) {
    static $this_plugin;
    if (!$this_plugin) {
        $this_plugin = plugin_basename(__FILE__);
    }
    if ($file == $this_plugin) {
        $settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/options-general.php?page=coverflow_cj">Settings</a>';
        array_unshift($links, $settings_link);
    }
    return $links;
}


/**
 * this function receives POST variables from ajax (jquery call in generate-livedemo.php)
 */
function update_images(){
	$text_array = array();
	foreach($_POST['textinput'] as $html_text) {
		array_push($text_array, htmlspecialchars($html_text));
	};
	$images_array = array(
		'imgname' => $_POST['imgname'],
		'textinput' => $text_array,
		'cap' => $_POST['cap'],
		'target' => $_POST['target'],
		'linkinput' => $_POST['linkinput'],
	);
	update_option('coverflow_cj_images', $images_array);
	die();
	return true;
}
add_action('wp_ajax_update_images', 'update_images');
add_action('wp_ajax_nopriv_update_images', 'update_images');


?>
