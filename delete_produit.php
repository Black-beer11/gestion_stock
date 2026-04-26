<?php
include 'config.php';

$id = $_GET['id'];

$conn->query("DELETE FROM produits WHERE id=$id");

header("Location: index.php");
?>