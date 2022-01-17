<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
  <?php
    include "spoj.php";

    ?>
    <?php include_once "include/head.php"?>
  </head>
  <body>
  
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include_once "include/izbornik.php" ?>
  

  <?php
  $result = mysqli_query($conn, "SELECT * FROM lijek");
  echo "
  <table id='dtBasicExample' class='table table-striped table-bordered table-sm' cellspacing='0' width='100%'>
  <thead>
    <tr>
      <th class='th-sm'>ID
      </th>
      <th class='th-sm'>Lijek
      </th>
      <th class='th-sm'>Opis
      </th>
      <th class='th-sm'>Cijena
      </th>
      <th class='th-sm'>Količina
      </th>
      <th class='th-sm'>Stanje1
      </th>
      <th class='th-sm'>Stanje2
      </th>
      <th class='th-sm'>Akcija
      </th>
    </tr>
  </thead>";
  while  ($redak = mysqli_fetch_array($result)) {
    echo "<tbody>";
    echo "<tr>";

    echo "<td>" . $redak['id'] . "</td>";

    echo "<td>" . $redak['ime'] . "</td>";

    echo "<td>" . $redak['opis'] . "</td>";

    echo "<td>" . $redak['cijena'] . "</td>";

    echo "<td>" . $redak['kolicina'] . "</td>";

    echo "<td>" . $redak['stanje1'] . "</td>";

    echo "<td>" . $redak['stanje2'] . "</td>";

    echo "<td>" . "<a href='brisanjeLijek.php?id={$redak['id']}'>X</a>" .
    "<strong> / </strong>" .
    "<a href='updateLijek.php?id={$redak['id']}'>Update</a>" . 

"</td>";

    echo "</tr>";
    echo "</tbody>";
  }
  echo "</table>"
?>
  
  <?php include_once "include/footer.php"?>
</div>  
  </body>
</html>