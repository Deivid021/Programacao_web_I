    class AverageCalculator {
            constructor(selector, selectorTotal) {
                this.element = document.querySelectorAll(selector)
                this.totalElement = document.querySelector(selectorTotal)
            }

        calculatorAverage() {
            let total = 0;

            this.element.forEach(element => {
            total += parseFloat(element.textContent);
            });

            total = total / this.element.length;
            return total.toFixed(2);
        }

        displayCalculator() {
            this.totalElement.textContent = this.calculatorAverage();
        }
    }

    for (let i = 1; i < 10; i++) {
        const selectors = `#boletim .column0${i}`;
        const result = `.columnTotal0${i}`;

        const avg = new AverageCalculator(selectors, result);
        avg.displayCalculator();
    }