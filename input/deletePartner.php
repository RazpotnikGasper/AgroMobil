<?php
$servername = "localhost";
$dbUsername = "razpotni_gasper2608";
$dbPassword = "Gasper2608.";
$dbname = "razpotni_agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idToDelete = $_POST['idToDelete'];

    // Perform the deletion
    $sql = "DELETE FROM `partnerji` WHERE `idPartner` = $idToDelete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
