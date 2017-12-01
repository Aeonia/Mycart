<?php

require_once __DIR__.'/Model.php';

class Product extends Model
{
    public static function readAll()
    {
        $sql =
            'SELECT * FROM products WHERE deleted_at IS NULL';

        $products = [];

        $pdo_statement = self::createStatement($sql);

        if ($pdo_statement && $pdo_statement->execute()) {
            $products = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return $products;
    }

    public static function read($id)
    {
        $sql =
            'SELECT * FROM products WHERE id=:id AND deleted_at IS NULL';

        $product = null;

        $pdo_statement = self::createStatement($sql);

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdo_statement->execute()
        ) {
            $product = $pdo_statement->fetch(PDO::FETCH_ASSOC);
        }

        return $product;
    }

    public static function addquantity($panier,$id,$quantite) 
    {   
        $tableaudesid = array_column($panier, 'id');
        $indexdupetittableau = array_search($id, $tableaudesid);
        if ($indexdupetittableau===false) 
        {
            array_push($panier, array('id'=>$id, 'quantite'=>$quantite));

        } else 
        {
           $panier[$indexdupetittableau]['quantite'] += $quantite;
        }
        return $panier;  
    }

    public static function readitems($id)
    
    {
        $sql =
            'SELECT * FROM products WHERE id=:id AND deleted_at IS NULL';

        $product = null;

        $pdo_statement = self::createStatement($sql);

        if (
            $pdo_statement &&
            $pdo_statement->bindParam(':id', $id, PDO::PARAM_INT) &&
            $pdo_statement->execute()
        ) {
            $product = $pdo_statement->fetch(PDO::FETCH_ASSOC);
        }

        return $product;
    }
}

    