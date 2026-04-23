<?php
include 'config.php';

// Ajouter catégorie
if (isset($_POST['add_cat'])) {
    $name = $_POST['name'];
    $conn->query("INSERT INTO categories (name) VALUES ('$name')");
}

// Supprimer
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM categories WHERE id=$id");
}
?>

<link rel="stylesheet" href="css/style.css">

<!-- formulaire -->
<h1>Catégories</h1>
<form method="POST">
    <input type="text" name="name" placeholder="Nom catégorie">
    <button name="add_cat">Ajouter</button>
</form>


<table>
<?php
$res = $conn->query("SELECT * FROM categories");
while ($row = $res->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td><a href='?delete={$row['id']}'>Supprimer</a></td>
        </tr>";
}
?>
</table>