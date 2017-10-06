<?php

require_once 'model/data.php';

$cat_id = '';

require_once 'views/page_top.php'       // include page_top.php

?>

<div class="catalogue_menu">
        <?php foreach ($categories as $cat_id => $cat) { ?>
    <h2 class="category_title_ahref"><a href="category-<?= strtolower($cat[NAME]) ?>.php?cat_id=<?= $cat_id ?>"><?= $cat[NAME] ?></a></h2>
        <?php } ?>
</div>

    <div class="content_category clear">
        <?php foreach ($products as $prod_id => $prod) { ?>
                <div class="content_each_product">
                    <a href="product.php?_id=<?= $cat_id ?>">
                        <div class="div_info_product">
                            <img src="<?= $prod[IMG] ?>" class="container_overlay"/>
                            <div class="overlay">
                                <p class="text_overlay"><?= $prod[NAME] ?></p>
                            </div>
                        </div>
                    </a>
                    <h3><?= $titre = $prod[CATEGORY] ?></h3>
                    <button>Add to cart</button>
                </div>
            <?php } ?>

    </div>

<?php
require_once 'views/page_bottom.php';   // include page_bottom.php


