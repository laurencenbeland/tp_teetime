<?php

require_once 'model/data.php';

$page_title = 'Catalogue';

$prod_id = '';

if (array_key_exists('cat_id', $_GET) && array_key_exists($_GET['cat_id'], $categories)) {
    $cat_id = $_GET['cat_id'];
} else {
    header('Location:index.php');
    exit('VALEUR DE CAT_ID REJETÉ -> EXIT');
}

    require_once 'views/page_top.php'       // include page_top.php

?>

    <div id="content" class="clear">

        <?php    foreach ($products as $prod_id => $prod) {
            if ($prod[CATEGORY] === $cat_id) { ?>
                    <a href="product.php?_id=<?= $cat_id ?>"><img src="<?= $prod[IMG] ?>"/></a>
                   <p><?= $prod[NAME] ?></p>

            <?php }

        } ?>


    </div>

<?php
    require_once 'views/page_bottom.php';   // include page_bottom.php


