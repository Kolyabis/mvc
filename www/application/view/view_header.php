<div>
	<p>
		ETO HEADER
        <?php
            if(is_array($data)){
                //Разбераем массив меню
                data_class::get_menucp($data);
            }
        ?>
	</p>
</div>