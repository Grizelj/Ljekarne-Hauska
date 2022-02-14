<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
    <script src="include/ispisLijek.js"></script>
  </head>
  <body>  
  <?php
    include "spoj.php";
    ?>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include_once "include/izbornik.php" ?>
  <table id="example" class="table table-striped" style="width:100%">
  <thead>
            <tr>
                <th>ID</th>
                <th>Lijek</th>
                <th>Opis</th>
                <th>Cijena</th>
                <th>Količina</th>
                <th>Stanje1</th>
                <th>Stanje2</th>
                <?php
                if(isset($_SESSION['uloga']) && ($_SESSION['uloga']=="admin")){ 
                  echo '<th>Akcija</th>';
                }
                ?>
            </tr>
  </thead>
  <tbody>
    <?php
  $result = mysqli_query($conn, "SELECT * FROM lijek");
  while  ($redak = mysqli_fetch_array($result)) {
    echo "<tr>";

    echo "<td>" . $redak['id'] . "</td>";

    echo "<td>" . $redak['ime'] . "</td>";

    echo "<td>" . $redak['opis'] . "</td>";

    echo "<td>" . $redak['cijena'] . "</td>";

    echo "<td>" . $redak['kolicina'] . "</td>";

    echo "<td>" . $redak['stanje1'] . "</td>";

    echo "<td>" . $redak['stanje2'] . "</td>";

    if(isset($_SESSION['uloga']) && ($_SESSION['uloga']=="admin")){ 
    echo "<td>" . "<a href='brisanjeLijek.php?id={$redak['id']}' class='confirmation'><img src='img/x-square.svg'></a>" .
    "<strong> / </strong>" .
    "<a href='updateLijek.php?id={$redak['id']}'><img src='img/pencil-square.svg'></a>" . "</td>";
    echo "</tr>";
    }
  }
?>

  </tbody>
  </table>
</div>
<div>
  <?php include_once "include/footer.php"?>
</div>  
  </body>
</html>