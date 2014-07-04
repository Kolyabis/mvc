<div id="content">
    <div style="float: left; width: 60%;">
        <?php
            if(is_array($data_content)){
                if(array_key_exists('name_menu', $data_content[0]) AND !empty($data_content[0]['name_menu'])){
                    data_class::get_menu($data_content);
                }
                if(array_key_exists("content", $data_content[0]) AND !empty($data_content[0]['content'])){
                    data_class::get_content($data_content);
                }
            }
        ?>
    </div>
    <?php $a=1; if($a == 1): ?>
        <div style="float: right; width: 38%;">sdf</div>
    <?php endif; ?>


<div class="clear"></div>
</div>
