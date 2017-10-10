<?php

require_once 'model/data.php';

require_once 'functions/cart.php';

// AFFICHER TOTAL ITEM CART
$nb_prod = get_cart_count($cart);

?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html" />
<head>
    <meta charset="utf-8" />
    <title>Tee Time | It's Always Tee Time</title>
    <meta name="author" content="Laurence N. Béland & Frederic Pelaho" />
    <meta name="description" content="Best Wholesale Apparel in America | Tee Time." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- START FAVICON -->
    <link rel="icon" href="images/favicon-teetime.png" />
    <!-- END FAVICON -->
    <!-- START CSS LINK -->
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/main.css" />
    <!-- END CSS LINK -->
    <script src="script/main.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper" class="row">
    <header class="row">
        <div id="header_top" class="col-12">
            <p>Delivery All Around The World</p>
        </div>
        <div id="header_menu1" class="row col-12">
            <div class="col-4">
                <img id="header_stamp" src="images/headerstamp.png" alt="Quality Stamp"/>
            </div>
            <div id="div_logo" class="col-4">
                <a href="index.php" class="col-4"><img id="header_logo" src="images/logoteetime.png"
                                                       alt="Logo Tee Time Wholesale Apparel"/></a>
            </div>
            <div id="header_search_shop" class="row col-4">
                <div id="header_align" class="row col-12">
                    <div id="header_search" class="row col-8">
                        <input type="text" id="searchbar" placeholder="Search" class="col-10"/>
                        <a href="#" class="col-2"><img src="images/iconloupe.png" alt="Icon Search"/></a>
                    </div>
                    <div id="header_signin_shopcart" class="row col-4">
                        <div id="header_signin" class="row col-8">
                            <a href="#"><span>Sign Up</span></a>
                            <a href="#"><img src="images/icontriangle.png" alt="Sign In"/></a>
                        </div>
                        <div id="header_shopcart" class="col-4">
                            <a href="shop-cart.php"><img src="images/iconshop.png" alt="Icon Shopping Bag"/>
                                <span id="cart_number"><?= $nb_prod ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="header_menu2">
            <ul>
                <li><a href="index.php" class="border">Home</a></li>
                <li><a href="brand.php" class="border">Brand Info</a></li>
                <li><a href="catalogue.php" class="border">Catalogue</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

