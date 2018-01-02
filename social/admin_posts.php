<?php 
	require "libs/main_lib.php";
	$data = $_POST;
	if(isset($data['do_del_post_btn'])) //удаление поста
	{
		$errors = array();
		if(trim($data['idpost']) == '')
			$errors = 'Введите ID!';
			
		if(empty($errors))
		{
			$post = R::findOne('posts', 'id = ?', $data['idpost']);
			if(! $post) AlertMSG('error', 'Пост не найден!');
			R::trash($post);
		}
		else AlertMSG('error', array_shift($errors));
	}
	$_SESSION['id_adminpage'] = 2;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lukly - Админ панель - Посты</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
    <?php 
    		include "admin_bar.php";
    ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Side</h2>
                            <?php
                            		$posts = R::findAll('posts');
 							foreach($posts as $key => $post)
 							{
 						?>
                            <div class="panel panel-default">
                                <div class="panel-heading"><?php echo $post->date;?></div>
                                <div class="panel-body">
                                    <?php echo $post->text;?>
                                    <br>
                                    ID поста - <?php echo $post->id;?>
                                    <br>
                                    Автор поста - <?php 
                                    	$user = R::findOne('users', 'id = ?', array($post->userid));
                                    	if($user) echo $user->login;
                                    	else AlerMSG('error', 'Пользователь не найден!');
                                    ?>
                                </div>
                            </div>
                            <hr />
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <hr />
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Удаление постов</h2>
                            <p>
                                <form action="admin_posts.php" method="POST">
                                	<input name="idpost" type="text" class="form-control" placeholder="id поста:">
                               	<span class="input-group-btn">
 								<button name="do_del_post_btn" class="btn btn-default" type="submit">Удалить</button>
 							</span>
                                </form>
                            </p>
                        </div>
                    </div>
                    <hr>
                 </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
</html>