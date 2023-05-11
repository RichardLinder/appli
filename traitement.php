<?php
    session_start();
    // crée la session si elle existe pas 
    
    // verifie que isset existe 
    if (isset($_POST['submit'])) {

        // elimine les charctère spécial dans la clée name du tableau submit
        $name = filter_input (INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        // renvois faux  si le prix n'est pas un float
        $price = filter_input (INPUT_POST, "price", FILTER_VALIDATE_FLOAT,
        // fait que , et . soit accepté en tant que separateur des deximaux
        FILTER_FLAG_ALLOW_FRACTION);
        // renvoie faux  si qtt n'est pas un int 
        $qtt  =filter_input (INPUT_POST, "qtt", FILTER_VALIDATE_INT);

        // verifie que les 3 variable ne sont pas fause
        if ($name&& $price && $qtt) {
            $product = [
                "name" => $name,
                "price" => $price,
                "qtt" => $qtt,
                "total" => $price*$qtt                
            ];
            // crée si il n'es pas déjas pressent  dans la variable général session un tableau product et y ajoute les element de la variable product  
            $_SESSION['products'][] =$product;

            $_SESSION['verification'] = "Le produit a été ajouté";    
        }else 
        {
            $_SESSION['verification'] = "echec de l'ajout du produit veuiller reasyer ";    
        }


    }
// redirige vers index.php et renvoie une nouvelle entête
    //Cross-Site Scripting  
    //Cross-Site Scripting
//Cross-Site Scripting
//Cross-Site Scripting
//Cross-Site Scripting
//Cross-Site Scripting
// faille de sécurité ou un sript htlm es injecté sur un site  par exemple afin de redirigé l'utilisateur vers un site pirate malvaillant ou de télégargé des fichier dangereu
// XSS
//XSS
// XSS
//XSS


    header("Location:index.php");