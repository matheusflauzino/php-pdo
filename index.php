<?php
require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";

$db = new Conn("localhost", "test_oo", "root", "root");
$product = new Product;
$service = new ServiceProduct($db, $product);

/* insert date
$product->setName('HTML course')
->setDesc('Build a complete website');

echo $service->save();
echo '<br />';
 */

$product->setId(7)
	->setName('HTML course 222')
	->setDesc('Build a complete website 222');

$service->update();

$service->delete($product->getId());
echo '<br />';

echo '<pre>';
print_r($service->list());
echo '</pre>';

echo '<pre>';
print_r($service->find(5));
echo '</pre>';