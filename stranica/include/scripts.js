function login() {
  window.location.pathname = "Ljekarne-Hauska/stranica/login.php";
}

function odjava() {
  window.location.pathname = "Ljekarne-Hauska/stranica/odjava.php";
}
// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("registerForm");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}

// Get the modal
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn4 = document.getElementById("registerFormLijek");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}

// Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
  "searching": true // false to disable search (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
  });


  function povratak() {
    window.location.pathname = "stranica/naslovna.php";
  }

$('.confirmation').on('click', function () {
    return confirm('Are you sure?');
});