<?php
session_start();
require __DIR__.'/models/Product.php';

$product = null;
$id = 0;

if (isset($_GET['id'])) {
    $product = Product::read($_GET['id']);
    $id=$_GET['id'];
}

$quantite = 0;
if (isset($_POST['quantite']) && is_numeric($_POST['quantite'])) {
	$quantite=$_POST['quantite'];
}

 

if (!isset($_SESSION['panier'])){
	$_SESSION['panier'] = array();
}

$panier = $_SESSION['panier'];

if (isset($panier) && $id > 0 && $quantite > 0) {
	$panier = array($id => 'id', $quantite => 'quantite');
  array_push( $panier['id'],$id);
         array_push( $panier['quantite'],$quantite);
}

require __DIR__.'/views/products/read.php';