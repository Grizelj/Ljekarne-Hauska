<!doctype html>
<html lang="en" class="h-100">
  <head>
    <?php include_once "include/head.php"?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" type="text/css" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.5.1/basic/ckeditor.js"></script>
  </head>
  <body>
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <?php include_once "include/izbornik.php" ?>

  <div class="row">
      <div class="col-lg-3" style="text-align: center;">
      <h2>Notes</h2>
        <button class="btn btn-outline-dark me-2" id="newNote">New Note</button>
        <form style="display: none;" name="notesForm" id="notesForm">
            <input class="form-control" type="text" name="pastorName" placeholder="Pastor Name" /> 
            <textarea class="form-control" style="width:100%;" maxlength="500" name="notes" id="notes" cols="50" rows="10" placeholder="Notes">
            </textarea>
        </form>
        <br/>
        <div style="display: none;" class="btn btn-secondary" id="button">
            Add!
        </div><br/>
        <div class="list"></div>
      </div>
      <div class="col-lg-6" style="height: 10%">
      <h2 style="text-align:center">Galerija lijekova</h2>
          <div class="container">
            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
              <img src="img/slikeWeb/aspirin.jpg" style="width:100%" id="bigPicture">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 6</div>
              <img src="img/slikeWeb/brufen.jpg" style="width:100%" id="bigPicture">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 6</div>
              <img src="img/slikeWeb/ibubrofen-belupo.jpg" style="width:100%" id="bigPicture">
            </div>
              
            <div class="mySlides">
              <div class="numbertext">4 / 6</div>
              <img src="img/slikeWeb/lekadol.jpg" style="width:100%" id="bigPicture">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
              <img src="img/slikeWeb/neofen.jpg" style="width:100%" id="bigPicture">
            </div>
              
            <div class="mySlides">
              <div class="numbertext">6 / 6</div>
              <img src="img/slikeWeb/paracetamol.jpg" style="width:100%" id="bigPicture">
            </div>
              
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <br>

            <div class="row" id="slajdovi">
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/aspirin.jpg" style="width:100%" onclick="currentSlide(1)" alt="Aspirin">
              </div>
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/brufen.jpg" style="width:100%" onclick="currentSlide(2)" alt="Brufen">
              </div>
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/ibubrofen-belupo.jpg" style="width:100%" onclick="currentSlide(3)" alt="Ibubrofen belupo">
              </div>
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/lekadol.jpg" style="width:100%" onclick="currentSlide(4)" alt="Lekadol">
              </div>
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/neofen.jpg" style="width:100%" onclick="currentSlide(5)" alt="Neofen">
              </div>    
              <div class="column col-lg-2">
                <img class="demo cursor" src="img/slikeWeb/paracetamol.jpg" style="width:100%" onclick="currentSlide(6)" alt="Paracetamol">
              </div>
            </div>
          </div>
      </div>
  <script>
    <?php include_once "include/js/lijekoviJs.js"?>
  </script>
  
  <?php include_once "include/footer.php"?>
</div>  
  </body>
</html>