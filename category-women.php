<?php

require_once 'model/data.php';

$cat_id = '';


if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
} else {
    header('Location:index.php');
    exit('VALEUR DE CAT_ID REJETÉ -> EXIT');
}

require_once 'views/page_top.php'

?>

    <h2 class="category_title"><?= $categories[1][NAME] ?></h2>

    <div class="content_category">

        <?php foreach ($products as $prod_id => $prod) {
            if ($prod[CATEGORY] === $cat_id) {
                $titre = $prod[CATEGORY] ?>
                <div class="content_each_product">
                    <a href="product.php?prod_id=<?= $prod_id ?>">
                        <div class="div_info_product">
                            <img src="<?= $prod[IMG] ?>" class="container_overlay"/>
                            <div class="overlay">
                                <p class="text_overlay"><?= $prod[NAME] ?></p>
                            </div>
                        </div>
                    </a>
                    <form method="post">
                        <input type="hidden" name="prod_id" value="<?= $prod_id ?>" />
                        <button type="submit" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                            <span>Add to cart</span>
                        </button>
                    </form>
                </div>
            <?php }
        } ?>

    </div>

<?php
require_once 'views/page_bottom.php';


