<?php

require_once 'model/data.php';

require_once ('functions/cart.php'); // Gestion du panier


$page_title = 'Catalogue';

$prod_id = '';

// AFFICHAGE PRODUITS
if (array_key_exists('prod_id', $_GET) && array_key_exists($_GET['prod_id'], $products)) {
    $prod_id = $_GET['prod_id'];
    $prod = $products[$prod_id];
} else {
    header('Location:index.php');
    exit('VALEUR DE CAT_ID REJETÉ -> EXIT');
}

// ADD TO CART



require_once 'views/page_top.php'

?>
    <div id="content_product" class="clear row">
        <div class="col-12">
            <h2 class="category_title"><?= $prod[NAME] ?></h2>
        </div>
        <div class="product_img col-6">
            <img src="<?= $prod[IMG] ?>" <?= $prod[ALT] ?>/>
        </div>
        <div class="col-6">
            <div class="product_price">
                <span><?= $prod[NAME].' '.$prod[NUMBER] ?></span>
                <hr>
                <div><span>Starting at </span><span class="red"><?= $prod[PRICE] ?></span></div>
            </div>
            <div class="product_color">
                <?php
                require_once 'views/color.php';
                ?>
            </div>
            <div class="product_size">
                <?php
                require_once 'views/size.php';
                ?>
            </div>
            <form id="input_quantity" method="post">
                <label for="quantity">Quantity: </label>
                <input type="hidden" name="prod_id" value="<?= $prod_id ?>" />
                <input type="text" id="quantity" name="quantity"/>
                <button type="submit" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                    <span>Add to cart</span>
                </button>
            </form>
        </div>
        <div class="product_description col-12">
            <p><?= $prod[DESCRIPTION] ?></p>
        </div>
    </div>
<?php
require_once 'views/page_bottom.php';


