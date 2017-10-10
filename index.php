<?php

require_once 'model/data.php';

require_once 'views/page_top.php'
?>


    <p class="clear p_index">Limited Time Offer: 30% Off All Products</p>

    <div id="content_index" class="clear row">

        <?php foreach ($categories as $cat_id => $cat) { ?>
            <div id="div_category" class="col-12">
                <a href="category-<?= strtolower($cat[NAME]) ?>.php?cat_id=<?= $cat_id ?>"><h2><?= $cat[NAME] ?></h2></a>
                <a href="category-<?= strtolower($cat[NAME]) ?>.php?cat_id=<?= $cat_id ?>"><img src="<?= $cat[IMG] ?>" alt="<?= $cat[ALT] ?>"/></a>
            </div>
        <?php } ?>
    </div>

<?php
require_once 'views/page_bottom.php';


