require('./bootstrap');


var $ = require( "jquery" );

$(document).ready(function () {
  $('.button_icon').mouseenter(function() {
    $(this).toggle();
  });
  $('.button_icon').mouseleave(function() {
    $(this).toggle();
  });
  // $('.fa-user-ninja').fadeOut(2000);
});
