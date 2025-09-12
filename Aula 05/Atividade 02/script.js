class AverageCalculator {
    constructor(element, totalElement) {
        this.element = element;
        this.totalElement = totalElement;
    }

    calculatorAverage() {
        let total = 0;
        let count = 0;

        this.element.forEach(element => {
            const value = parseFloat(element.textContent);

            if (!isNaN(value)) {
                total += value;
                count++;
            }
        });

        if (count === 0) return "0.00";

        return (total / count).toFixed(2);
    }

    displayCalculator() {
        this.totalElement.textContent = this.calculatorAverage();
    }
}

function calcularMediasColunas() {
    for (let i = 1; i < 10; i++) {
        const selectors = document.querySelectorAll(`#boletim .column0${i}`);
        const result = document.querySelector(`.columnTotal0${i}`);

        const columnAvg = new AverageCalculator(selectors, result);
        columnAvg.displayCalculator();
    }
}

function calcularMediasLinhas() {
    const numberOfStudents = 6;

    for (let i = 1; i <= numberOfStudents; i++) {
        const studentRow = document.getElementById(`aluno-0${i}`);
        const studentGrades = studentRow.querySelectorAll('td[class^="column"]');
        const studentTotalElement = studentRow.querySelector(`.columnTotalRight0${i}`);

        const studentAvg = new AverageCalculator(studentGrades, studentTotalElement);
        studentAvg.displayCalculator();
    }
}

document.getElementById("btnToggleLinha").addEventListener("click", () => {
    const linhaMedias = document.getElementById("linhaMedias");

    if (linhaMedias.style.display === "none" || linhaMedias.style.display === "") {
        calcularMediasColunas();
        linhaMedias.style.display = "table-row";
    } else {
        linhaMedias.style.display = "none";
    }
});

document.getElementById("btnToggleColuna").addEventListener("click", () => {
    const colunas = document.querySelectorAll('[class^="columnTotalRight"]');
    const header = document.getElementById("mediaAlunoHeader");

    if (colunas[0].style.display === "none" || colunas[0].style.display === "") {
        calcularMediasLinhas();
        colunas.forEach(coluna => coluna.style.display = "table-cell");
        header.style.display = "table-cell";
    } else {
        colunas.forEach(coluna => coluna.style.display = "none");
        header.style.display = "none";
    }
});

