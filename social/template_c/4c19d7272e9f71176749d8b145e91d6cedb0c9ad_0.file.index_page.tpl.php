<?php
/* Smarty version 3.1.30, created on 2018-01-21 18:47:06
  from "/storage/ssd1/014/3655014/public_html/Luckly/templates/index_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a64e02a995a65_34039632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c19d7272e9f71176749d8b145e91d6cedb0c9ad' => 
    array (
      0 => '/storage/ssd1/014/3655014/public_html/Luckly/templates/index_page.tpl',
      1 => 1516560208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a64e02a995a65_34039632 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
   <head>
	<title>My first social network on Smarty</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="templates/css/materialize.css" media="screen,projection">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   	<div class="container">
   	<nav>
	   <div class="nav-wrapper">
		<a href="#" class="brand-logo">Logo</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
		   <li><a href="#" >Помощь</a></li>
		</ul>
	   </div>
	</nav>
	</div>
	<div class="container">
	   <form class="col s12">
		<div class="row">
		   <div class="col s12">
		   	<h6>Регистрация/Авторизация</h6>
			Введите логин и пароль:
			<div class="input-field inline">
			   <input id="email" type="email" class="validate">
			   <label for="emai" data-error="wrong" data-success="reght">Login</label>
			</div>
		   </div>
		</div>
	   </form>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/js/materialize.js"><?php echo '</script'; ?>
>
   </body>
</html>
<?php }
}
