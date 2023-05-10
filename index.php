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

$nombreDeProduits=count($_SESSION['products']) ;

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
        </form>

        <a href=".\recap.php"> Verifier vos produit <strong> cliquer  vite !!!! <strong></a>

    </div>
    
</body>
</html>

<!--  get renvoie les donné dans la requete htlm -->