 <?php

$sql = "SELECT `NameIzdelek`, `Cena` FROM `trgovina` ORDER BY `NameIzdelek` DESC LIMIT 2;";
$result = $conn->query($sql);
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            'NameIzdelek' => $row['NameIzdelek'],
            'Cena' => $row['Cena']
        );
    }
}

$jsonData = json_encode($data); // Convert the array to JSON
echo $jsonData;

?>
