<!-- eval-kalkulator.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Eval</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #ffffff; /* putih */
            font-family: Arial, sans-serif;
        }
        .calculator {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .display {
            background: #fff;
            color: #333;
            font-size: 2em;
            padding: 15px;
            text-align: right;
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            min-height: 40px;
            overflow-x: auto;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 70px);
            grid-gap: 10px;
        }
        button {
            padding: 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            background: #e6e6e6;
            color: #333;
            transition: 0.2s;
        }
        button:hover {
            background: #d9d9d9;
        }
        .operator {
            background: #4da6ff;
            color: #fff;
            font-weight: bold;
        }
        .operator:hover {
            background: #3399ff;
        }
        .equal {
            grid-column: span 2;
            background: linear-gradient(to right, #4da6ff, #80ccff);
            color: #fff;
            font-weight: bold;
        }
        .equal:hover {
            background: linear-gradient(to right, #3399ff, #66b3ff);
        }
    </style>
</head>
<body>

<div class="calculator">
    <form method="post">
        <div class="display" id="display">
            <?php
            if (isset($_POST['expression'])) {
                $exp = $_POST['expression'];
                // hanya izinkan angka dan operator dasar
                if (preg_match('/^[0-9+\-.*\/() ]+$/', $exp)) {
                    try {
                        eval("\$result = $exp;");
                        echo $result;
                    } catch (Throwable $e) {
                        echo "Error";
                    }
                } else {
                    echo "Invalid";
                }
            } else {
                echo "0";
            }
            ?>
        </div>
        <div class="buttons">
            <button type="submit" name="expression" value="">C</button>
            <button type="submit" name="expression" value="(">(</button>
            <button type="submit" name="expression" value=")">)</button>
            <button class="operator" type="submit" name="expression" value="/">÷</button>

            <button type="submit" name="expression" value="7">7</button>
            <button type="submit" name="expression" value="8">8</button>
            <button type="submit" name="expression" value="9">9</button>
            <button class="operator" type="submit" name="expression" value="*">×</button>

            <button type="submit" name="expression" value="4">4</button>
            <button type="submit" name="expression" value="5">5</button>
            <button type="submit" name="expression" value="6">6</button>
            <button class="operator" type="submit" name="expression" value="-">−</button>

            <button type="submit" name="expression" value="1">1</button>
            <button type="submit" name="expression" value="2">2</button>
            <button type="submit" name="expression" value="3">3</button>
            <button class="operator" type="submit" name="expression" value="+">+</button>

            <button style="grid-column: span 2;" type="submit" name="expression" value="0">0</button>
            <button type="submit" name="expression" value=".">.</button>
            <button class="equal" type="submit" name="expression" value="<?php echo isset($exp) ? $exp : ''; ?>">=</button>
        </div>
    </form>
</div>

</body>
</html>
