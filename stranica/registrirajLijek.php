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
    
    $sql = "INSERT INTO lijek(ime, opis, cijena, kolicina, stanje1, stanje2) VALUES('$_POST[ime]','$_POST[opis]','$_POST[cijena]','$_POST[kolicina]', '$_POST[stanje1]', '$_POST[stanje2]')";

    if (mysqli_query($conn, $sql)) {
        echo "Lijek je uspješno unešen.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      header("Location: ispis.php");
    ?>

    <br>
    <a href="profil.php">Naslovna</a>
</body>
</html>