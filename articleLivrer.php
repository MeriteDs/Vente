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
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
           <button class="btn btn-default">
                <a href=" "><i class="glyphicon glyphicon-plus"></i></a>
           </button>
           <p>Commandes en attente de livraison</p>
        </div>
        <div class="panel-body"></div>
        <div class="panel-body">
       
    <table class="table table-bordered table-striped table-condensed">
        <tr>
            <th>livrer</th>
            <th>Num</th>
            <th>Quantite</th>
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
                        <button class="btn btn-success"><a href="livraison.php?idcommande=<?php echo $rows["idcommande"]?>">Livrer &nbsp;<img id="icommande" src="assets/valider.png"></button>
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