<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; }
        h2 { color: #4a90e2; margin-top: 20px; }
        input { width: 100%; padding: 8px; margin: 5px 0 15px 0; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #4a90e2; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%; }
        .result { background: #f0f8ff; padding: 10px; margin: 10px 0; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Calculator</h1>
        <form method="POST">
            
            <h2>1. Introduce Yourself</h2>
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="color" placeholder="Favorite Color" required>
            <?php
            if ($_POST) {
                echo "<div class='result'>Hi, I'm <b>{$_POST['name']}</b>, I am <b>{$_POST['age']}</b> years old, and my favorite color is <b style='color:{$_POST['color']}'>{$_POST['color']}</b>.</div>";
            }
            ?>

            <h2>2. Simple Math</h2>
            <input type="number" name="num1" placeholder="First Number" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : '10'; ?>">
            <input type="number" name="num2" placeholder="Second Number" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : '2'; ?>">
            <?php
            if ($_POST && isset($_POST['num1']) && isset($_POST['num2'])) {
                $a = $_POST['num1'];
                $b = $_POST['num2'];
                echo "<div class='result'>";
                echo "Sum: <b>" . ($a + $b) . "</b><br>";
                echo "Difference: <b>" . ($a - $b) . "</b><br>";
                echo "Product: <b>" . ($a * $b) . "</b><br>";
                echo "Quotient: <b>" . ($b != 0 ? $a / $b : 'Error') . "</b>";
                echo "</div>";
            }
            ?>

            <h2>3. Rectangle</h2>
            <input type="number" name="length" placeholder="Length" value="<?php echo isset($_POST['length']) ? $_POST['length'] : '10'; ?>">
            <input type="number" name="width" placeholder="Width" value="<?php echo isset($_POST['width']) ? $_POST['width'] : '5'; ?>">
            <?php
            if ($_POST && isset($_POST['length']) && isset($_POST['width'])) {
                $l = $_POST['length'];
                $w = $_POST['width'];
                echo "<div class='result'>Area: <b>" . ($l * $w) . "</b><br>Perimeter: <b>" . (2 * ($l + $w)) . "</b></div>";
            }
            ?>

            <h2>4. Temperature</h2>
            <input type="number" name="celsius" placeholder="Celsius" value="<?php echo isset($_POST['celsius']) ? $_POST['celsius'] : '25'; ?>">
            <?php
            if ($_POST && isset($_POST['celsius'])) {
                $c = $_POST['celsius'];
                $f = ($c * 9/5) + 32;
                echo "<div class='result'>{$c}°C = <b>{$f}°F</b></div>";
            }
            ?>

            <h2>5. Salary</h2>
            <input type="number" name="salary" placeholder="Basic Salary" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : '50000'; ?>">
            <input type="number" name="allowance" placeholder="Allowance" value="<?php echo isset($_POST['allowance']) ? $_POST['allowance'] : '10000'; ?>">
            <input type="number" name="deduction" placeholder="Deduction" value="<?php echo isset($_POST['deduction']) ? $_POST['deduction'] : '5000'; ?>">
            <?php
            if ($_POST && isset($_POST['salary']) && isset($_POST['allowance']) && isset($_POST['deduction'])) {
                $net = $_POST['salary'] + $_POST['allowance'] - $_POST['deduction'];
                echo "<div class='result'>Net Salary: <b>$net</b></div>";
            }
            ?>

            <h2>6. BMI Calculator</h2>
            <input type="number" name="weight" placeholder="Weight (kg)" value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : '70'; ?>" step="0.1">
            <input type="number" name="height" placeholder="Height (m)" value="<?php echo isset($_POST['height']) ? $_POST['height'] : '1.75'; ?>" step="0.01">
            <?php
            if ($_POST && isset($_POST['weight']) && isset($_POST['height'])) {
                $w = $_POST['weight'];
                $h = $_POST['height'];
                $bmi = $w / ($h * $h);
                echo "<div class='result'>Your BMI: <b>" . number_format($bmi, 2) . "</b></div>";
            }
            ?>

            <h2>7. Bank Account Simulation</h2>
            <input type="number" name="balance" placeholder="Initial Balance" value="<?php echo isset($_POST['balance']) ? $_POST['balance'] : '1000'; ?>">
            <input type="number" name="deposit" placeholder="Deposit Amount" value="<?php echo isset($_POST['deposit']) ? $_POST['deposit'] : '200'; ?>">
            <input type="number" name="withdraw" placeholder="Withdraw Amount" value="<?php echo isset($_POST['withdraw']) ? $_POST['withdraw'] : '150'; ?>">
            <?php
            if ($_POST && isset($_POST['balance']) && isset($_POST['deposit']) && isset($_POST['withdraw'])) {
                $balance = $_POST['balance'];
                $deposit = $_POST['deposit'];
                $withdraw = $_POST['withdraw'];
                echo "<div class='result'>";
                echo "Initial Balance: <b>₱" . number_format($balance, 2) . "</b><br>";
                echo "Deposit: <b>+₱" . number_format($deposit, 2) . "</b><br>";
                echo "Withdraw: <b>-₱" . number_format($withdraw, 2) . "</b><br>";
                $balance = $balance + $deposit - $withdraw;
                echo "Updated Balance: <b>₱" . number_format($balance, 2) . "</b>";
                echo "</div>";
            }
            ?>

            <h2>8. String Manipulation</h2>
            <input type="text" name="sentence" placeholder="Enter a sentence" value="<?php echo isset($_POST['sentence']) ? htmlspecialchars($_POST['sentence']) : 'Hello, how are you?'; ?>">
            <?php
            if ($_POST && isset($_POST['sentence'])) {
                $sentence = $_POST['sentence'];
                echo "<div class='result'>";
                echo "Sentence: \"<b>" . htmlspecialchars($sentence) . "</b>\"<br>";
                echo "Characters: <b>" . strlen($sentence) . "</b><br>";
                echo "Words: <b>" . str_word_count($sentence) . "</b><br>";
                echo "Uppercase: <b>" . strtoupper($sentence) . "</b><br>";
                echo "Lowercase: <b>" . strtolower($sentence) . "</b>";
                echo "</div>";
            }
            ?>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>