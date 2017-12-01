<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Lire
      <?php if ($product): ?>
          <?php echo '- ' . $product['title']; ?>
      <?php endif; ?>
    </title>
  </head>
  <body>
    <?php if ($product): ?>
      <h1><?php echo $product['title']; ?></h1>
      <p><?php echo $product['description']; ?></p>
      <aside>
        <dl>
          <dt>prix :</dt>
          <dd><?php echo $product['price']; ?></dd>
          <dt>en stock :</dt>
          <dd><?php echo $product['quantity']; ?></dd>
        </dl>
      </aside>
      <form action="" method="post">
      <input type="number" name="quantite" value="1">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="submit" value="Ajouter au panier">
      </form>
         <?php //$n = count($_SESSION['panier']);
        //for ($i = 0; $i<$n; $i++) {
        echo $quantite.' '.$product['title']." dans votre panier";
        //echo $_SESSION['panier']['id'];
        //} 

        var_dump($_SESSION['panier']);
        ?>
    <?php endif; ?>

    <ul>
      <li><a href="index.php">retour à l'index</a></li>
       <li><a href="overview.php">mon panier</a></li>
    </ul>
  </body>
</html>
