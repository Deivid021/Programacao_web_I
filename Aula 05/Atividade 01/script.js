const inputNum01 = document.getElementById("num01")
const inputNum02 = document.getElementById("num02")
const inputOper = document.getElementById("oper")
const inputButton = document.getElementById("button")
const inputResult = document.getElementById("resultado")

inputButton.addEventListener("click", function() {

    inputResult.classList.remove("result-negative", "result-positive", "result-zero");

    const num01 = Number(inputNum01.value);
    const num02 = Number(inputNum02.value);
    const oper  = inputOper.value;

    let result;

    switch (oper) {
        case "adicao":
            result = num01 + num02;
            break;
            
        case "subtracao":
            result = num01 - num02;
            break;

        case "multiplicacao":
            result = num01 * num02;
            break;
            
        case "divisao":
            result = num01 / num02;
            break;
    }

    if(result < 0) {
        inputResult.classList.add("result-negative");
    } else if (result > 0) {
        inputResult.classList.add("result-positive");
    } else {
        inputResult.classList.add("result-zero");
    }

    inputResult.value = "Resultado: " + result;

})