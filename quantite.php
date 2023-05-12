<?php

// suprimer le for each et faire  switch case 


    switch ($_POST["action"]) {
        case 'plus':
            session_start();
            
            if (isset($_POST["index"])) 
            {



                    $_SESSION["products"][$_POST["index"]]["qtt"] +=1;
                    $_SESSION["products"][$_POST["index"]]["total"] = $_SESSION["products"][$_POST["index"]]["qtt"]* $_SESSION["products"][$_POST["index"]]["price"];

            }
            break;
        
        case 'moins':
            session_start();
            if (isset($_POST["index"])) 
            {


                        $_SESSION["products"][$_POST["index"]]["qtt"]=max(1 , $_SESSION["products"][$_POST["index"]]["qtt"]-1);
                        $_SESSION["products"][$_POST["index"]]["total"] = $_SESSION["products"][$_POST["index"]]["qtt"]* $_SESSION["products"][$_POST["index"]]["price"];                    
        
            }
            break;
        default:
//uniquement en developement
        die ("eror");
            break;
}


    //ancien code
    //  {
        // if ($key == "plus" )
        // {
           
        //     session_start();
        //     foreach ( $_SESSION['products'] as $index => $product) 
        //     {

        //         if ($index==$value)
        //         {
        //             $qtt=$product['qtt'];
        //             $qtt++;
        //             $_SESSION["products"][$index]["qtt"] =$qtt;
        //             $_SESSION["products"][$index]["total"] = $_SESSION["products"][$index]["qtt"]* $_SESSION["products"][$index]["price"];




        //         }
        //     }
        // }
        // elseif ($key == "moins") 
        // {
            
        //     session_start();
        //     foreach ( $_SESSION['products'] as $index => $product) 
        //     {

        //         if ($index==$value)
        //         {

        //                 $qtt= $product['qtt'];
        //                 $qtt--;
        //                 if ($qtt<=0) 
        //                 {
        //                     $qtt =1;
        //                 }
        //                 $_SESSION["products"][$index]["qtt"] =$qtt;
        //                 $_SESSION["products"][$index]["total"] = $_SESSION["products"][$index]["qtt"]* $_SESSION["products"][$index]["price"];                    
        //         }
          
        //     }
        // }


    
    // }

header("Location:recap.php");