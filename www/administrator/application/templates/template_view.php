<?php ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>CPanel</title>
	<link href="css/templates.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<div id="header"></div>
    <div class="line">
                    <?php
                        echo get_menu($data);
                    ?>
                </div>
    <?php
		//тут подключаем тот файл отображения который нам нужен
		include 'application/templates/'.$content_view;
	?>
</body>
</html>
<?php ob_end_flush(); ?>
