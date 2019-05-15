/*le but de l'exo était de faire un SELECT 
mais l'énoncé était le même que 5.1 */

<?php
$servername = "localhost";
$username = "user";
$password = "password";


try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
   
$sql = "SELECT * FROM FOO";
if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error " . $conn->error;
}

    
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn->close();
?>