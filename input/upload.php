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
    $imePartnerja = $_POST['imePartnerja'];
    $spletnaPovezava = $_POST['spletnaPovezava'];

    // Handle file upload
    $targetDirectory = "slike/sidebarslike/"; // Specify your target directory
    $targetFile = $targetDirectory . basename($_FILES["slikaLogotip"]["name"]);

    // Insert data into the database
    $sql = "INSERT INTO partnerji (ImePartnerja, WebCon, imgPotPartner) VALUES ('$imePartnerja', '$spletnaPovezava', '$targetFile')";

    if ($conn->query($sql) === TRUE) {
        $response = array("status" => "success");
        echo json_encode($response);
    } else {
        $response = array("status" => "error", "message" => $conn->error);
        echo json_encode($response);
    }
}

$conn->close();

$target_dir = "../slike/sidebarslike/";
$target_file = $target_dir . basename($_FILES["slikaLogotip"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["slikaLogotip"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["slikaLogotip"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["slikaLogotip"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
