let siliderWrap = document.querySelector('.img-conteiner');
let slider = document.querySelector('.slider-conteiner');
let clones = [];

let items = [...document.querySelectorAll('.slider-img')];
let images = [...document.querySelectorAll('.img-div')];

images.forEach((image, idx)=>{
    image.style.backgroundImage = `url(./img/${idx+1}.jpg)`
})

items.forEach(item=>{
    let clone = item.cloneNode(true);
    clone.classList.add('clone');
    slider.appendChild(clone);
    clones.push(clone);
})

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