const imageopen = document.getElementById('notify');
const imageclose = document.getElementById('Return');

const popup = document.getElementById('popup');

imageopen.addEventListener("click", function() {
    popup.style.display = "flex";
});

imageclose.addEventListener("click", function() {
    popup.style.display = "none";
});