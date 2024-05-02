<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operation = $_POST['operation'];

    // Initialize the result variable
    $result = 0;

    // Perform the calculation based on the operation
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Arithmetic Calculator</title>
</head>
<body>
    <h1>Arithmetic Calculator</h1>
    <form method="post">
        <input type="number" name="number1" id="number1" required placeholder="Enter first number">
        <input type="number" name="number2" id="number2" required placeholder="Enter second number">

        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Display the result
        echo "<h2>Result: $result</h2>";
    }
    ?>

</body>
</html>
