<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="../stranica/img/Logo.png" rel="logo" width="40" height="32">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="../index.php" class="nav-link px-2 text-white">Ljekarne Hauska</a></li>
          <li><a href="naslovna.php" class="nav-link px-2 text-white">Naslovna</a></li>
          <li><a href="lijekovi.php" class="nav-link px-2 text-white">Lijekovi</a></li>
          <li><a href="ispis.php" class="nav-link px-2 text-white">Ispis lijekova</a></li> 
          <li><a href="nadzornaPloca.php" class="nav-link px-2 text-white">Nadzorna ploča</a></li>        
        </ul>
        <?php
         if(!empty($_SESSION['aktivan']) && $_SESSION['aktivan']){
          echo "<div class='text-end'>";
          echo "<h4>Dobro došao" . $_SESSION['ime'], $_SESSION['prezime'] . "</h4>";
          echo "</div>";
        }else{
        
        echo "<div class='text-end'>
          <button type='button' class='btn btn-outline-light me-2' id='loginBtn' onclick='login()'>Login</button>
        </div>
        <div class='text-end'>
          <button type='button' class='btn btn-outline-light me-2' id='loginBtn' onclick='odjava()'>Odjava</button>
        </div>";
        }
        ?>    
      </div>
    </div>
  </header>