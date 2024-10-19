<?php

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
    <link rel="stylesheet" href="SignUpPage.css">
    
</head>


<body class="bg-dark">
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <nav class="shadow-lg navbar navbar-expand-lg bg-body-tertiary p-2">
    <div class="d-flex container-fluid">
      <a class="navbar-brand acitve" href="index.html">Clock In</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="SignUpPageWebsite/SignUpPage.html">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <br>
  <div class="container-fluid d-flex justify-content-center">
    <p class="FadeIn fs-1 text-white"><strong>Sign Up</strong></p><br>
  </div>
  <br>

  <div class=" FadeIn container-fluid d-flex justify-content-center box border border-gray rounded-4 shadow-lg ">
    <form action="ProcessSignUpPage.php" method="post" >

      <div class="Position1" id="FirstNameLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="exampleFormControlInput1" id="FirstNameActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">First Name</label>
      </div>
      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="FirstName" type="text"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="FirstNameInput" aria-describedby="firstnameHelp">
      </div>

      <div class="Position1" id="LastNameLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="exampleFormControlInput1" id="LastNameActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">Last Name</label>
      </div>
      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="LastName" type="text"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="LastNameInput" aria-describedby="LastnameHelp">
      </div>

      <div class="Position1" id="EmailLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="exampleFormControlInput1" id="EmailActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">Email</label>
      </div>
      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="Email"  type="email"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="EmailInput" aria-describedby="emailHelp">
      </div>

      <div class="Position1" id="PasswordLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="exampleFormControlInput1" id="EmailActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">Password</label>
      </div>

      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="Password" type="password"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="PasswordInput" aria-describedby="PasswordHelp">
      </div>
      <br>
      <div class="container-fluid d-flex justify-content-center">
          <button id="SignUpButton" class="SignUpButton Position1 shadow-lg border border-gray rounded-2 bg-transparent text-white p-2">Sign Up</button>
      <div>
  
    </form>
  </div>


  <script src="SignUpPage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>