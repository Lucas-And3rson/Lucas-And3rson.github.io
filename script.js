function w3_open() {
    var x = document.getElementById("menuLateral");
    x.style.width = "20%";
    x.style.backgroundColor = "rgb(5, 1, 32)";
    x.style.color = "white";
    x.style.fontSize = "10px";
    x.style.paddingTop = "1%";
    x.style.display = "block";
  }
  function w3_close() {
    document.getElementById("menuLateral").style.display = "none";
  }
  