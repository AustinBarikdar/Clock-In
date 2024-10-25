<?php
  session_start();

  $authenticated = false;
  if (isset($_SESSION["email"])){
    $authenticated = true;
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Clock In</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="index.css" rel="stylesheet">
</head>


<body class="bg-dark">
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <nav class="shadow-lg navbar navbar-expand-lg bg-body-tertiary p-2 shadow-lg">
    <div class="d-flex container-fluid">
      <a class="navbar-brand acitve" href="#">Clock In</a>
      <div class="d-flex justify-content-start collapse navbar-collapse" id="navbarNav">
        <div class="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Features</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNav"></div>
      <div class="">
        <ul class="navbar-nav">
          <?php
          if ($authenticated == false){

            ?>
            <li class="nav-item">
              <a class="nav-link" href="LoginPageWebsite/LogInPage.php">Log In</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="SignUpPageWebsite/SignUpPage.php">Sign Up</a>
          </li>
          </ul>
          <?php } else{?>
            <div class="dropdown">
            <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome,<?= $_SESSION['first_name']?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="#">Profile</a></li>
              <li><a class="nav-link" href="logout.php">Log Out</a></li>
            </ul>
          </div>
          <?php }?>
      </div>
    </div>
    </div>
  </nav>
  <br>
  <div class="container-fluid d-flex justify-content-center">
    <p class="FadeIn fs-1 text-white"><strong>Clock In</strong></p><br>

  </div>
  <br>
  <div class="container-fluid d-flex justify-content-center">
    <p class="fs-2 text-white">Information</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>