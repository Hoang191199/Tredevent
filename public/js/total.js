//    Tính tiền
var decrement = document.getElementsByClassName('minus');
var increment = document.getElementsByClassName('plus');

for(var i = 0; i < increment.length; i++){
    var button = increment[i];
    button.addEventListener('click', function(event) {
        var buttonClick = event.target;
        var input = buttonClick.parentElement.children[2];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) + 1;
        input.value = newValue;
    })
}

for(var i = 0; i < decrement.length; i++){
    var button = decrement[i];
    button.addEventListener('click', function(event) {
        var buttonClick = event.target;
        var input = buttonClick.parentElement.children[2];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) - 1;

        if(newValue >= 0) {
            input.value = newValue;
        }
        else {
            input.value = 0;
        }
    })
}