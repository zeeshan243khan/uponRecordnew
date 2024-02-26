var button = document.getElementById('myButton');
var box = document.getElementById('box');

// Add a mouseover event listener to the button
button.addEventListener('mouseover', function() {

  box.style.display = 'block';
});

button.addEventListener('mouseout', function() {
  box.style.display = 'none';
});
// toggle hover
function toggleButtonClick(button) {
    // Toggle the 'clicked' class on the button
    button.classList.toggle('clicked');
}