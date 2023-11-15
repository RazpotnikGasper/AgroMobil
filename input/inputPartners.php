<?php

$servername = "localhost";
$dbUsername = "razpotni_gasper2608";
$dbPassword = "Gasper2608.";
$dbname = "razpotni_agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

if(isset($_POST['username'])){




// Start a PHP session
session_start();
//print_r($_POST);
// Get user input from the login form
$email = $_POST['username'];
$pass = $_POST['password'];



// Query the database to check if the email and password match
$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."'";
//echo $sql;

$result = $conn->query($sql);

// Check if the query returned any rows
if ($result->num_rows == 1) {
    // Login successful
    $row = $result->fetch_assoc();
    $username = $row['email'];

    // Store the username in a session variable
    $_SESSION['username'] = $username;

    // Redirect to the dashboard or home page
        header("Location: inputPartner.php");
        exit();
} else {
    // Login failed
    echo "Invalid username or password";
}}

else{

    header("Location: inputP.php");
}
//$conn->close();
?>
