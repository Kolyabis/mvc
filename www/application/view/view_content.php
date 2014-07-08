<div id="content">
    <div id="help1" style="float: left;">
        <?php
            if(is_array($data_content)){
                if(is_array($data_content[0]['menu'])){
                    /*echo '<pre>';
                    print_r($data_content[0]['menu']);*/
                    data_class::getListMenu($data_content[0]['menu']);
                }
                if(is_array($data_content[0]['category'])){
                    data_class::getListCategory($data_content[0]['category']);
                }
                if(is_array($data_content[0]['articles'])){
                    data_class::getListArticles($data_content[0]['articles']);
                }
            }
        ?>
    </div>
    <?php if($valStyle == 1): ?>
        <div id="help" style="float: right; border: 1px solid #ccc; padding: 10px;">sdf</div>
    <?php endif; ?>


<div class="clear"></div>
</div>
