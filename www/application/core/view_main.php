<?php
	/* Свойства метода:
	   $header - это строка с именем фала стиля шапки
	   $content - это строка с именем фала стиля контента
	   $footer - это строка с именем фала стиля футера
	   $data_menu - это массив меню
	   $data_content - это массив контента
	   $data_modules - массив с модулями
	*/
    class View_Main{
		function generate($header, $content, $footer, $data_menu = null, $data_content = null, $data_modules = null){
            include 'application/view/'.$header;
            include 'application/view/'.$content;
            include 'application/view/'.$footer;
		}	
	}
