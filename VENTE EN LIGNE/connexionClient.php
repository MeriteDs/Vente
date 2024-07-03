<?php
include_once("header.php");
include_once("nav.php");
include_once("connexion.php");
?>    
<body>
    <div class="container col-md-offset-3 col-md-6 col-md-offset-3">
   
        <div id="card">
            <div class="card-header">
                <h3>Connexion client</h3>
            </div>
            <div class="card-body">
                <form action="ducon.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"class="email" placeholder="Entrez votre email" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="secret">Mot de passe</label>
                        <input type="password" class="form-control" id="secret" name="secret" placeholder="Entrez mot de passe" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-success" name="con"><img id="icommande" src="assets/valider2.png">&nbsp; Se connecter</button> <br>
                    <div class="divise"></div><br>
                        vous n'avez pas un compte ?  
                        <a href="inscriptionClient.php" style="color: blue;">Creer un compte</a>
            
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include_once("footer.php");
?>