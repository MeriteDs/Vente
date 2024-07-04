<?php
session_start();
include_once("header.php");
include_once("nav.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_vente_ligne";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

$sql = "SELECT id, nomproduit, puproduit, stockdisponible, imageproduit, descriptionproduit FROM  produit";
$result = $conn->query($sql);

            if ($result->num_rows > 0) {
        ?>  <div style="margin-top: 50px;"></div>
            <div class="container col-sm-offset-3 col-sm-6 col-sm-offset-3">
                <div id="card">
                <?php
                    while($row = $result->fetch_assoc()) {
                        echo "<div>";
                        echo "<h3 id='margeimg'>" . $row["nomproduit"] . "</h3>";
                        echo "<p id='margeimg'>Prix: " . $row["puproduit"] . " $</p>";
                        echo "<p id='margeimg'>Stock: " . $row["stockdisponible"] . " Disponible</p><hr>";
                        echo "<p id='margeimg'><img src='" . $row["imageproduit"] . "' alt='" . $row["nomproduit"] . "' style='width:200px;'></p>";
                        echo "<p id='margeimg'>Description: " . $row["descriptionproduit"] . "</p>";
                        echo "</div>";

                        echo "<div> <a href='connexionClient.php' id='margeimg'><button class='btn btn-primary'> <img id='icommande' src='assets/panier2.png'>&nbsp; Commander</button></a> </div><hr>";

                    }
                ?>
                </div>
            </div>
        <?php

} else {
    echo "0 résultats";
}
$conn->close();

include_once("footer.php");
?>


