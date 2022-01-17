<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <!--<?php include_once "include/header.php" ?> -->
  <br>
  <br>

  <main class="px-3">
    <br>
    <h1 class="neon" id="naslov" onclick="backIndex()">Ljekarne Hauska</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-6">
  <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="green" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>
    <h2>Ljekarnička jedinica I</h2>
    <p>Sv.L.B.Mandića 206, 31000 Osijek  </p>
    <p>Tel: 031/ 280 222</p>
    <p>Radno vrijeme: Pon - Pet 07:30 - 20:00 Subota 08:00 - 13:00</p>
    <p class="btn btn-secondary" id="GPS1">Saznaj više &raquo;</p>
  </div><!-- /.col-lg-4 -->
  <br>
  <div class="col-lg-6">
  <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" fill="green" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg>
    <h2>Ljekarnička jedinica II</h2>
    <p>Kralja Petra Svačića 6b, 31000 Osijek  </p>
    <p>Tel: 031/ 573 414</p>
    <p>Radno vrijeme: Pon - Pet 08:00 - 20:00 Subota 08:00 - 13:00</p>
    <p class="btn btn-secondary" id="GPS2">Saznaj više &raquo;</p>
  </div><!-- /.col-lg-4 -->
  <br>
</div><!-- /.row -->
          <!-- The Modal -->
          <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modalGPS">
              <span class="close">&times;</span>
              <p><strong>Ljekarnička jedinica I</strong></p>
              <p>Sv.L.B.Mandića 206, 31000 Osijek</p>
              <div class="mapouter">
                <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ul.%20Svetog%20Leopolda%20Bogdana%20Mandi%C4%87a%20206,%2031000,%20Osijek&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>    
                </div>
              </div>
            </div>
          </div>
          <!-- The Modal -->
          <div id="myModal2" class="modal2">
            <!-- Modal content -->
            <div class="modalGPS2">
              <span class="close2">&times;</span>
              <p><strong>Ljekarnička jedinica II</strong></p>
              <p>Kralja Petra Svačića 6b, 31000 Osijek</p>
              <div class="mapouter">
                <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ul.%20kralja%20Petra%20Sva%C4%8Di%C4%87a%206b,%2031000,%20Osijek&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
              </div>
            </div>
            </div>

          </div>
  </div>  
  </main>
  <?php include_once "include/footer.php"?>
  </body>
</html>