function increment(button) {
    var display = button.parentNode.querySelector('.display');
    var currentValue = parseInt(display.textContent);
    display.textContent = currentValue + 1;
    console.log(display);
}

function decrement(button) {
    var display = button.parentNode.querySelector('.display');
    var currentValue = parseInt(display.textContent);
    if (currentValue > 0) {
        display.textContent = currentValue - 1;
        console.log(display);
    }
}
