<?php

/*
  Plugin Name: MarcTV login logo
  Plugin URI: http://www.marc.tv/marctv-wordpress-plugins/
  Description: Login Logo
  Version: 1.0
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
 */

function marctv_login_logo() { ?>
<style type="text/css">
	#login h1 a, .login h1 a {
		background-image: url(https://marc.tv/media/2017/04/marctv-logo-17-150x150.png);
		height: 75px;
		width: 75px;
		background-size: 75px 75px;
		background-repeat: no-repeat;
		padding-bottom: 0px;
	}
</style>
<?php }

add_action( 'login_enqueue_scripts', 'marctv_login_logo' );

?>