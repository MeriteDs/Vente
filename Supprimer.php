<?php
include_once("header.php");
include_once("nav.php");
include_once("connexion.php");

if(isset($_GET['idpcom'])){ 
    $cles=htmlspecialchars($_GET['idpcom']);
    $ver=$chaine->prepare('SELECT * FROM commande WHERE idcommande=?');
    $ver->execute(array($cles));
    if($row=$ver->fetch()){
        ?>
       <script>
        var choix= confirm("voulez vous vraiment supprimer cette info ?");
        if(choix==1){
            <?php
                $sup=$chaine->prepare("DELETE FROM commande WHERE idcommande=?");    
                $sup->execute(array($cles));
            ?>
            window.location.href="listeCommande.php?sup";
        }
        else{
            alert("abandon de la suppression");
        }
       </script>
       
      <?php

       

    }
    else{
        echo "<div class='alert alert-block alert-danger col-sm-4'> 
        Aucune information a supprimer <a href='listeClient.php'>retour</a></div>";
    }
}

?>