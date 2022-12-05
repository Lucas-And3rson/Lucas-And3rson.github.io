/* Caso queira um menu(abrir/fechar)

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
  
  mostrar e esconder senha-------------------------

  const password = document.getElementById('password')
  const icon = document.getAnimations('icon')

  function showHide(){
    if(password.type == 'password'){
      password.setAttribute('type', 'text')
      icon.classList.add('hide')
    }
    else{
      password.setAttribute('type', 'password')
      icon.classList.remove('hide')
    }
  }

  */

/* Aqui são os comandos da principal(sistema.php) */

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

//click starts avaliação
var stars = document.querySelectorAll('.star-icon');
                  
                  document.addEventListener('click', function(e){
                    var classStar = e.target.classList;
                    if(!classStar.contains('ativo')){
                      stars.forEach(function(star){
                        star.classList.remove('ativo');
                      });
                      classStar.add('ativo');
                      console.log(e.target.getAttribute('data-avaliacao'));
                    }
                  });

// Modo dark

const html = document.querySelector('html');
const icon = document.querySelector('.icon');
const icon2 = document.querySelector('.icon2');


icon.addEventListener('click', () => {
    html.classList.toggle('dark');
})

icon2.addEventListener('click', () => {
    html.classList.remove('dark');
})