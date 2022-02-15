<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
  </head>
  <body>
  
  <?php
    include "spoj.php";
    if(!empty($_SESSION['aktivan']) && $_SESSION['aktivan']){
        
    }else{
        header("Location: login.php");
    } 
    ?>

    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include_once "include/izbornik.php" ?>

  <div class="row">
    <div class="row"><div class="col-lg-12" style="text-align:center; padding-top: 20px;">
    <?php        
          echo "<h1> " . $_SESSION['ime'] . " " . $_SESSION['prezime'] . "</h1>";
          ?>
    </div></div>
    <div class="col-lg-2"></div>
      <div class="col-lg-3" style="text-align: center; font-size:130%; padding-top: 40px;">
          
          <?php        
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
          echo "<h4>Lozinka:</h4>" . "<span class='pwdhidden'>***********</span>";
          echo "<span class='pwdshow'>" . $_SESSION['lozinka'] . "</span>";
          echo "</div>";
          ?>
          
      </div>
      <div class="col-lg-7" style="text-align: center;">
          <img src="img/profile.png" alt="profil">
      </div>
  </div>  
  <?php include_once "include/footer.php"?>
</div> 
  </body>
</html>