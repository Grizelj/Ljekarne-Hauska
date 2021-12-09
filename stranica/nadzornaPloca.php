<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
  </head>
  <body>
    
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
                    <input type="text"  placeholder="ime" name="ime">
                </div>
                <div class="registracijskaForma">
                    <input type="text"  placeholder="prezime" name="prezime">
                </div>
                <div class="registracijskaForma">
                    <input type="text"  placeholder="korisnicko ime" name="k_ime">
                </div>
                <div class="registracijskaForma">
                    <input type="password"  placeholder="Lozinka" name="lozinka">
                </div>
                <div>
                    <button class="btn btn-secondary" type="submit" name="register" id="reg_btn">Registriraj!</button>
                </div>
                </form>           
            </div>
    </div>

  
  <?php include_once "include/footer.php"?>
</div>  
  </body>
</html>