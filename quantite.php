<?php


foreach ($_POST as $key => $value) 
    {
        if ($key == "plus" )
        {
           
            session_start();
            foreach ( $_SESSION['products'] as $index => $product) 
            {

                if ($index==$value)
                {
                    $qtt=$product['qtt'];
                    $qtt++;
                    $_SESSION["products"][$index]["qtt"] =$qtt;
                    $_SESSION["products"][$index]["total"] = $_SESSION["products"][$index]["qtt"]* $_SESSION["products"][$index]["price"];




                }
            }
        }
        elseif ($key == "moins") 
        {
            
            session_start();
            foreach ( $_SESSION['products'] as $index => $product) 
            {

                if ($index==$value)
                {

                        $qtt= $product['qtt'];
                        $qtt--;
                        if ($qtt<=0) 
                        {
                            $qtt =1;
                        }
                        $_SESSION["products"][$index]["qtt"] =$qtt;
                        $_SESSION["products"][$index]["total"] = $_SESSION["products"][$index]["qtt"]* $_SESSION["products"][$index]["price"];                    
                }
          
            }
        }


    
    }






header("Location:recap.php");