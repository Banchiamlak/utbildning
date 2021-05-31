<?php
include 'select.php';

// hämtar Value från formen med namn ID
$Pd= $_REQUEST["ID"];

$sql = "DELETE FROM postMessage WHERE ID = '$Pd'";
// om sql är genomförd uppdateras sidan 
if ($conn->query($sql) === TRUE) {
    header ("location: utbildning.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>