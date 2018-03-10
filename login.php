<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: product.php');
}
?>





<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="index.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Assignment in Bootstrap</title>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
  <div class="container">
      <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-6">
    <panel class="panel-header panel-primary">

    <h3 class=" text-warning">  Login to make purchase</h3><br>
    <form method="POST" action="login_submit.php">
    </div>
    <div class="form-group">.
      <input type="email" class="form-control" placeholder="email" name="e-mail" required="true" />
    </div>
    <div class="form-group">.
      <input type="password" class="form-control" placeholder="password" name="password" required="true" />
    </div>
    <div class="form-group">.
      <button type="submit "class="form-control btn btn-primary" placeholder="Submit" name="Submit" required="true" >Submit
      </button>


    </form>
    <h2 class="pannel-footer">
      <h3>Don't have an account? <a href="signup.php">Register</a></h3>


    </h2>



    </panel>
  </div>
</div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php include 'includes/footer.php'; ?>



</body>
</html>
