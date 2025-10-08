<?php

echo "<h2>1. Introduce Yourself</h2>";
$name = "Jake";
$age = 23;
$favorite_color = "Black";
echo "Hi, I'm $name, I am $age years old, and my favorite color is $favorite_color.<br><br>";

echo "<h2>2. Simple Math</h2>";
$a = 10;
$b = 2;

echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";

echo "<h2>3. Area and Perimeter of a Rectangle</h2>";
$length = 10;
$width = 5;

echo "Area: " . ($length * $width) . "<br>";
echo "Perimeter: " . (2 * ($length + $width)) . "<br>";

echo "<h2>4. Temperature Converter</h2>";
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
echo $celsius . "°C is equal to " . $fahrenheit . "°F.<br><br>";

echo "<h2>5. Swapping Variables</h2>";
$a = 5;
$b = 10;
echo "Before Swap: a = $a, b = $b<br>";
$temp = $a;
$a = $b;
$b = $temp;
echo "After Swap: a = $a, b = $b<br><br>";

echo "<h2>6. Salary Calculator</h2>";
$basic_salary = 50000;
$allowance = 10000;
$deduction = 5000;
$net_salary = $basic_salary + $allowance - $deduction;
echo "For a basic salary of $basic_salary, allowance of $allowance, and deduction of $deduction:<br>";
echo "Net Salary = $net_salary<br><br>";

echo "<h2>7. Simple BMI Calculator (Metric)</h2>";

$weight = 70;  // in kilograms
$height = 1.75; // in meters

$bmi = $weight / ($height * $height);

echo "Given weight = $weight kg and height = $height m:<br>";
echo "Your BMI is: " . number_format($bmi, 2) . "<br>";

echo "<h2>8. String Manipulation</h2>";
$sentence = "Hello, how are you?";
echo "Sentence: \"$sentence\"<br>";
echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence) . "<br><br>";

echo "<h2>9. Bank Account Simulation</h2>";
$balance = 1000;
$deposit = 200;
$withdraw = 150;
echo "Initial balance: $balance<br>";
echo "Depositing: $deposit<br>";
echo "Withdrawing: $withdraw<br>";
$balance += $deposit; // Adding deposit
$balance -= $withdraw; // Deducting withdrawal
echo "Updated Balance: $balance<br><br>";
?>