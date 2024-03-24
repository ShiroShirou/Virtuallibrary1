<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables and initialize with empty values
    $username = $email = $password = "";

    // Process and sanitize form data
    $username = sanitize_input($_POST["username"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Validate input
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Perform further validation if needed

        // Now you can insert the data into your database or perform other actions
        // For demonstration purposes, we'll just display the submitted data
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        // You should hash the password before storing it in your database
        // For simplicity, we'll just display the password (not recommended in production)
        echo "Password: " . $password . "<br>";

        // Redirect to a success page or perform other actions after successful registration
        // header("Location: success.php");
        exit();
    }
}

// Function to sanitize input data
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

