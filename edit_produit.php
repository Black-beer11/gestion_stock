<?php
include 'config.php';

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    $conn->query("UPDATE produits SET name='$name', quantity='$qty', price='$price' WHERE id=$id");
    header("Location: index.php");
}

$product = $conn->query("SELECT * FROM produits WHERE id=$id")->fetch_assoc();
?>

<link rel="stylesheet" href="css/style.css">

<form method="POST">
    <input type="text" name="name" placeholder="Nom" value="<?= $produit['name'] ?>">
    <input type="number" name="quantity" placeholder="Quantité" value="<?= $produit['quantity'] ?>">
    <input type="number" name="price" step="0.01" placeholder="Prix" value="<?= $produit['price'] ?>">
    <button name="update">Mettre à jour</button>
</form>