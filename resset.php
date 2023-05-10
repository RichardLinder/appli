<?php



 if (in_array("resset", $_POST)) {
     session_destroy();

    $past = time() - 3600;
    foreach ( $_COOKIE as $key => $value )
    {
        setcookie( $key, $value, $past, '/' );
    }
}





header("Location:recap.php");