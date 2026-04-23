<?php include 'config.php'; ?>

<link rel="stylesheet" href="css/style.css">


<!--  Le tableau d'affichage de données. -->
<h1>Gestion de Stock</h1>

<a href="ajouter_produit.php">Ajouter Produit</a>
<a href="categories.php">Catégories</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Catégories</th>
        <th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT produits.*, categories.name AS cat_name
            FROM produits
            LEFT JOIN categories ON produits.category_id = categories.id";
    
    $result = $conn->query($sql);

    if(!$result){
        die("Erreur SQL : " . $conn->error);
    }

    while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['quantity']}</td>
            <td>{$row['price']}</td>
            <td>{$row['cat_name']}</td>
            <td>
                <a href='view_produit.php?id={$row['id']}'>Détails</a>
                <a href='edit_produit.php?id={$row['id']}'>Modifier</a>
                <a href='delete_produit.php?id={$row['id']}'>Supprimer</a>
            </td>
        </tr>";
    }
    ?>
</table>