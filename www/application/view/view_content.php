<div id="content">
    <?php
        if(is_array($data)){
            echo data_class::get_content($data);
        }
    ?>
</div>
