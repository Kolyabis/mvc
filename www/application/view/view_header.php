<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>TEST-MVC</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="../css/templates.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript">
    function editDiv(){
        var val = <?php echo $valStyle = 1; ?> ;
        if(val == 0){
            document.getElementById("help1").style.width='100%';
        }else{
            document.getElementById("help1").style.width='70%';
            document.getElementById("help").style.width='27%';
        }
    }
</script>
<body onload="editDiv()">
    <div class="center">
        <div>
            <div id="menu">
                <?php
                    if(is_array($data_menu)){
                        data_class::get_menucp($data_menu);
                    }
                ?>
            </div>
        </div>