<?php

require_once 'model/data.php';

require_once 'functions/cart.php';

require_once 'views/page_top.php';

// AFFICHER TOTAL PRICE CART
$total = get_cart_total($cart);

// AFFICHER MSG EMPTY CART
$msg_empty = 'Your Cart is Empty';

?>

    <header class="header">
        <h1 class="cart_title">Your Cart</h1>
    </header>
    <div class="content_cart row">
        <ul class="row col-12">

            <span class="msg_empty col-12"><?= $cart == array() ? $msg_empty : '' ?></span>

            <?php foreach ($cart as $prod_id => $qty) {
                if (array_key_exists($prod_id, $products)) { ?>

                    <li class="row col-12">
                        <a href="#" class="row col-6 product_info">
                            <img src="<?= $products[$prod_id][IMG] ?>" <?= $products[$prod_id][ALT] ?> class="col-3"/>
                            <span class="col-3"><?= $products[$prod_id][NAME] ?></span>
                            <a/>
                            <div class="row col-4">
                                <span class="col-2 product_qty"><?= $cart[$prod_id] ?></span>
                                <form method="post" class="col-4">
                                    <input type="hidden" name="prod_id" value="<?= $prod_id ?>"/>
                                    <span class="">
                                <button type="submit" class="btn_plus" name="<?= CART_OP ?>" value="<?= CART_OP_ADD ?>">
                                    <span class="txt_plus">+</span>
                                </button>
                                <button type="submit"
                                        class="btn_minus <?= !array_key_exists($prod_id, $cart) ? 'disabled' : '' ?>"
                                        name="<?= CART_OP ?>" value="<?= CART_OP_REMOVE ?>">
                                    <span class="txt_minus">-</span>
                                </button>
                            </span>
                                </form>
                                <span class="col-3"><?= $products[$prod_id][PRICE] ?></span>
                                <span class="col-3 product_qty_price">$<?= $cart[$prod_id] > 0 ? $products[$prod_id][PRICE] * $cart[$prod_id] : '' ?></span>
                            </div>
                    </li>
                    <?php
                }
            } ?>
        </ul>

        <span class="col-12 total_bill">Subtotal:  $<?= $total ?></span>

        <form method="post" class="col-12">
            <button type="submit" class="clear_cart" name="<?= CART_OP ?>" value="<?= CART_OP_EMPTY ?>">Clear Cart
            </button>
        </form>

    </div>
    </body>


<?php
require_once 'views/page_bottom.php';

