
$(".modal-dialog").hide();


$(document).ready(function(){
$(".linkconnect").click(function(e){
  $(".modal-dialog").fadeIn();
  $(".modal-main").show();
});
});


$(document).ready(function(){
$('.modal-dialog').click(function(){
  $(this).fadeOut();
});
});
