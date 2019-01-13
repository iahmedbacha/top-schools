$(document).ready(function(){
    $("#table").DataTable({
      "paging": false,
      "searching": false,
      "info": false
    });
    $("#search-input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    feather.replace({ class: 'feather-icon'});
  });