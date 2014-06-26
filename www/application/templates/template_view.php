<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="css/templates.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="header">
		<h1><a href="#">TEST1111TEST1111</a></h1>
		<ul id="menu">            
			<?php
				$menu = new menu();
				echo menuFu($menu->get_data());												
			?>
			
		</ul>
	</div>
	<div id="teaser">
		<div class="wrap">
			<div id="image"></div>
			<div class="box">
				<h2>Акционные <em title="">предлжения!!!</em></h2>
				<p><span id="slide" class="slyad" ></span></p>
			</div>
		</div>
	</div>
	<div id="bar">
		<div class="wrap">
			<!--<span class="step"><a>1</a> sharing</span>
			<span class="step"><a>2</a> data management</span>   ***В этом месте пока ничего не придумал***
			<span class="step"><a>3</a> collaboration</span>-->
		</div>
	</div>
    <?php
		//тут подключаем тот файл отображения который нам нужен
		include 'application/templates/'.$content_view;
	?>
	<div id="footer">
		<p class="right"></p>		
        <p>&copy; Copyright 2007 2z &middot; studio </p>        
	</div>

</body>
</html>
	