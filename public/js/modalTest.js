var modal = document.getElementById("myModal");

// Получите кнопку, которая открывает модальное окно
var btn = document.getElementById("myBtn");

// Получите элемент <span>, который закрывает модальное окно
var span = document.getElementsByClassName("close")[0];

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function() {
  modal.style.display = "none";
}

// Когда пользователь щелкает в любом месте за пределами модального окна, закройте его
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}