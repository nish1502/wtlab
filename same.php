<?php
// Initialize variables to hold the form data
$name = $email = $contact = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact No:</label><br>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Display the submitted data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Your Input:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Contact No: " . $contact;
    }
    ?>

</body>
</html>
