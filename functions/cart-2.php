<?php

    require_once 'model/data.php';

    require_once 'views/page_top.php';



// OUVRIR SESSION SI PAS DÉJÀ OUVERTE
if ( session_status() === PHP_SESSION_NONE ) {
    session_start();
}
var_dump($_SESSION);

// CRÉER LA CARTE SI ELLE N'EXISTE PAS
if ( ! array_key_exists('cart', $_SESSION)) {
    $_SESSION['cart'] = array();
}

// CRÉER VARIABLE QUI FAIT RÉFÉRENCE À $_SESSION['cart']
$cart =& $_SESSION['cart']; // $cart fait référence $_SESSION['cart']
var_dump($cart); // donne le contenu du panier


// RÉCEPTION DES POST
var_dump($_POST);
if (array_key_exists('prod_id', $_POST) // on a un paramètre 'prod_id'
    && array_key_exists($_POST['prod_id'], $products) // sa valeur est un id de catalogue valide
    && array_key_exists('action', $_POST)) {// on a aussi un paramètre 'action'
    $prod_id = $_POST['prod_id'];
    $action = $_POST['action'];
// Est-ce que l'item est déjà dans le panier ?  si NON, on le crée
    if ( ! array_key_exists($prod_id, $cart)) {
        $cart[$prod_id] = 0;
    }
    switch ( $action) {
        case '+':
            $cart[$prod_id]++;
            break;
        case '-':
            $cart[$prod_id]--;
            // Supprimer la variable du panier si la quantité est négative ou nulle
            if ($cart[$prod_id] <= 0) {
                unset($cart[$prod_id]);
            }
            break;
    }

 }


// RESET CART
if($cart[$prod_id] > 0){
    $cart[$prod_id] = 0;
}


