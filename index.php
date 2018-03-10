<?php
 require("includes/common.php");
 if(isset($_SESSION['email'])) {
   header('location: product.php');
 }
?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="index.css">
        <title>Assignment in Bootstrap</title>
    </head>
    <body>
    <?php
    include 'includes/header.php';
    ?>
    <div id="banner_image">

      <div class="container">
        <div id="banner_content">
          <button type="button">
          <a href="product.php" class=" btn btn-danger  btn-lg active" >Shop now</a>
        </button>

      </div>

      </div>

    </div>
    <?php
    include 'includes/footer.php';
     ?>
    </body>
    </html>
