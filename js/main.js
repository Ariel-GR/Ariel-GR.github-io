function closeFuction(x) {
    x.classList.toggle("change");
}

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  let itemsAbout = [...document.querySelectorAll('.imgDuo')];
  let imagesAbout = [...document.querySelectorAll('.img-cont')];
  
  imagesAbout.forEach((imagesAbout, idx)=>{
      imagesAbout.style.backgroundImage = `url(./img/trabajo${idx+1}.jpg)`
  })