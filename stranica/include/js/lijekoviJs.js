var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

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

$(document).ready(function() {
    $("#newNote").click(function() {
      $("#notesForm").show('slow', function() {
        $("#button").show('slow');
        $("#newNote").hide('slow');
      });
    });
    $("#button").click(function() {
      $("#newNote").show('slow');
      $("#notesForm").hide('slow');
      $("#button").hide('slow');
      var toAdd = $('input[name=pastorName]').val();
      var notes = $('textarea[name=notes]').val();
      var dt = new Date();
      var date = dt.toDateString();
      $(".list").append('<div class="item">' + toAdd + '<br/>' + date + '<br/>' + notes + '<br/><button type="button" class="btn btn-primary" id="edit">Edit</button><button type="button" class="btn btn-danger" id="delete">Delete</button>' + '</div>');
    });
    $(document).on('click', '#delete', function() {
      $('.item').hide('fast', function() {
        $('.item').remove();
      });
    });
  });