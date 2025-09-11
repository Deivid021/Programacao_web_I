const inputColumn01 = document.querySelectorAll("#boletim .column01")


inputColumn01.forEach(valor => {
    total += parseFloat(valor.textContent);
});

total = (total / 5); 

document.querySelector(".columnTotal01").textContent = total.toFixed(2);

    class AverageCalculator {
            constructor(selector, selectorTotal) {
                element = document.querySelectorAll(selector)
                totalElement = document.querySelectorAll(selectorTotal)
            }

        calculatorAverage() {
            let total = 0;
            this.element.forEach(this.element => {
            total += document.(this.element)
            });

            total = total / this.element.length();
            return toFixed(2);
        }

        displayCalculator() {
            
        }
    }