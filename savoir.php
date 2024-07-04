<?php
include_once("header.php");
include_once("nav.php");

?>
<body>
    <div style="margin-top: 30px;"></div>
    <section id="home" class="container col-sm-offset-3 col-sm-6 col-sm-offset-3">
   
        <div id="card">
            <div class="card-header">
                <h3>Ecrit nous</h3>
            </div>
            <div class="card-body">
                <form action="mailto:mufungizimerite45@gmail.com" method="post" enctype="text/plain">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"class="email" placeholder="Entrez votre email" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="message">Mot de passe</label>
                        <textarea name="message" class="form-control" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="con"><img id="icommande" src="assets/valider2.png">&nbsp; Envoyer</button> <br>
                    <div class="divise"></div><br>
                </form>
            </div>
        </div>
            
            <h1>Qui nous sommes ?</h1>
            <p>Nous sommes une entreprise de coordination des achants en ligne</p>
            <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
            <a href="produit.php" class="btn btn-primary col-sm-offset-3">Voir plus d'article</a>

        <div style="margin-top: 90px;"></div>
        </div>
    </section>
</body>
<?php
include_once("footer.php");
?>