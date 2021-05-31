<?php
include 'connect.php';

$sql = "SELECT * FROM postMessage";
$result = $conn->query($sql);

// skriver ut one item at a time genom att använda fetch_assoc metoden 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class= "col-sm-4"> ';
    echo '<div class="inlagg">';
    echo '<form action = "Delet.php" method = "post"> ';
    echo '<h3 class="text">'.$row["Firstname"]. '</h3><br>';
    echo '<p class="text">'.$row["Post"]. '</p><br>';
    echo "<p><input type='hidden' name ='ID'";
    echo " value ='".$row["ID"]."'>";
    echo '<input type="Submit" value= "Radera" >';
    echo '</form>';
    echo '</div>';
    echo '</div>';
  }
} 
?>




    