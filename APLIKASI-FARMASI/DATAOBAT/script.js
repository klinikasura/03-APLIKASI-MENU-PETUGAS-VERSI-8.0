let prevNumber = '';
let calculationOperator = '';
let currentNumber = '0';

const numbers = document.querySelectorAll(".number");
const calculatorScreen = document.querySelector('.calculator-screen');
const operators = document.querySelectorAll(".operator");
const equalSign = document.querySelector('.equal-sign');
const clearBtn = document.querySelector('.all-clear');
const decimal = document.querySelector('.decimal');

const clearAll = () => {
    prevNumber = '';
    calculationOperator = '';
    currentNumber = '0';
}

clearBtn.addEventListener('click', () => {
    clearAll();
    updateScreen(currentNumber);
});

const inputNumber = (number) => {
    if (currentNumber === '0') {
        currentNumber = number;
    } else {
        currentNumber += number;
    }
}

inputDecimal = (dot) => {
    if (currentNumber.includes('.')) {
        return;
    }
    currentNumber += dot;
}

const inputOperator = (operator) => {
    if (calculationOperator === '') {
        prevNumber = currentNumber;
    }
    calculationOperator = operator;
    currentNumber = '0';
}

const updateScreen = (number) => {
    calculatorScreen.value = number;
}

decimal.addEventListener('click', (event) => {
    inputDecimal(event.target.value);
    updateScreen(currentNumber);
});


operators.forEach((operator) => {
    operator.addEventListener("click", (event) => {
        inputOperator(event.target.value);
    });
});

numbers.forEach((number) => {
    number.addEventListener("click", (event) => {        
        inputNumber(event.target.value);
        updateScreen(currentNumber);
        
    });
});

const calculate = () => {
    let result = '';
    switch(calculationOperator) {
        case "+":
            result = parseFloat(prevNumber) + parseFloat(currentNumber);
            break;
        case "-":
            result = parseFloat(prevNumber) - parseFloat(currentNumber);
            break;
        case "*":
            result = parseFloat(prevNumber) * parseFloat(currentNumber);
            break;
        case "/":
            result = parseFloat(prevNumber) / parseFloat(currentNumber);
            break;
        default:
            return;
    }
    currentNumber = result;
    calculationOperator = '';
}

equalSign.addEventListener('click', () => {
    calculate();
    updateScreen(currentNumber);
});


