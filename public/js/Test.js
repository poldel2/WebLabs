document.getElementById("TestForm").addEventListener("submit", function(event) {
    var numberInput = document.getElementById("Question1");
    var numberValue = parseFloat(numberInput.value.trim());
  
    if (isNaN(numberValue)) {
      event.preventDefault();
      alert("Поле с задачей должно содержать в ответе вещественное число. ");
      numberInput.focus();
      return;
    }

  });