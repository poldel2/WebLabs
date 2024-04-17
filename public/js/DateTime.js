function updateDateTime() {

  var currentDate = new Date();
  var options = {
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric',
    day: 'numeric',
    month: 'short',
    year: '2-digit'
  };
  var formattedDateTime = currentDate.toLocaleDateString('ru-RU', options);

  $('#datetime').html(formattedDateTime);
}

setInterval(updateDateTime, 1000);