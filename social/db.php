<?php
	require "rb.php";
	 $settings = parse_ini_file("settings.ini");
		R::setup( 'mysql:host=localhost;dbname=mysocial',
        'root', '' );

	session_start();

?>