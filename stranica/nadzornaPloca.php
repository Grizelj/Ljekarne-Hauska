<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <?php include_once "include/head.php" ?>
</head>

<body>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php include_once "include/izbornik.php" ?>
    <?php
    include "spoj.php";

    ?>
    <div class="row">
      <div class="col-lg-4" style="text-align: center;">
        <h2>Registriraj novog zaposlenika!</h2>
        <p class="btn btn-secondary" id="registerForm">Registriraj sada! &raquo;</p>
      </div>
      <div class="col-lg-4" style="text-align: center;">
        <h2 onload="setCount()">Visitor counter: <span id="counter"></span></h2>
      </div>
      <div class="col-lg-4" style="text-align: center;">
        <h2>Pregled zaposlenika</h2>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM zaposlenik");
        echo "<table border='1' style='border-collapse:collapse;'>

          <tr>

          <th>Id</th>

          <th>Ime</th>

          <th>Prezime</th>

          <th>Email</th>

          </tr>";
        while ($redak = mysqli_fetch_array($result)) {

          echo "<tr>";

          echo "<td>" . $redak['id'] . "</td>";

          echo "<td>" . $redak['ime'] . "</td>";

          echo "<td>" . $redak['prezime'] . "</td>";

          echo "<td>" . $redak['email'] . "</td>";

          echo "</tr>";
        }
        ?>
      </div>
    </div>

  <!-- The Modal -->
  <div id="myModal3" class="modal3">
    <!-- Modal content -->
    <div class="modalRegister">
      <span class="close3">&times;</span>
      <form method="post" action="registriraj.php">
        <h1>Registracija</h1>
        <div class="registracijskaForma">
          <input type="text" placeholder="ime" name="ime">
        </div>
        <div class="registracijskaForma">
          <input type="text" placeholder="prezime" name="prezime">
        </div>
        <div class="registracijskaForma">
          <input type="text" placeholder="email" name="email">
        </div>
        <div class="registracijskaForma">
          <input type="password" placeholder="Lozinka" name="lozinka">
        </div>
        <div>
          <button class="btn btn-secondary" type="submit" name="register" id="reg_btn">Registriraj!</button>
        </div>
      </form>
    </div>
  </div>
      </div>
  <div id="footer">

  </div>
</body>
<script>
  $(document).ready(function() {
    $("#footer").load("/include/footer.php");
  });
</script>

</html>