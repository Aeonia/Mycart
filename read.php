<?php

session_start();
require __DIR__.'/models/Product.php';

$id = $_GET['id'];
$quantite = $_POST['quantite'];
if (!isset($_SESSION['panier'])) {
	$_SESSION['panier'] = [];
	}

if (isset($_GET['id'])) {
    $product = Product::read($_GET['id']);

	if (isset($quantite)) {
		$_SESSION['panier'] = Product::addquantity($_SESSION['panier'],$_GET['id'],$_POST['quantite']);

		header('location:read.php?id='.$_GET['id'].'');
	}
}

require __DIR__.'/views/products/read.php';
