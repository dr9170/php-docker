<?php
$servername = "mydbtest.ck2ytwxd3mxz.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "56384922";
$dbname = "mydbalgomas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id Usuario:" . $row["id"]. " - Nombre: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
