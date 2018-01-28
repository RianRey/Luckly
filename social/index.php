<?php
   require_once 'libs/Smarty.class.php';
   $smarty = new Smarty;
   
   $smarty->template_dir = 'templates';
   $smarty->compile_dir = 'template_c';
   $smarty->config_dir = 'configs';
   $smarty->cache_dir = 'cache';

   $title = 'Example post Smarty';
   $author = 'Rian_Rey';
   $smarty->assign('title', $title);
   $smarty->assign('author', $author);
   $smarty->display('index_page.tpl');
?>
