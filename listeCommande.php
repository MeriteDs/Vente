<?php
include_once("nav.php");
include_once("header.php");
include_once("connexion.php");

$rec=$chaine->query("SELECT * FROM commande ORDER BY idcommande ASC");

?>
<head>
    <style> 
        
    </style>
</head>
<div style="margin-top: 50px;"></div>
<div class="container">
    <div class="panel panel-success"  style="width: 100%;">
        <div class="panel-heading">
           <p>Commandes en attente de livraison</p>
        </div>
        <div class="panel-body"></div>
        <div class="panel-body">
       
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>livrer</th>
            <th>Num</th>
            <th>Qte</th>
            <th>Date</th>
            <th>Client</th>
            <th>Produit</th>
        </tr>  

        <?php
        $i=1;
            while($rows=$rec->fetch()) 
            {
        ?>

        <tr>
            <td>
                <div class="btn-group">
                        <button class="btn btn-success"  style="color: white; width:130px;"><a href="livraison.php?idcommande=<?php echo $rows["idcommande"]?>"><img id="icommande" src="assets/valider2.png"> &nbsp; Livrer</button> <br>
                        <button class="btn btn-danger" style="color: white; margin-top: 5px;"><a href="Supprimer.php?idpcom=<?php echo $rows["idcommande"]?>"><img id="icommande" src="assets/supprimer2.png"> &nbsp; Supprimer</a></button>
                </div>
            </td>
            <td><?php echo $i++?></td>
            <td><?php echo $rows["quantitecommande"]?></td>
            <td><?php echo $rows["datecommande"]?></td>
            <td><?php echo $rows["idclient"]?></td>
            <td><?php echo $rows["id"]?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
    </div>
</div>

<?php
include_once("footer.php");
?>