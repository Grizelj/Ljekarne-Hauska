$(document).ready(function() {
    $('#example').DataTable();
} );

$('.confirmation').on('click', function () {
    return confirm('Are you sure?');
});