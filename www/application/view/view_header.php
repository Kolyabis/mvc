<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>TEST-MVC</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="../css/templates.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="menu">
    <?php
        if(is_array($data)){
            data_class::get_menucp($data);
        }
    ?>
</div>