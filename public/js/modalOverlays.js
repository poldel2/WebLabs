$(document).ready(function() {
    $('#submitButton').click(function() {
        event.preventDefault();
      $('#modalOverlay').fadeIn();
    });
  
    $('#modalNo, #modalOverlay').click(function() {
        event.preventDefault();
      $('#modalOverlay').fadeOut();
    });
  
    $('#modalWindow').click(function(event) {
      event.stopPropagation();
    });
  
    $('#modalYes').click(function() {
        $('#modalOverlay').fadeOut();
    });
  });