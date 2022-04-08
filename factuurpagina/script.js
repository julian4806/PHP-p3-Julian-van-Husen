document.getElementById("progressbar").style.display = "none";

document.getElementById("submit").onclick = function () {
  // Show Progress bar
  document.getElementById("progressbar").style.display = "block";

  // Progress bar
  var timeleft = 10;
  var downloadTimer = setInterval(function () {
    if (timeleft <= 0) {
      clearInterval(downloadTimer);
    }
    document.getElementById("progressbar").value = 10 - timeleft;
    timeleft -= 1;
  }, 1000);

  // Onclick Reload 10s
  setTimeout(function () {
    window.location.href = "../Overzichtspagina/index.php";
  }, 11000);
};

// Als ik alles invul en op betalen klik runt alleen de PHP code. Ik moet dan nog een keer klikken voordat de JavaScript code rerunt wordt. Heel vervelend. Ik heb uren gezocht naar een oplossing maar ik kon er geen vinden. Waarschijnlijk is het iets met PHP wat conflecteert met JavaScript.
