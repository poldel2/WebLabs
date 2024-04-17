var fotos = ["cat.jpg", "cat2.jpg", "cat3.jpg", "cat4.jpg", "cat5.jpg", "cat6.jpg", 
"cat7.jpg", "cat8.jpg", "cat9.jpg", "cat10.jpg", "cat11.jpg", "cat12.jpg", "cat13.jpg", "cat14.jpg", "cat15.jpg"];

var titles = ["Пышный я", "Лежащий я", "Я на полу", "Я с заколкой", "Прыгающий я", "Я уставший", "Внимательный я",
"Я на паспорт","Я угрюмый","Я с семьей","Я делаю уроки","Я только проснулся","Я обиженный","Я в шоке","Я во время удара в 10000 вольт",];

var table = document.querySelector("table");

for (var i = 0; i < fotos.length; i++) {
  if (i % 3 === 0) {
    var row = document.createElement("tr");
  }

  var imgCell = document.createElement("td");
  var img = document.createElement("img");
  img.src = fotos[i];
  img.alt = "Фото " + (i + 1);
  img.classList.add("img-cell");

  var tooltipSpan = document.createElement("span");
  tooltipSpan.classList.add("tooltiptext");
  tooltipSpan.textContent = titles[i];
  imgCell.appendChild(tooltipSpan);

  imgCell.appendChild(img);
  imgCell.addEventListener("mouseenter", showTitle);
  imgCell.addEventListener("mouseleave", hideTitle);
  imgCell.addEventListener("click", createPhotoViewer.bind(null, i));

  if (i % 3 === 0) {
    var titleRow = document.createElement("tr");
  }
  var titleCell = document.createElement("td");
  titleCell.textContent = titles[i];
  titleRow.appendChild(titleCell);

  row.appendChild(imgCell);

  table.appendChild(row);
  table.appendChild(titleRow);
}

function showTitle() {
  var tooltipSpan = this.querySelector(".tooltiptext");
  console.log("Наведен курсор на фотографию " + tooltipSpan.textContent);
  tooltipSpan.style.visibility = "visible";
  tooltipSpan.style.opacity = 1;
  tooltipSpan.style.transform = "translateX(-50%)";
}

function hideTitle() {
  var tooltipSpan = this.querySelector(".tooltiptext");
  tooltipSpan.style.visibility = "hidden";
}
