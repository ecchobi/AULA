<?php

/**
* Plugin Name: Aula 
* Description: plugin
* Version: 1.0
* Author: Bianca R
*/
function faula( $atts ){
    return '<iframe src="'.plugins_url().'/aula/index.php" frameborder="0" width="400px" height="500px"></iframe>';
}
add_shortcode('aula', 'faula');
?>
