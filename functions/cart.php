<?php

define('CART', 'cart');
define('CART_OP', 'cart_op');
define('CART_OP_ADD', 'cart_op_add');
define('CART_OP_REMOVE', 'cart_op_remove');
define('CART_OP_EMPTY', 'cart_op_empty');
define('PROD_ID', 'prod_id');

// TOTAL PRICE CART
function get_cart_total($cart) {
    global $products;
    $result = 0;
    foreach ($cart as $prod_id => $item_qty) {
        $result += $products[$prod_id][PRICE] * $item_qty;
    }
    return $result;
}


// TOTAL ITEM CART
function get_cart_count($cart) {
    global $products;
    $result = 0;
    foreach ($cart as $prod_id => $item_qty) {
        $result += $item_qty;
    }
    return $result;
}



if (session_status() === PHP_SESSION_NONE) { // Regarde si la session a été démarré ou pas
    session_start();
}

var_dump($_SESSION);

if (!array_key_exists('cart', $_SESSION)) {
    $_SESSION['cart'] = array();
}

$cart =& $_SESSION['cart']; // $cart est une référence (alias) sur $_SESSION[CART_NAME]


// VÉRIFIER QUE CART_OP EST DANS $_POST
if (array_key_exists(CART_OP, $_POST)

/*ET VÉRIFIER QUE LES TROIS VALEURS SONT DANS LE TABLEAU*/
    && in_array($_POST[CART_OP], array(CART_OP_ADD, CART_OP_REMOVE, CART_OP_EMPTY))) {
    require_once('model/data.php');

    $prod_id = null;

    // AUTRE CONDITION POUR VÉRIFIER SI ITEM_ID EST DANS $_POST
    if (array_key_exists(PROD_ID, $_POST)
        /*ET VÉRIFIER QUE CET ITEM_ID EST DANS LE TABLEAU $CATALOG*/
        && array_key_exists($_POST[PROD_ID], $products)) {
        $prod_id = $_POST[PROD_ID];
}

    switch ($_POST[CART_OP]) {
        case CART_OP_ADD :
            if (!is_null($prod_id)) {
                if (! array_key_exists($prod_id, $cart)){
                    $cart[$prod_id] = 0;
                }
                $cart[$prod_id]++;
            }
            break;
        case CART_OP_REMOVE :
            if (!is_null($prod_id)) {
                if (array_key_exists($prod_id, $cart)){
                    $cart[$prod_id]--;
                }

                if (array_key_exists($prod_id, $cart) && $cart[$prod_id] == 0) {
                    unset($cart[$prod_id]);
                }
            }
            break;
        case CART_OP_EMPTY :
            $cart = array();
            break;
        default: // (action inconnue : Mieux vaut ne rien faire ici)
    }

}






