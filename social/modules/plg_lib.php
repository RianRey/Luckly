<?php
		$settings = parse_ini_file("set_plg_lib.ini");
		$col = $settings['col_mod'];
		for($amount = 0; $amount < $col; $amount++)
		{
			if($settings['name'][$amount] == 0) echo 'DEBUG name file not found<br>'; continue;
			$namemod = $settings['name'][$amount];
			$filename = "sidebar.php"  ;
			if(fopen("set_plg_lib.ini", "r")) 	echo 'DEBUG file not found<br>'; continue;
		}
		echo $col;
 ?>