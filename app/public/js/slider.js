let slide = new Array['app/public/img/sm40k.png','app/public/img/spacewolf40k.jpg',
'app/public/img/ork40k.jpg'];
let number = 0;

function ChangeSlide(direction) {
    number = number + direction;
    if (number < 0)
        number = slide.length - 1;
    if (number > slide.length - 1)
        number = 0;
    document.getElementById("slide").src = slide[number];
}