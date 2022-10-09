var messages = document.querySelector('.messages');
var input = document.querySelector('.compose textarea');

input.addEventListener('keypress', function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    var newEl = document.createElement('li');
    newEl.innerHTML = input.value;
    messages.appendChild(newEl);
    // input.className = 'shift';
    input.value = '';
    messages.className = 'messages move';
  }
})

messages.addEventListener('animationend', function() {
  messages.className = 'messages';
})