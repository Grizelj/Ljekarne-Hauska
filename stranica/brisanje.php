<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "spoj.php";
    ?>

    <?php 
     $sql = "delete from zaposlenik where id=" . $_GET["id"];

     if (mysqli_query($conn, $sql)) {
         echo "<script>alert('Zaposlenik je uspješno izbrisan.')</script>";
       } else {
       }
       header("Location: nadzornaPloca.php");
    ?>
</body>
</html>