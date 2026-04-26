<?php
include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM produits WHERE id=$id");
$produit = $result->fetch_assoc();
?>
    <link rel="stylesheet" href="css/style.css">

        <h1>Détails Produit</h1>

        <p><strong>Nom:</strong> <?= $produit['name'] ?></p>
        <p><strong>Description:</strong> <?= $produit['description'] ?></p>
        <p><strong>Quantité:</strong> <?= $produit['quantity'] ?></p>
        <p><strong>Prix:</strong> <?= $produit['price'] ?></p>






