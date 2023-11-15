<?php


    if(isset($_GET['f'])){

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
       echo "Testing";


        switch($_GET['f']){


        case "data":
            require_once('api_read.php');
        break;

        case "update":
           require_once('api_update.php');
        break;
               case "delete":
           require_once('api_delete.php');
        break;

                         case "insert":
           require_once('api_insert.php');
        break;

        default:echo "api fail";

    }

}else {
        echo "no request";
    }
  ?>
