<?php 
session_start();

if (!isset($_SESSION['nom'])){
  header('Location: login.php'); 
  exit();
}
require 'inc/head.php';
?>
<section class="cookies container-fluid">
    <div class="row">
    	<h3><?php echo($_SESSION['nuts'])?></h3>
    	<h3><?php echo($_SESSION['chips'])?></h3>
    	<h3><?php echo($_SESSION['chocolate'])?></h3>
    	<h3><?php echo($_SESSION['MMs'])?></h3>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
