<?php
	require "libs/main_lib.php";
	
	$post = R::dispense('posts');
	$post->userid = 1;
	$post->text = 'Тестовый пост';
	$post->date = date("Y-m-d H:i:s");
	R::store($post);
 ?>