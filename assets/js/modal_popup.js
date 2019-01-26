// $(window).load(function(){        
//   $('#myModal').modal('show');
//    });


// A $( document ).ready() block.
$( document ).ready(function() {
  if (document.cookie.indexOf('visited=true') === -1){
    // load the overlay
    
    $("#popup").fadeIn(1000);
    $('#popup').modal({show:true});
    var minutes = 1000*30;
    var expires = new Date((new Date()).valueOf() + minutes);
    document.cookie = "visited=true;expires=" + expires.toUTCString();

  }
    $("#close").on("click", function (e) {
        e.preventDefault();
    });
});

//$(document).ready(function () {
//
//    //select the POPUP DIV and show it
//    $("#popup").hide().fadeIn(1000);
//
//    //close the POPUP buuton  if the button with id="close" is clicked
//    $("#close").on("click", function (e) {
//        e.preventDefault();
//        $("#popup").fadeOut(1000);
//    });
//
//});
