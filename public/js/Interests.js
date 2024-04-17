/* jshint esversion: 6 */

function createList(name, liName, ...items) {
  var p = document.createElement("p");
  var link = document.createElement("a");
  link.textContent = name;
  link.href = liName;
  p.appendChild(link);
  
  var ul = document.createElement("ul");
  i = 0;
  items.forEach(function (item, i) {
    var li = document.createElement("li");
    var a = document.createElement("a");
    a.textContent = item;
    a.href = liName + (i + 1);
    li.appendChild(a);
    ul.appendChild(li);
  });
  
  p.appendChild(ul);
  return p;
}

var container = document.querySelector(".links");
var hobbies = createList("Мое хобби", "#hobby","Шахматы", "Программирование");
var books = createList("Мои любимые книги", "#book","1984", "Мастер и Маргарита");
var musics = createList("Моя любимая музыка", "#music","Bohemian Rhapsody", "Shape of you");
var films = createList("Мои любимые фильмы", "#movie","Побег из Шоушенка", "Зеленая миля");

container.appendChild(hobbies);
container.appendChild(books);
container.appendChild(musics);
container.appendChild(films);

var menu = document.querySelector(".links");

document.addEventListener("mousemove", function (event) {
  var mouseX = event.pageX; 
  var windowWidth = window.innerWidth; 

  if (mouseX > windowWidth - 200) {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});