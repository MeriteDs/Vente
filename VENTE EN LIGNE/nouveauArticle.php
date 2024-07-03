<?php
session_start();
include_once("header.php");
include_once("nav.php");
?>

<body>

    <div class="container col-sm-offset-3 col-sm-6 col-sm-offset-3" id="vers">
        <div id="card">
            <a href="listeCommande.php"><button class="btn btn-success" style="width:610px;"><img id="icommande" src="assets/menu2.png">&nbsp;Voir les commendes en attente de livraison </button></a>
        </div>
    </div>
    <div style="margin-top: 200px;"></div>
<div class="container col-md-offset-3 col-md-6 col-md-offset-3">
   
   <div id="card">
       <div class="card-header">
           <h3>Nouveau article</h3>
       </div>
        <div class="card-body">
        <form action="ajoutArticle.php" method="post" enctype="multipart/form-data">
            <label for="nomproduit">Nom du Produit</label>
            <input type="text" class="form-control" id="nomproduit" name="nomproduit" required><br>

            <label for="puproduit">Prix Unitaire</label>
            <input type="number" class="form-control" step="0.01" id="puproduit" name="puproduit" required><br>

            <label for="stockdisponible">Stock Disponible</label>
            <input type="number" class="form-control" id="stockdisponible" name="stockdisponible" required><br>

            <label for="imageproduit">Image du Produit <br><br>&nbsp;<img id='icommande' src='assets/epinglage2.png'></label>
            <input type="file" class="form-control" id="imageproduit" name="imageproduit" required><br>

            <label for="descriptionproduit">Description du Produit </label>
            <textarea id="descriptionproduit" class="form-control" name="descriptionproduit" required></textarea><br>

            <button type="submit" class="btn btn-success" style="width:610px;"><img id='icommande' src='assets/valider2.png'>&nbsp;Ajouter</button>
        </form>
       </div>
   </div>
</div>
</div> 
      
</body>

<?php
include_once("footer.php");
?>