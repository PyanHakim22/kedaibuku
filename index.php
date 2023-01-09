<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/a60e36ad91.js" crossorigin="anonymous"></script>


</head>
<body>
<?php
include "db.php";
session_start();
if(isset($_POST['submit'])){

     $username = $_POST['username'];
     $password = $_POST['password'];
    

    //Checking is user existing in the database or not
    $query = "SELECT * FROM pengguna WHERE username='{$username}' and password='{$password}'";
      $result = mysqli_query($conn,$query);

      $rows = mysqli_num_rows($result);

            if($rows==1){
          $_SESSION['username'] = $username;
          $_SESSION['password'] = $password;
                // Redirect user to index.php
          header("Location: table.php");
             }else{
      echo "<div class='form'>
    <h3>Username/password is incorrect.</h3>
    <br/>Click here to <a href='index.php'>Login</a></div>";
      }
        }else{

    ?>

<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >
      <img src="logo.jpg" alt="" width="70" height="54" class="d-inline-block align-text-center ">
      Buku saya
    </a>
  </div>
</nav>

<form action="" method="post">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="gambar1.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <a type="button" class="btn btn-primary btn-floating mx-1" href="https://web.facebook.com/?_rdc=1&_rdr">
              <i class="fab fa-facebook-f"></i>
</a>

            <a type="button" class="btn btn-primary btn-floating mx-1" href="https://twitter.com/login">
              <i class="fab fa-twitter"></i>
</a>

            <a type="button" class="btn btn-primary btn-floating mx-1" href="https://www.linkedin.com/">
              <i class="fab fa-linkedin-in"></i>
</a>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Username</label>
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your username" name="username"/>
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter your password" name="password"/>
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" ></button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
  <?php } ?>
</section>
</form>


    
</body>
</html>