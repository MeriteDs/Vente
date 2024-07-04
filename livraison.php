<?php
    session_start();
    include_once("connexion.php");
    if(isset($_GET['idcommande']))
    {
        $commande=$_GET['idcommande'];
        $agent=$_SESSION['agent']['idagent'];
        $client=$_SESSION['client']['idclient'];
        $livrer=$chaine->prepare("INSERT INTO livraison(idlivraison, idagent, idclient, idcommande) values(?,?,?,?)"); 
        $livrer->execute(array("",$agent, $client, $commande));
        ?>
        <script>
                alert("commande livrer");
                window.location.href="listeCommande.php";
        </script>
        <?php
        
    }else{
        header("location:index.php");
    }
?>