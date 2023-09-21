let open = document.querySelector('#btn-menu');
let close = document.querySelector('.btn-close');
let menu = document.querySelector('.menu');

open.addEventListener('click', function() {
  menu.style.display = 'block';
});

close.addEventListener('click', function() {
  menu.style.display = 'none';
});