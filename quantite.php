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
                    $arayQtt= [ "qtt"=>$qtt];
                    array_replace($product,$arayQtt );
                    die(var_dump($product));

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

                    $qtt=$product['qtt'];
                    $qtt--;
                    $arayQtt= [ ""=>$qtt];
                    array_replace($product,$arayQtt);
                    die(var_dump($_SESSION));

                }
          
            }
        }


    
    }






header("Location:recap.php");