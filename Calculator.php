<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expression'])) {
    $expression = $_POST['expression'];

    // Sanitize input: allow digits, spaces, and basic operators
    if (preg_match('#^[0-9+\-*/().% ]+$#', $expression)) {
        ob_start();
        try {
            $result = eval("return $expression;");
            ob_end_clean();
            if ($result === false) {
                echo "Invalid Expression";
            } else {
                echo $result;
            }
        } catch (Throwable $e) {
            ob_end_clean();
            echo "Calculation Error";
        }
        exit;
    } else {
        echo "Invalid Expression";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Digital Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .calculator {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            width: 280px;
        }
        .display {
            background: #000;
            color: #0f0;
            font-size: 2em;
            text-align: right;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            height: 50px;
            overflow-x: auto;
            word-wrap: break-word;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        button {
            padding: 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            background-color: #444;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #666;
        }
        .equal {
            grid-column: span 2;
            background-color: #28a745;
        }
    </style>
</head>
<body>
<div class="calculator">
    <div class="display" id="display">0</div>
    <div class="buttons">
        <button onclick="press('7')">7</button>
        <button onclick="press('8')">8</button>
        <button onclick="press('9')">9</button>
        <button onclick="press('/')">/</button>

        <button onclick="press('4')">4</button>
        <button onclick="press('5')">5</button>
        <button onclick="press('6')">6</button>
        <button onclick="press('*')">*</button>

        <button onclick="press('1')">1</button>
        <button onclick="press('2')">2</button>
        <button onclick="press('3')">3</button>
        <button onclick="press('-')">-</button>

        <button onclick="press('0')">0</button>
        <button onclick="press('.')">.</button>
        <button onclick="calculate()" class="equal">=</button>
        <button onclick="press('+')">+</button>

        <button onclick="press('%')">%</button>
        <button onclick="clearDisplay()" style="grid-column: span 3; background-color: #dc3545;">C</button>
    </div>
</div>

<script>
    let display = document.getElementById('display');
    let currentInput = '';

    function press(val) {
        if (display.innerText === '0' || display.innerText === 'Invalid Expression' || display.innerText === 'Calculation Error' || display.innerText === 'Error') {
            currentInput = val;
        } else {
            currentInput += val;
        }
        display.innerText = currentInput;
    }

    function calculate() {
        fetch(window.location.href, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'expression=' + encodeURIComponent(currentInput)
        })
        .then(res => res.text())
        .then(result => {
            display.innerText = result;
            currentInput = result;
        })
        .catch(() => {
            display.innerText = 'Error';
            currentInput = '';
        });
    }

    function clearDisplay() {
        currentInput = '';
        display.innerText = '0';
    }
</script>
</body>
</html>