<?php
session_start();
include_once("header.php");
include_once("nav.php");
include_once("connexion.php");
?>

<body>

<div class="container col-md-offset-3 col-md-6 col-md-offset-3">
   <div style="margin-top: 50px;"></div>
   <div id="card">
       <div class="card-header">
           <h3>Formulaire d'inscription agent</h3>
       </div>
       <div class="card-body">
           <form action="ajout.php" method = "post" autocomplete="off">
               <div class="form-group">
                   <label for="nom">Nom</label>
                   <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
               </div>
               
                <div class="form-group">
                    <label for="postnom">Postnom</label>
                    <input type="text"  class="form-control" name="postnom" id="postnom" placeholder ="Entrer votre postnom" required> 
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text"  class="form-control" name="prenom" id="prenom" placeholder ="Entrer votre prenom " required> 
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="radio"  name="genre" id="genre" value="Feminin" required> &nbsp; <label>Feminin</label> &nbsp;
                    <input type="radio"  name="genre" id="genre" value="Masculin" required> &nbsp; <label>Masculin</label> &nbsp;
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="number" class="form-control" name="telephone" id="telephone" placeholder ="Entrer votre numero" required> 
                </div>
               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email" autocomplete="off">
               </div>
               <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text"  class="form-control" name="adresse" id="adresse" placeholder ="Entrer votre adresse " required> 
                </div>
                <div class="form-group">
                    <label for="pass">Mot de passe</label>
                    <input type="password"  class="form-control" name="pass" id="pass" placeholder ="Entrer le mot de passe " required autocomplete="off"> 
                </div>

               <button type="reset" value="Annuler" class="btn btn-danger"><img id="icommande" src="assets/supprimer2.png"> &nbsp; Annuler</button>
               <button type="submit" class="btn btn-success" name="inscriragent"><img id="icommande" src="assets/valider2.png">&nbsp;Envoyer</button>
       
           </form>
       </div>
   </div>
</div>


</div>
</body>

<?php
include_once("footer.php");
?>