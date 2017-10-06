<?php

require_once 'model/data.php';

$cat_id = '';


if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
} else {
    header('Location:index.php');
    exit('VALEUR DE CAT_ID REJETÉ -> EXIT');
}

require_once 'views/page_top.php'       // include page_top.php

?>

    <h2 class="category_title"><?= $categories[3][NAME] ?></h2>

    <div class="content_category">

        <?php foreach ($products as $prod_id => $prod) {
            if ($prod[CATEGORY] === $cat_id) {
                $titre = $prod[CATEGORY] ?>
                <div class="content_each_product">
                    <a href="product.php?prod_id=<?= $prod_id ?>" class="container_overlay">
                        <div class="div_info_product overlay">
                            <img src="<?= $prod[IMG] ?>"/>
                            <div class="text_overlay">
                                <p><?= $prod[NAME] ?></p>
                            </div>
                        </div>
                    </a>
                    <button>Add to cart</button>
                </div>
            <?php }
        } ?>

    </div>

<?php
require_once 'views/page_bottom.php';   // include page_bottom.php


