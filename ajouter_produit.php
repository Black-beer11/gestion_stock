<?php
include 'config.php';


// Insertion des données dans la base de donner
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $cat = $_POST['category'];

    $sql = "INSERT INTO produits(name, description, quantity, price, category_id) 
            VALUES ('$name', '$desc', '$qty', '$price', '$cat')";

    $conn->query($sql);
    header("Location: index.php");
    exit();
}
?>
<link rel="stylesheet" href="css/style.css">


// Le formulaire
<h1>Ajouter Produit</h1>
<form method="POST">
    <input type="text" name="name" placeholder="Nom" required>
    <input type="text" name="description" placeholder="Description">
    <input type="number" name="quantity" placeholder="Quantité">
    <input type="number" step="0.01" name="price" placeholder="Prix">
    

    // Selection de la catégorie
    <select name="category">
        <?php
        $cat = $conn->query("SELECT * FROM categories");
        while($c = $cat->fetch_assoc()){
            echo "<option value='{$c['id']}'>{$c['name']}</option>";
        }
        ?>
    </select>

    <button name="add">Ajouter</button>
</form>