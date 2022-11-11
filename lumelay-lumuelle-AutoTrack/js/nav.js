//Navigation bar animation (transition)

let burger = document.querySelector('#bar');
let navbar = document.querySelector('#navbar');

document.querySelector('#bar').onclick = () =>{
  burger.classList.toggle('active');
  navbar.classList.toggle('active');
  close.classList.remove('active');
}

//for close button

let close = document.querySelector('#close');

document.querySelector('#close').onclick = () =>{
  close.classList.toggle('active');
  burger.classList.remove('active');
  navbar.classList.remove('active');
}
