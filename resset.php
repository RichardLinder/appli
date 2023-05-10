<?php



 if (in_array("resset", $_POST)) {
    

    $past = time() - 3600;
    foreach ( $_COOKIE as $key => $value )
    {
        setcookie( $key, $value, $past, '/' );
    }
}else 
{
    foreach ($_POST as $key => $value) 
    {
        if ($key == "suprimer" )
        {
            session_start();
            foreach ( $_SESSION['products'] as $index => $product) 
            {

                if ($index==$value)
                {

                    unset($_SESSION['products'][$index]);
                }
            }
        }


    
    }

        
    
}









header("Location:recap.php");