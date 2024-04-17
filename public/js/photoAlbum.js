$(document).ready(function() {
  var currentIndex = 0;

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

  function createPhotoViewer(index) {
    var fotos = Array.from(document.querySelectorAll(".img-cell")).map(img => img.src);
    var titles = Array.from(document.querySelectorAll(".tooltiptext")).map(span => span.textContent);

    currentIndex = index;

    var popup = $("<div class='popup'></div>");
    var img = $("<img>")
      .attr("src", fotos[index])
      .attr("alt", "Большая фотография");

    var closeBtn = $("<div class='close-btn'>×</div>");

    var caption = $("<div class='caption'></div>")
      .text("Фото " + (index + 1) + " из " + fotos.length);
    var title = $("<div class='title'></div>")
      .text(titles[index]);

    var prevBtn = $("<div class='prev-btn'>❮</div>");
    var nextBtn = $("<div class='next-btn'>❯</div>");

    popup.append(closeBtn);
    popup.append(img);
    popup.append(title);
    popup.append(caption);
    popup.append(prevBtn);
    popup.append(nextBtn);

    $("body").append(popup);

    closeBtn.on("click", function() {
      popup.remove();
    });

    prevBtn.on("click", function() {
      currentIndex = (currentIndex - 1 + fotos.length) % fotos.length;
      img.attr("src", fotos[currentIndex]);
      caption.text("Фото " + (currentIndex + 1) + " из " + fotos.length);
      title.text(titles[currentIndex]);
    });

    nextBtn.on("click", function() {
      currentIndex = (currentIndex + 1) % fotos.length;
      img.attr("src", fotos[currentIndex]);
      caption.text("Фото " + (currentIndex + 1) + " из " + fotos.length);
      title.text(titles[currentIndex]);
    });
  }

  var imgCells = document.querySelectorAll(".img-cell");
  imgCells.forEach((imgCell, index) => {
    imgCell.addEventListener("mouseenter", showTitle);
    imgCell.addEventListener("mouseleave", hideTitle);
    imgCell.addEventListener("click", createPhotoViewer.bind(null, index));
  });
});
