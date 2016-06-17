$(document).ready(function() {
    $("#appt").click(function(e){
      $(".jumbotron").fadeOut(1200);
      $("#content").animate({
        "top": "-=20px" }, "slow");
  });
});
