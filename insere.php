<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$Nome=$_GET['Nome'];
$Email=$_GET['Email'];
$Senha=$_GET['Senha'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO login(Nome, Email,Senha )
VALUES ('$Nome', '$Email', '$Senha')";

if (mysqli_query($conn, $sql)) {
    echo "Registro Cadastrado";
    header("Location: index.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>