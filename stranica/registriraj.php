<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ljekarne Hauska</title>
</head>
<body>
    <?php
    include "spoj.php";
    ?>
    <?php

    $hash_pw = md5($_POST['lozinka']);
    
    $sql = "INSERT INTO zaposlenik(ime, prezime, email, lozinka, uloga) VALUES('$_POST[ime]','$_POST[prezime]','$_POST[email]','$hash_pw', 'zaposlenik')";

    if (mysqli_query($conn, $sql)) {
        echo "Zaposlenik je uspješno unešen.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      header("Location: nadzornaPloca.php");
    ?>

    <br>
    <a href="profil.php">Naslovna</a>
</body>
</html>