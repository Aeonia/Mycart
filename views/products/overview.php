<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Mon panier
    </title>
  </head>
  <body>
    <?php if (isset($panierencours)): ?>
         <?php 
foreach($panierencours as $panierrightnow) {
  echo($panierrightnow['title']).'<br>' ;
  echo($panierrightnow['quantite']).'<br>';

}
        ?>
    <?php endif; ?>

    <ul>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>