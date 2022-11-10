//Navigation bar animation (transition)
const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');

if (bar) {
  bar.addEventLister('click', () => {
    nav.classList.add('active');
  })
}

if (close) {
  close.addEventLister('click', () => {
    nav.classList.remove('active');
  })
}
