<?php

require_once 'model/data.php';

$cat_id = '';
$prod_id = '';

require_once 'views/page_top.php'

?>

    <div class="catalogue_menu">
        <?php foreach ($categories as $cat_id => $cat) { ?>
            <h2 class="category_title_ahref"><a
                        href="category-<?= strtolower($cat[NAME]) ?>.php?cat_id=<?= $cat_id ?>"><?= $cat[NAME] ?></a>
            </h2>
        <?php } ?>
    </div>

    <div class="content_category clear">
        <?php foreach ($products as $prod_id => $prod) { ?>
            <div class="content_each_product">
                <a href="product.php?prod_id=<?= $prod_id ?>">
                    <div class="div_info_product">
                        <img src="<?= $prod[IMG] ?>" class="container_overlay"/>
                        <div class="overlay">
                            <p class="text_overlay"><?= $prod[NAME] ?></p>
                        </div>
                    </div>
                </a>
                <?php if ($prod[CATEGORY] === $cat_id) {
                    $titre = $prod[CATEGORY] ?>
                    <h3><?= $titre[NAME] ?></h3>
                <?php } ?>
                <form method="post">
                    <input type="hidden" name="prod_id" value="<?= $prod_id ?>" />
                    <button type="submit" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                        <span>Add to cart</span>
                    </button>
                </form>            </div>
        <?php } ?>
    </div>

<?php
require_once 'views/page_bottom.php';


