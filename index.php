<!-- 
    definition de
     requete http : demande d'action du navigateur vers le serveur qui lui renvois une reponse http

    super globale :  variable , (contenaire) natif crée par php sous forme de tableau qui permet de avoir les info dans tout les page php

    session supper global stockant les donné dans le serveur d'un utilisateur pour les avoir dans tout les page php par exemple site de comerce pannie d'achat conservé de page en page la session se finit a la fermeture du navigateur 

    http/https : meme protolole mais le 1er es en clair et le 2e es encrypté avec le protocole SSL/TLS
 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">

        <title>Ajout produit</title>
    </head>
<body>


<?php
 session_start();

 if (isset($_SESSION['products'])) {

    $nombreDeProduits=count($_SESSION['products']) ;
 }else {
    $nombreDeProduits=0;
 }



?>
    <div class="contenaire">
        
        <h1>Ajouter un produit</h1>
        <h2> Il a déjas <?=$nombreDeProduits?> produit dans nos offre </h2>
        <form action="traitement.php" method="post">
            <!-- transfer le formulaire en tableau a la page php :traitement.php dans la super constante $_POST sous la clée submit* -->
            <p>
                <label >
                    Nom du prodduit :
                    <input type="text" name="name">
                </label>
            </p>
            <p>
                <label >
                        Prix du produit :
                        <input type="number" step="any" name="price">
                </label>
            </p>
            <p>
                <label>
                    Quantité desirée:
                    <input type="number" name="qtt" value="1">
                </label>
                <p>
                    <input type="submit" name="submit" value="Ajouter le produit">
                <!--  designe la valeur * a submit  -->
                </p>
            </p>
        <!-- </form>
        <p>
            ?$message?>
        </p> -->
        <a href=".\recap.php"> Verifier vos produit <strong> cliquer  vite !!!! <strong></a>

         <p> <?php if(!empty($_SESSION['verification']))
         {
            echo $_SESSION['verification']; 
            } ?>
        </p> 

    </div>
    
</body>
</html>

<!--  get renvoie les donné dans la requete htlm -->