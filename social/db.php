<?php
	require "rb.php";
	 $settings = parse_ini_file("settings.ini");
		R::setup( 'mysql:host=localhost;dbname=id3655014_social',
        'id3655014_admin', 'dima201311' );

	session_start();

?>