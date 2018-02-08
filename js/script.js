$(document).ready(function() {
  // Form validation
  $('#sign-up').validate();


  $("#submit").click( function() {
   $.post( $("#sign-up").attr("action"),
           $("#sign-up :input").serializeArray(),
           function(info){ $("#results").html(info);
    });
  });

  $("#sign-up").submit( function() {
    return false;
  });

  $('#submit').on('click', function () {
      $("form").trigger("reset");
  });

})
