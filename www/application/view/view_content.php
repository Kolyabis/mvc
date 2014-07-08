<div id="content">
    <div id="help1" style="float: left;">
        <?php
            /*if(is_array($data_content)){
                if(array_key_exists('name_menu', $data_content[0]) AND !empty($data_content[0]['name_menu'])){
                    data_class::get_menu($data_content);
                }
                if(array_key_exists("name", $data_content[0]) AND !empty($data_content[0]['name'])){
                    data_class::getCategory($data_content);
                }
                if(array_key_exists("content", $data_content[0]) AND !empty($data_content[0]['content'])){
                    data_class::get_content($data_content);
                }
            }*/
            if(is_array($data_content)){
                    data_class::getListMenu($data_content);
                    data_class::getListCategory($data_content);
                    data_class::get_content($data_content);
            }
        ?>
    </div>
    <?php if($valStyle == 1): ?>
        <div id="help" style="float: right; border: 1px solid #ccc; padding: 10px;">sdf</div>
    <?php endif; ?>


<div class="clear"></div>
</div>
