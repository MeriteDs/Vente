<?php
session_start();
include_once("connexion.php");

if(isset($_POST['con']))
{
    $login=$_POST['email'];
    $passe=$_POST['secret'];

    $con=$chaine->prepare("SELECT * FROM client WHERE mailclient=? AND mdpassclient=?");
    $con->execute(array($login,$passe));

    if($row=$con->fetch()){
        $_SESSION['client']=$row;
        header("location:commande.php");
    }else{
        header("location:connexionClient.php");
    }
}elseif(isset($_POST['secon']))
{
    $logine=$_POST['email'];
    $passee=$_POST['secret'];

    $con=$chaine->prepare("SELECT * FROM agent WHERE mailagent=? AND mdpassagent=?");
    $con->execute(array($logine,$passee));

    if($row=$con->fetch()){
        $_SESSION['agent']=$row;
        header("location:nouveauArticle.php");
    }else{
        header("location:connexionAgent.php");
    }
}else{
    header("location:index.php");
}
?>