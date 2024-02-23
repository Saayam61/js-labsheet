function fact() {
    var num = parseInt(document.getElementById('fac').value);
    var result;

    if (num<0) {
        result = "Please enter a valid number.";
    } else {
        result = factorial(num);
    }

    document.getElementById('res').innerHTML = result;
}

function factorial(n) {
    if (n === 0 || n === 1) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}