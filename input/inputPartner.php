
<?php
// Start a PHP session
session_start();

// Logout process
if (isset($_GET['logout'])) {
  // Destroy the session and unset session variables

  unset($_SESSION['username']);
session_unset();
  // Redirect to login page
  header("Location: inputPartners.php");
  exit();
}

// Check if the user is logged in
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
    //echo "Uspelo";
} else {
  // Redirect to the login page if the user is not logged in
  header("Location: inputPartners.php");
  exit();
}

// ... Rest of your existing code ...
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


    </head>
<body>

     <a href="?logout=1" class="list-group-item list-group-item-action py-2 ripple" style="color: red;">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    <h2>Vnesi partnerje : </h2>
<form id="myForm" enctype="multipart/form-data" action="upload.php" method="post">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Ime partnerja</label>
        <textarea class="form-control" name="imePartnerja" id="exampleFormControlTextarea1" rows="1" required></textarea>

        <label for="exampleFormControlTextarea2">Spletna povezava do partnerja</label>
        <textarea class="form-control" name="spletnaPovezava" id="exampleFormControlTextarea2" rows="1" required></textarea>

        <label for="exampleFormControlFile3">Slika logotip</label>
        <input type="file" class="form-control-file" name="slikaLogotip" id="exampleFormControlFile3" required>

    </div>
    <br>
    <button type="submit" class="btn btn-primary">Insert Data</button>
</form>

  <br>
    <h2> Izbriši partnerje</h2>
    <?php
$servername = "localhost";
$dbUsername = "razpotni_gasper2608";
$dbPassword = "Gasper2608.";
$dbname = "razpotni_agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT `idPartner`, `ImePartnerja`, `WebCon`, `imgPotPartner` FROM `partnerji`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ime Partnerja</th>
                <th>Web Connection</th>
                <th>Image Path</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['idPartner']; ?></td>
                    <td><?php echo $row['ImePartnerja']; ?></td>
                    <td><?php echo $row['WebCon']; ?></td>
                    <td><?php echo $row['imgPotPartner']; ?></td>
                    <td>
                        <form method="post" action="deletePartner.php">
                            <input type="hidden" name="idToDelete" value="<?php echo $row['idPartner']; ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo "No results found.";
}

$conn->close();
?>

    </body>
</html>

