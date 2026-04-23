<!-- Connexion à la bases de données -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "stock_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée:". $conn->connect_error);
}
?>