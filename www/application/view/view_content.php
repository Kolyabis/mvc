<div id="content">
    <?php
        if(is_array($data)){
            if(array_key_exists("menu", $data[0]) AND !empty($data[0]['menu'])){
                data_class::get_menu($data);
            }
            if(array_key_exists("content", $data[0]) AND !empty($data[0]['content'])){
                data_class::get_content($data);
            }
        }
    ?>
<div class="clear"></div>
</div>
