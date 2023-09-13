function factorial(n) {
    if (n === 0) {
        return 1;
    }
    return n * factorial(n - 1);
}

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("submitbutton");
    const resultElement = document.getElementById("result");
    const numberInput = document.getElementById("numberInput");

    button.addEventListener("click", function () {
        const input = parseInt(numberInput.value);

        if (!isNaN(input) && input >= 0) {
            const result = factorial(input);
            resultElement.innerText = `The factorial of ${input} is equal to ${result}`;
        } else {
            resultElement.innerText = "Please enter a non-negative number.";
        }
    });
});
