<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="profil.php" class="nav-link px-2 text-muted">Profil</a></li>
      <li class="nav-item"><a href="ispis.php" class="nav-link px-2 text-muted">Ispis lijekova</a></li>
      <?php
      if(isset($_SESSION['uloga']) && ($_SESSION['uloga']=="admin")) {
            echo '<li><a href="nadzornaPloca.php" class="nav-link px-2 text-white">Nadzorna ploča</a></li> ';
          }
      ?> 
    </ul>
    <p class="text-center text-muted">&copy; <?php echo date("Y")?> Ljekarne Hauska</p>
  </footer>
</div>
<script>
    <?php include_once "include/scripts.js"?>
    <?php include_once "../include/scripts.js"?>
</script>