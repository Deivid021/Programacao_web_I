const inputColumn01 = document.querySelectorAll("#boletim .column01")

let total = 0;

inputColumn01.forEach(valor => {
    total += parseFloat(valor.textContent);
});

total = (total / 5); 

document.querySelector(".columnTotal01").textContent = total.toFixed(2);