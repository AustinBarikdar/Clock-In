<?php
  session_start();
  $authenticated = false;

  if (isset($_SESSION["email"])){
    header("location: /index.php");
    exit;
  }

  $email = "";
  $password = "";
  $error = false;
  $errormessage = "";

  

  if ($_SERVER['REQUEST_METHOD'] == "POST" ){
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    
    if (empty($email) || empty($password)){
      $errormessage = "Email and Password is Required";
      $error = true;
    }else{
      require $_SERVER['DOCUMENT_ROOT']."/DataBase.php";
      $dbconnection = dbconnection();
  
      $statement = $dbconnection -> prepare("SELECT id, firstname,lastname, password_hash, created_at FROM user Where email = ?");
  
      $statement -> bind_param("s",$email);
  
      $statement -> execute();
      
      $statement -> bind_result($id,$first_name,$last_name,$stored_password,$created_at); 

       if ($statement->fetch()){
          if (password_verify($password,$stored_password)){
            $_SESSION['id'] =  $id;
            $_SESSION['first_name'] =  $first_name;
            $_SESSION['last_name'] =  $last_name;
            $_SESSION['email'] =  $email;
            $_SESSION['created_at'] = $created_at;
            header("location: /index.php");
            exit;
          }

       }
       $statement->close();

       $errormessage = "Email and Password is Invalid";

    }
    
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
  <title>ClockIn SignUp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="LoginPage.css">
    
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
            <a class="nav-link disabled" href="/LoginPageWebsite/LogInPage.php">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/SignUpPageWebsite/SignUpPage.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <br>
  
  <div class="container-fluid d-flex justify-content-center">
    <p class="FadeIn fs-1 text-white"><strong>Log In</strong></p><br>
  </div>
  <div class="container-fluid d-flex justify-content-center">
    <p class="FadeIn fs-6 text-white"><strong>Log In, so we can help you and make sure its you.!</strong></p><br>
  </div>
  <br>
  <div class=" FadeIn container-fluid d-flex justify-content-center box border border-gray rounded-4 shadow-lg ">
    <form method = "Post" >

      <div class="Position1" id="EmailLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="Email" id="EmailActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">Email</label>
      </div>

      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="Email"  type="email"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="EmailInput" aria-describedby="emailHelp" Value = <?= $email ?> >
      </div>  

      <div class="Position1" id="PasswordLabel" style="position:relative; left: 23px; bottom: -33px; z-index: 1; display:inline;">
        <label for="Password" id="EmailActualLabel" class="bg-dark form-label text-white" style="display:inline; transition: all 0.2s; padding: 0px 3px;">Password</label>
      </div>

      <div class="container-fluid d-flex justify-content-center">
        <input autocomplete="off" name="Password" type="password"class="InputFields Default input shadow-lg border border-gray rounded-3 bg-transparent p-2 text-white " aria-label="default input example" id="PasswordInput" aria-describedby="PasswordHelp" <?= $password  ?>  >
      </div>

      <div class="container-fluid d-flex justify-content-center">
        <span class= "text-danger"> <?= $errormessage ?> </span>
      </div>

     
     <br>
      <div class="container-fluid d-flex justify-content-center">
          <button id="LoginButton" class="LoginButton Position1 shadow-lg border border-gray rounded-2 bg-transparent text-white p-2">Log In</button>
      <div>
  
    </form>
  </div>


  <script src="LoginPage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>