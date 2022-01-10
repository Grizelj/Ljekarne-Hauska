<?php session_start(); ?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <?php include_once "include/head.php" ?>
</head>

<body>
<?php
    include "spoj.php";
    /*if(!empty($_SESSION['aktivan']) && $_SESSION['aktivan']){
        
    }else{
        header("Location: login.php");
    } */
    ?>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php include_once "include/izbornik.php" ?>
    
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
        <br>
        <table id="pregled">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM zaposlenik where uloga='zaposlenik'");
        echo "<table id='dtBasicExample' class='table table-striped table-bordered table-sm' border='1' style='border-collapse:collapse;'>

          <tr>

          <th>Id</th>

          <th>Ime</th>

          <th>Prezime</th>

          <th>Email</th>

          <th></th>

          </tr>";
        while ($redak = mysqli_fetch_array($result)) {

          echo "<tr>";

          echo "<td>" . $redak['id'] . "</td>";

          echo "<td>" . $redak['ime'] . "</td>";

          echo "<td>" . $redak['prezime'] . "</td>";

          echo "<td>" . $redak['email'] . "</td>";

          echo "<td>" . "delete" . "</td>";

          echo "</tr>";
        }
        ?>
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12" style="text-align: center;">
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="naslovna.php" class="nav-link px-2 text-muted">Naslovna</a></li>
      <li class="nav-item"><a href="lijekovi.php" class="nav-link px-2 text-muted">Lijekovi</a></li>
      <li class="nav-item"><a href="ispis.php" class="nav-link px-2 text-muted">Ispis lijekova</a></li>
    </ul>
    <p class="text-center text-muted">&copy; <?php echo date("Y")?> Ljekarne Hauska</p>
  </footer>
</div>
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
  <script>
    <?php include_once "include/scripts.js"?>
    <?php include_once "../include/scripts.js"?>
</script>
</body>
</html>