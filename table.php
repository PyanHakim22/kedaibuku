<?php include "autch.php"; ?>
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
<style>
  td, th, h2{
    text-align:center;
  }
</style>

</head>
<body>
    
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.jpg" alt="" width="70" height="54" class="d-inline-block align-text-center ">
      Buku saya
    </a>
    <a type="button" class="btn btn-primary" href="logout.php">LOG OUT</a>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="mt-5 mb-3 clearfix">
              <h2 class="pull-left">Senarai Nama Buku</h2>
              <a href="tambah.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Buku</a>
          </div>
      </div>
          <table class="table table-sm" style="width:70%; table-align=center; margin-left:auto;margin-right:auto;">
            <thead >
              <tr>
                <th scope="col"  >id</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Kategori</th>
                <th scope="col">Bilangan</th>
                <th colspan ="2" >Tindakan</th>
              </tr> 
            </thead>
            <tbody>

              <?php
              include "conn.php";

              $query = "SELECT * FROM buku";
              $view = mysqli_query($dbb,$query);

              $i=1;
              
              while($row= mysqli_fetch_assoc($view)){
                  $id=$row['id'];
                  $namabuku=$row['namabuku'];
                  $kategori=$row['kategori'];
                  $bilangan=$row['bilangan'];

                  echo "<tr>";
                  echo "<th scope='row'>$i</th>";
                  echo "<td>$namabuku</td>";
                  echo "<td>$kategori</td>";
                  echo "<td>$bilangan</td>";
                  //echo "<td><a href='view.php?view={$id}' class='btn btn-outline-success'>VIEW</a></td>";
                  echo "<td><a href='edit.php?update&&edit={$id}' class='btn btn-outline-success'>KEMASKINI</a></td>";
                  echo "<td><a href='delete.php?delete={$id}' class='btn btn-outline-success'>PADAM</a></td>";
                  echo "</tr>";
                  $i++;
              }

              ?>      
            </tbody>
          </table>
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
  

</body>
</html>