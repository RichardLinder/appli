<?php
// crée une session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Récapitulatif des produits</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="contenaire">
    <?php 
    // isset verifie que la varianle existe !isset verifie que la variavle existe pas empty() renvoi false si la variable es vide
    // fait l'action si vrai
    if (!isset($_SESSION['products'])|| empty($_SESSION['products'])) {
  // afiche les donné si il sont  string , int ou float
        echo "<p> Aucun produits</p>";
    }
    // fait l'action si la condition de if es fause
    else { 
       echo "<table>",
            "<thead>",
                "<th>#</th>",
                "<th>Nom</th>",
                "<th>Prix</th>",
                "<th>Quantité</th>",
                "<th>Total</th>",
                "<th>Suprimer</th>",
            "</thead>",
            "</tbody>";
            $totalGeneral=0;     
            
            // lis le tableau en prenant index comme variable  clée et product comme variable valeur
        foreach ( $_SESSION['products'] as $index => $product) {
            
            echo "<tr>",
                    "<td>".$index."</td>",

                    // prend dna le tableau product la valeur name puis prix , qtt, total
                    "<td>".$product['name']."</td>",
                    // number_fortmat : gére le format  du prix en limitant a 2 decimal et en prenant , en separateur des decimaux
                    "<td>".number_format($product['price'],2, "," ,"&nbsp;" )."&nbsp;€</td>";

                    ?>

                    <td> <form action="./quantite.php" method="post">
                        <input type="hidden" name="action" value="moins">
                    <button type="submit" name="index" value="<?=$index?>" >-</button>
                    </form>
                    <p><?=$product['qtt']?></p>
                    <form action="./quantite.php" method="post">
                        <input type="hidden" name="action" value="plus">
                    <button type="submit" name="index" value="<?=$index?>" >+</button>
                    </form> </td>'
                 <?php   echo
                    "<td>".number_format($product['total'],2, "," ,"&nbsp;" )."&nbsp;€</td>";
                    // ajout la valeur du tableau total a la clée  total
                    $totalGeneral+=  $product['total'];
                    
                ?> 
                    <td>
                        <form action="./resset.php" method="post">
                        <!-- <input type="submit" name="suprimer" value=""> -->
                        <button type="submit" name="suprimer" value="<?=$index?>" > suprimer</button>
                        </form>
                    </td>
                </tr>

                
                    <?php
                    $nombreDeProduits=count($_SESSION['products']) ;



 


      

        }
       
        echo    "<tr>",
                "<td colspan=2> Total général: </td>",
                "<td><strong>" .number_format($totalGeneral,2,",","&nbsp;").
                  "&nbsp;€</strong></td>",
                  "<td colspan=2> Nombre de produit total " .$nombreDeProduits."</td>",
                  "</tr>",
        "</tbody>",
            "</table>";
    }


?>



<a href="./index.php">retournez ajoutez des produit  <strong> cliquer  vite !!!! <strong></a>

<form action="./resset.php" method="post">

<input type="submit" name="resset" value="resset">


</form>




</div>
</body>
</html>