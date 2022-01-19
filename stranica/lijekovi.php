<!doctype html>
<html lang="en" class="h-100">

<head>
  <?php include_once "include/head.php" ?>

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
        <?php include_once "include/js/lijekoviJs.js" ?>
      </script>

      <?php include_once "include/footer.php" ?>
    </div>
    <div class="row">
      <div class="col-lg-12" style="text-align: center;">
        <div class="row" id="gallery">
          <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="/image-1">
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="/image-2">
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="/image-3">
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <img class="w-100" src="/image-4">
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="/image-1.jpg" data-target="#carouselExample" data-slide-to="0">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="/image-2.jpg" data-target="#carouselExample" data-slide-to="1">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="/image-3.jpg" data-target="#carouselExample" data-slide-to="2">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="/image-4.jpg" data-target="#carouselExample" data-slide-to="3">
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/image-1.jpg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/image-2.jpg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/image-3.jpg">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/image-4.jpg">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script>
        var ckEditorID;

                ckEditorID = 'notes';

                function fnConsolePrint() {
                  //console.log($('#' + ckEditorID).val());
                  console.log(CKEDITOR.instances[ckEditorID].getData());
                }
                CKEDITOR.config.forcePasteAsPlainText = true;
                CKEDITOR.replace(ckEditorID, {
                  toolbar: [{
                    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                  }, {
                    items: ['Format']
                  }, {
                    items: ['Link', 'Unlink']
                  }, {
                    items: ['Indent', 'Outdent', '-', 'BulletedList', 'NumberedList']
                  }, {
                    items: ['Undo', 'Redo']
                  }]
                })
    </script>
</body>


</html>