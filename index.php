<?php
session_start();

if (isset($_POST['loginname']) && !empty($_POST['loginname'])) {
  $_SESSION['nom'] = $_POST['loginname'];
}

if (!isset($_SESSION['nom'])){
  header('Location: login.php'); 
  exit();
}
$cookieNuts = $_POST['nuts'] ?? $_SESSION['nuts'] ?? "";
$cookieChips = $_POST['chips'] ?? $_SESSION['chips'] ?? "";
$cookieChocolate = $_POST['chocolate'] ?? $_SESSION['chocolate'] ?? "";
$cookieMMs = $_POST['MMs'] ?? $_SESSION['MMs'] ?? "";
$_SESSION['nuts'] = $cookieNuts;
$_SESSION['chips'] = $cookieChips;
$_SESSION['chocolate'] = $cookieChocolate;
$_SESSION['MMs'] = $cookieMMs;
require 'inc/head.php'; 
?>

<section class="cookies container-fluid">
  <div class="row">
    <form role="form" action="#" method="GET">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Pecan nuts</h3>
            <input type="text" name="nuts" value="Pecan nuts" hidden>
            <p>Cooked by Penny !</p>
            <button  type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button>              
          </figcaption>
        </figure>
      </div>
    </form>
    <form role="form" action="#" method="GET">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <input type="text" name="chips" value="Chocolate chips" hidden>
            <h3>Chocolate chips</h3>
            <p>Cooked by Bernadette !</p>
            <button  type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button> 
          </figcaption>
        </figure>
      </div>
    </form>
    <form role="form" action="#" method="GET">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <input type="text" name="chocolate" value="Chocolate cookie" hidden>
            <h3>Chocolate cookie</h3>
            <p>Cooked by Bernadette !</p>
            <button  type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button> 
          </figcaption>
        </figure>
      </div>
    </form>
    <form role="form" action="#" method="GET">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <input type="text" name="MMs" value="M&M's&copy; cookies" hidden>
            <h3>M&M's&copy; cookies</h3>
            <p>Cooked by Penny !</p>
            <button  type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart</button> 
          </figcaption>
        </figure>
      </div>
    </form>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
