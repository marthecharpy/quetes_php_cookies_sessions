<?php 
session_start();

$articles = [
  32 => "M&M's&copy; cookies",
  36 => "Chocolate chips",
  46 => "Pecan nuts",
  58 => "Chocolate cookie"
];

if (!isset($_SESSION['nom'])){
  header('Location: login.php'); 
  exit();
}
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <?php foreach($_SESSION['panier'] as $id){ ?>
      <h3><?= $articles[$id] ?></h3>
    <?php } ?>
</section>
<?php require 'inc/foot.php'; ?>
