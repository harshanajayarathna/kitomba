<?php

require '../vendor/autoload.php';

use tax\helpers\SalesTax;
use tax\helpers\ImportTax;
use tax\models\Product;
use tax\Receipt;


$salesTax = new SalesTax();
$importTax = new ImportTax();


// cart items
$cartItems = [];
// input set 1
/*$product1 = new Product();
$product1->setName('book');
$product1->setCategory('BOOK'); 
$product1->setOrigin('LOCAL');
$product1->setQuantity(2);
$product1->setPrice(12.49);

array_push($cartItems, $product1);

$product2 = new Product();
$product2->setName('music cd');
$product2->setCategory('MUSIC');
$product2->setOrigin('LOCAL');
$product2->setQuantity(2);
$product2->setPrice(14.99);

array_push($cartItems, $product2);

$product3 = new Product();
$product3->setName('chocolate bar');
$product3->setCategory('FOOD');
$product3->setOrigin('LOCAL');
$product3->setQuantity(2);
$product3->setPrice(0.85);

array_push($cartItems, $product3);*/
//------------------------------------------------------------------------------
// input set 2
/*$product4 = new Product();
$product4->setName('imported box of chocolate');
$product4->setCategory('FOOD');
$product4->setOrigin('IMPORT');
$product4->setQuantity(1);
$product4->setPrice(10);

array_push($cartItems, $product4);

$product5 = new Product();
$product5->setName('imported box of perfume');
$product5->setCategory('BEAUTY');
$product5->setOrigin('IMPORT');
$product5->setQuantity(1);
$product5->setPrice(47.50);

array_push($cartItems, $product5); */

//------------------------------------------------------------------------------
// input set 3

$product1 = new Product();
$product1->setName('1 imported bottle of perfume');
$product1->setCategory('BEAUTY');
$product1->setOrigin('IMPORT');
$product1->setQuantity(1);
$product1->setPrice(27.99);

array_push($cartItems, $product1);

$product2 = new Product();
$product2->setName('bottle of perfume');
$product2->setCategory('BEAUTY');
$product2->setOrigin('LOCAL');
$product2->setQuantity(1);
$product2->setPrice(18.99);

array_push($cartItems, $product2);

$product3 = new Product();
$product3->setName('packet of headache pills');
$product3->setCategory('MEDICAL');
$product3->setOrigin('LOCAL');
$product3->setQuantity(1);
$product3->setPrice(9.75);

array_push($cartItems, $product3);

$product4 = new Product();
$product4->setName('box of imported chocolates');
$product4->setCategory('FOOD');
$product4->setOrigin('IMPORT');
$product4->setQuantity(1);
$product4->setPrice(11.25);

array_push($cartItems, $product4);

$receipt = new Receipt($cartItems);

echo $receipt->generate();







