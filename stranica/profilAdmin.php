<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
  </head>
  <body>
  
  <?php
    include "spoj.php";
    if(isset($_SESSION['uloga']) && ($_SESSION['uloga']=="admin")) {
        
    }else{
        header("Location: login.php");
    } 
    ?>

    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include_once "include/izbornik.php" ?>

  <div class="row">
      <div class="col-lg-4" style="text-align: center;">
          <h2>
          <?php        
          echo "<h2> " . $_SESSION['ime'] . " " . $_SESSION['prezime'] . "</h2>";
          echo "<div class='text-start' id='profil'>";
          echo "<h4>Ime:</h4>" . $_SESSION['ime'];
          echo "</div>";
          echo "<div class='text-start' id='profil'>";
          echo "<h4>Prezime:</h4>" . $_SESSION['prezime'];
          echo "</div>";
          echo "<div class='text-start' id='profil'>";
          echo "<h4>Email:</h4>" . $_SESSION['email'];
          echo "</div>";
          echo "<div class='text-start' id='profil'>";
          echo "<h4>Uloga:</h4>" . $_SESSION['uloga'];
          echo "</div>";
          echo "<div class='text-start' id='profil'>";
          echo "<h4>Email:</h4>" . $_SESSION['email'];
          echo "</div>";
          echo "<div class='text-start' id='pwd'>";
          echo "<h4>Lozinka:</h4>" . "<span class='pwdhidden'>******</span>";
          echo "<span class='pwdshow'>" . $_SESSION['lozinka'] . "</span>";
          echo "</div>";
          ?>
          </h2>
      </div>
      <div class="col-lg-8" style="text-align: center;">
          <img src="img/profile.png" alt="profil">
      </div>
  </div>  
  <?php include_once "include/footer.php"?>
</div>  
  </body>
</html>