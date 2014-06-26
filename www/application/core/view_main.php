<?php
	class View_Main{				
		function generate($header, $content, $footer, $data = null){
            include 'application/view/'.$header;
            include 'application/view/'.$content;
            include 'application/view/'.$footer;
		}	
	}
