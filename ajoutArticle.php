<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_vente_ligne";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomproduit = $_POST['nomproduit'];
    $puproduit = $_POST['puproduit'];
    $stockdisponible = $_POST['stockdisponible'];
    $descriptionproduit = $_POST['descriptionproduit'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageproduit"]["name"]);
    if (move_uploaded_file($_FILES["imageproduit"]["tmp_name"], $target_file)) {
        $imageproduit = $target_file;
    } else {
        echo "Erreur lors de l'upload de l'image.";
        exit;
    }

    $sql = "INSERT INTO produit (id, nomproduit, puproduit, stockdisponible, imageproduit, descriptionproduit)
            VALUES ('','$nomproduit', '$puproduit', '$stockdisponible', '$imageproduit', '$descriptionproduit')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouveau produit ajouté avec succès";
        header("location: produit.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>