<?php

include 'connect.php';
// sparar information från formen i databasen

$uname = $_POST['name'];
$upost = $_POST['post'];

$sql = "INSERT INTO postMessage (Firstname, Post ) VALUES ('$uname', '$upost' )";

if ($conn->query($sql) === TRUE) {
    header ("location: utbildning.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>