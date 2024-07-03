<?php
session_start();
include_once("connexion.php");
//insertion client

if(isset($_POST['inscrirclient'])){

$idcl="";
$nomcl=isset($_POST['nom'])?htmlspecialchars($_POST['nom']):null;
$postnomcl=isset($_POST['postnom'])?htmlspecialchars($_POST['postnom']):null;
$prenomcl=isset($_POST['prenom'])?htmlspecialchars($_POST['prenom']):null;
$genrecl=isset($_POST['genre'])?htmlspecialchars($_POST['genre']):null;
$telephonecl=isset($_POST['telephone'])?htmlspecialchars($_POST['telephone']):null;
$emailcl=isset($_POST['email'])?htmlspecialchars($_POST['email']):null;
$adresscl=isset($_POST['adresse'])?htmlspecialchars($_POST['adresse']):null;
$motpasscl=isset($_POST['pass'])?htmlspecialchars($_POST['pass']):null;


//requete insertion

$inserer =$chaine->prepare ("INSERT INTO client(idclient, nomclient, postnomclient, prenomclient, genreclient, 
telephoneclient, mailclient, adresseclient, mdpassclient) values(?,?,?,?,?,?,?,?,?)");
$inserer->execute(array(
        $idcl,
        $nomcl,
        $postnomcl,
        $prenomcl,
        $genrecl,
        $telephonecl,
        $emailcl,
        $adresscl,
        $motpasscl
    ));

    ?>
    <script>
         window.location.href="produit.php";
         alert("Merci de vous abonner");
    </script>
   <?php
}

//inscription agent
elseif(isset($_POST['inscriragent'])){

        $idag="";
        $nomag=isset($_POST['nom'])?htmlspecialchars($_POST['nom']):null;
        $postnomag=isset($_POST['postnom'])?htmlspecialchars($_POST['postnom']):null;
        $prenomag=isset($_POST['prenom'])?htmlspecialchars($_POST['prenom']):null;
        $genreag=isset($_POST['genre'])?htmlspecialchars($_POST['genre']):null;
        $telephoneag=isset($_POST['telephone'])?htmlspecialchars($_POST['telephone']):null;
        $emailag=isset($_POST['email'])?htmlspecialchars($_POST['email']):null;
        $adressag=isset($_POST['adresse'])?htmlspecialchars($_POST['adresse']):null;
        $motpassag=isset($_POST['pass'])?htmlspecialchars($_POST['pass']):null;
    
    //requete insertion
    
    $inserer =$chaine->prepare ("INSERT INTO agent(idagent, nomagent, postnomagent, prenomagent, genreagent, 
    telephoneagent, mailagent, adresseagent, mdpassagent) values(?,?,?,?,?,?,?,?,?)");
    $inserer->execute(array(
        $idag,
        $nomag,
        $postnomag,
        $prenomag,
        $genreag,
        $telephoneag,
        $emailag,
        $adressag,
        $motpassag
        ));
    
        header("location:connexionAgent.php");
}

//insertion de la commande
elseif(isset($_POST['vcom'])){

    $idpcom="";
    $quantitecom=isset($_POST['quantite'])?htmlspecialchars($_POST['quantite']):null;
    $datecom=isset($_POST['datec'])?htmlspecialchars($_POST['datec']):null;
    $idclcom ="";
    $idprodcom="";

    //requete insertion
    $inserer=$chaine->prepare ("INSERT INTO commande(idcommande, quantitecommande, datecommande, idclient, id) values(?,?,?,?,?)");
    $inserer->execute(array(
        $idpcom,
        $quantitecom,
        $datecom,
        $idclcom,
        $idprodcom
    ));
        ?>
       <script>
            window.location.href="produit.php";
            alert("Commande reussi, merci");
       </script>
       
      <?php
}
else{
    header("location:commande.php");
}
?>
