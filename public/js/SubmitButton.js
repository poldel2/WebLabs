$('button[type="submit"]').on('click', function(event) {
    var form = $('form');
    var formFields = form.find('input, textarea, select');
    var hasEmptyFields = false;
  
    formFields.each(function() {
      var field = $(this);
      if (field.attr('type') === 'radio') {
        var radioGroup = form.find('input[name="' + field.attr('name') + '"]:checked');
        if (radioGroup.length === 0) {
          field.focus();
          hasEmptyFields = true;
        }
      } else if (field.val().trim() === '') {
        hasEmptyFields = true;
        field.focus();
      }
    });
  
    if (hasEmptyFields) {
      event.preventDefault();
      alert('Пожалуйста, заполните все поля формы.');
    }
  });