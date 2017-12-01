<?php

session_start();
require __DIR__.'/models/Product.php';

$panierencours = [];

foreach ($_SESSION['panier'] as $item) {
	$product = Product::readitems($item['id']);
	$product['quantite'] = $item['quantite']; 
	array_push($panierencours, $product);
}

require __DIR__.'/views/products/overview.php';
