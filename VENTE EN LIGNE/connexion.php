<?php
try{
  $chaine=new PDO("mysql:host=localhost; dbname=gestion_vente_ligne","root","");

}
catch(Exception $e){
 die("erreur de connexion".$e->getMessage());
}

?>