<?php

//// CONSTANTES

define('CATEGORY', 'category');
define('NAME', 'name');
define('NUMBER', 'number');
define('PRICE', 'prix');
define('DESCRIPTION', 'description');
define('IMG', 'image');
define('ALT', 'alt=');


$user = array('username' => 'password');


$categories = array (
    '1'=>array(
        NAME=>'Women',
        IMG=>'images/category-women.png',
        ALT=>'Women Tee-Shirts',
    ),
    '2'=>array(
        NAME=>'Men',
        IMG=>'images/category-men.png',
        ALT=>'Men Tee-Shirts',
    ),
    '3'=>array(
        NAME=>'Kids',
        IMG=>'images/category-kids.png',
        ALT=>'Kids Tee-Shirts',
    ),
);



$products = array(
    '4'=>array(
        CATEGORY=>'1',
        NAME=>'Fine Jersey Tee',
        NUMBER=>'#6500',
        PRICE=>'3.50$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>With a soft feel, and longer body length, this 7.4 oz. 100% ring-spun cotton tee is a great choice at an even better price. Made from 30/1\'s fine knit jersey, this tee features tubular construction, ribbed crew taped neck and shoulders with double-needle sleeves and bottom hem.</p>',
        IMG=>'images/6500_women_white.jpg',
        ALT=>'Women Tee-Shirt Fine Jersey #6500',
    ),
    '5'=>array(
        CATEGORY=>'1',
        NAME=>'Blend V-Neck Tee',
        NUMBER=>'#3540',
        PRICE=>'3.50$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Ring-Spun softness. Slim fit. Double needle sleeve and bottom hem.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Side-seamed.</li>
            <li>30 Single.</li>
        </ul>',
        IMG=>'images/3540_women_red.jpg',
        ALT=>'Women Tee-Shirt Blend V-Neck #3540',
    ),
    '6'=>array(
        CATEGORY=>'1',
        NAME=>'Blend Tee-Shirt',
        NUMBER=>'#3545',
        PRICE=>'3.25$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>65% Polyester/35% coton blend 6 oz.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Ring spun softness.</li>
            <li>Slim fit.</li>
            <li>Double needle sleeve and bottom hem.</li>
            <li>Side seamed.</li>
            <li>30 Single.</li>
        </ul>',
        IMG=>'images/3545_women_black.jpg',
        ALT=>'Women Tee-Shirt Blend #3545',
    ),
    '7'=>array(
        CATEGORY=>'1',
        NAME=>'Racerback Tank',
        NUMBER=>'#3547',
        PRICE=>'4.00$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>65% Polyester / 35% Cotton blend, 6 oz.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Ring spun softness.</li>
            <li>Slim fit.</li>
            <li>Ribbed binding around neck and armholes.</li>
            <li>Double needle hem.</li>
            <li>Racerback styling.</li>
            <li>Side seamed.</li>
            <li>30 Single.</li>
        </ul>',
        IMG=>'images/3547_women_black.jpg',
        ALT=>'Women Tank Racerback Blend #3547',
    ),
    '8'=>array(
        CATEGORY=>'1',
        NAME=>'Jersey V-Neck Tee',
        NUMBER=>'#6555',
        PRICE=>'3.50$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Finally this brand is catering to the ladies with a 7.4 oz. 100% ring-spun cotton, 30/1\'s fine knit jersey tee.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Longer body length, tubular construction.</li>
            <li>Ribbed crew taped neck and shoulders with double-needle sleeves and bottom hem.</li>
        </ul>',
        IMG=>'images/6555_women_black.jpg',
        ALT=>'Women Tee-Shirt Jersey V-Neck #3547',
    ),
    '9'=>array(
        CATEGORY=>'1',
        NAME=>'Pull Over Hoodie',
        NUMBER=>'#3320',
        PRICE=>'6.00$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>12.5 oz 50% combed ring spun cotton, 50% polyester Matching flat drawstring.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Ribbed cuffs and waistband with spandex.</li>
            <li>Pouch pocket.</li>
            <li>Tearaway label.</li>
        </ul>',
        IMG=>'images/3320_women_grey.jpg',
        ALT=>'Women Hoodie Pull Over #3320',
    ),
    '10'=>array(
        CATEGORY=>'2',
        NAME=>'Soft Touch Tee',
        NUMBER=>'#4800',
        PRICE=>'4.00$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Perfect shirt when you\'re on a budget. Ideal for clubs, schools, organizations, and charities, without sacrificing quality for the price.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>100% cotton jersey knit.</li>
            <li>Neck and shoulders.</li>
            <li>Double needle sleeve and bottom hem.</li>
            <li>Double needle cover seamed neck.</li>
            <li>Tubular (no side seam), quarter turned body.</li>
        </ul>',
        IMG=>'images/4800_men_green.jpg',
        ALT=>'Men Soft Touch Tee-Shirt #4800',
    ),
    '11'=>array(
        CATEGORY=>'2',
        NAME=>'Polo',
        NUMBER=>'#7002',
        PRICE=>'5.00$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Our heaviest polo available. 12 oz made from 100% cotton ring-spun pique knit.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Shoulder-to-shoulder taping and a cover seamed neckline for a tailored look and added durability.</li>
            <li>Double needle topstitched collar, cuffs and hem.</li>
            <li>Garments are always engineered for best shrinkage control with the best low twist soft touch fabric.</li>
            <li>Remember to wash in cold & hang to dry to preserve your shirt.</li>
        </ul>',
        IMG=>'images/7002_men_royalblue.jpg',
        ALT=>'Men Polo #7002',
    ),
    '12'=>array(
        CATEGORY=>'2',
        NAME=>'Pull Hoodie',
        NUMBER=>'#3320',
        PRICE=>'7.00$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>12.5 oz 50% combed ring spun cotton, 50% polyester Matching flat drawstring.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Ribbed cuffs and waistband with spandex.</li>
            <li>Pouch pocket. Tearaway label.</li>
        </ul>',
        IMG=>'images/3320_men_black.jpg',
        ALT=>'Men Pull Over Hoodie #3320',
    ),
    '13'=>array(
        CATEGORY=>'2',
        NAME=>'Beach Hoodie',
        NUMBER=>'#9670',
        PRICE=>'6.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>60% Ring-Spun Cotton / 40% Polyester, 7.4 oz. Fine jersey.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Side-seamed, taped neck.</li>
            <li>Ribbed bottom and cuff.</li>
            <li>Flat drawcord with zipper.</li>
            <li>Tearaway label.</li>
        </ul>',
        IMG=>'images/9670_men_black.jpg',
        ALT=>'Men Beach Hoodie #9670',
    ),
    '14'=>array(
        CATEGORY=>'2',
        NAME=>'Sleeveless',
        NUMBER=>'#5580',
        PRICE=>'3.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>A great sturdy tee that will stand up to rigorous workouts at the gym, or fun times at the beach. Made from 100% cotton; ring spun.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Double needle cover stitch around neck, bottom hem and armholes.</li>
        </ul>',
        IMG=>'images/5580_men_navy.jpg',
        ALT=>'Men Tee-Shirt Sleeveless #5580',
    ),
    '15'=>array(
        CATEGORY=>'2',
        NAME=>'Tank Top',
        NUMBER=>'#6520',
        PRICE=>'3.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>100% Ring-Spun Cotton, 7.4 oz. 30/1s Fine knit jersey. Tubular construction, ribbed crew taped neck and shoulders with double needle sleeves and bottom hem.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Reactive-dyed.</li>
            <li>Dischargeable.</li>
        </ul>',
        IMG=>'images/6520_men_red.jpg',
        ALT=>'Men Tank Top #6520',
    ),
    '16'=>array(
        CATEGORY=>'2',
        NAME=>'Long Sleeve Tee-Shirt',
        NUMBER=>'#5520',
        PRICE=>'4.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>This 100% cotton is a nice heavy weight piece (9.4 oz) ideal for layering or wearing alone.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Ring spun yarns, shoulder to shoulder taping, cover seamed neckline, double needle topstitch in collar, cuffs & hem.</li>
            <li>Great quality at an even better price.</li>
        </ul>',
        IMG=>'images/5520_men_red.jpg',
        ALT=>'Men Tee-Shirt Long Sleeve #6520',
    ),
    '17'=>array(
        CATEGORY=>'2',
        NAME=>'Baseball Tee-Shirt',
        NUMBER=>'#5540',
        PRICE=>'5.50$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Such an affordable price for such a cool shirt. Great for teams, clubs, and groups that want to look uniform on a budget while standing out.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Made from 100% jersey ring spun cotton.</li>
            <li>3/4" sleeves and contrasting 1x1 rib neck collar rib.</li>
            <li>Double needle sleeve and bottom hem for lasting durability.</li>
        </ul>',
        IMG=>'images/5540_men_black.jpg',
        ALT=>'Men Tee-Shirt Baseball #5540',
    ),
    '18'=>array(
        CATEGORY=>'3',
        NAME=>'Kids Tee-Shirt',
        NUMBER=>'#5551',
        PRICE=>'2.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Shop our wide variety of kids t-shirts. We carry both short sleeve and long sleeve shirts in all the popular colors. All of our kids tees are sourced in bulk in order to offer you the cheapest prices. A great cotton tee made from 9.4 oz of 100% preshrunk cotton.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Shoulder to shoulder taping, cover seamed neckline, double needle topstitching throughout.</li>
        </ul>',
        IMG=>'images/5551_kids_black.jpg',
        ALT=>'Kids Tee-Shirt #5551',
    ),
    '19'=>array(
        CATEGORY=>'3',
        NAME=>'Kids Tee-Shirt',
        NUMBER=>'#5550',
        PRICE=>'2.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Shop our wide variety of kids t-shirts. We carry both short sleeve and long sleeve shirts in all the popular colors. All of our kids tees are sourced in bulk in order to offer you the cheapest prices. A great cotton tee made from 9.4 oz of 100% preshrunk cotton.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Shoulder to shoulder taping, cover seamed neckline, double needle topstitching throughout.</li>
        </ul>',
        IMG=>'images/5550_kids_gold.jpg',
        ALT=>'Kids Tee-Shirt #5550',
    ),
    '20'=>array(
        CATEGORY=>'3',
        NAME=>'Kids Tee-Shirt',
        NUMBER=>'#5555',
        PRICE=>'2.75$',
        DESCRIPTION=> '<h3>Description</h3>
        <hr>
        <p>Shop our wide variety of kids t-shirts. We carry both short sleeve and long sleeve shirts in all the popular colors. All of our kids tees are sourced in bulk in order to offer you the cheapest prices. A great cotton tee made from 9.4 oz of 100% preshrunk cotton.</p>
        <h3>Features:</h3>
        <hr>
        <ul>
            <li>Shoulder to shoulder taping, cover seamed neckline, double needle topstitching throughout.</li>
        </ul>',
        IMG=>'images/5555_kids_green.jpg',
        ALT=>'Kids Tee-Shirt #5555',
    ),
);


?>