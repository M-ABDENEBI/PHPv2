<?php
$servername = "localhost";
$username = "user";
$password = "password";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    $sql = "INSERT INTO Voiture (marque, classe, commentaire)
VALUES ('Mercedes', 'C', 'Super')";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error: " ;
}

$conn->close();
?>
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn->close();
?>