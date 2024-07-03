<?php
session_start();
include_once("header.php");
include_once("nav.php");
include_once("connexion.php");
?>    
<body>
    <div class="container col-md-offset-3 col-md-6 col-md-offset-3">
   
        <div id="card">
            <div class="card-header">
                <h3>Commande</h3>
            </div>
            <div class="card-body">
                <form method="post" action="ajout.php" >
                    
                    <div class="form-group">
                        <label for="quantite">Quantite</label>
                        <input type="number" class="form-control" name="quantite" id="quantite" placeholder="Entrez la Quantite"  required>
                    </div>
                    <div class="form-group">
                        <label for="datec">La date</label>
                        <input type="date" class="form-control" id="datec" name="datec" placeholder="0000-00-00 00:00:00" required>
                    </div>

                    <button  type="submit" name="vcom" class="btn btn-success" >Valider la commande &nbsp;<img id="icommande" src="assets/valider.png"></button><br>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include_once("footer.php");
?>