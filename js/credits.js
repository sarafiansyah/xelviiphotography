function alertEmail() {
    alert("Halo! Email saya adalah:\nmahesarafiansyah.412020016@ukrida.civitas.ac.id");
  }
  
  function idnTxt() {
    $("#indolang-profile").fadeIn();
    var x = document.getElementById("indolang-profile");
    var y = document.getElementById("englang-profile");
    x.style.display = "flex";
      y.style.display = "none";
  }
  
  function engTxt() {
    $("#englang-profile").fadeIn();
    var x = document.getElementById("indolang-profile");
    var y = document.getElementById("englang-profile");
    x.style.display = "none";
      y.style.display = "flex";
      
      // document.getElementById("englang-profile").className = "text-light";
  }