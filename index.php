<html>
    <?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    
    // Session Reset
    sec_session_start();
    sec_session_destroy();

    // Composer autoload
    require 'vendor/autoload.php';
    
   

    //mail_html("abougeniere@yahoo.fr", "test mail", "ceci est un test<br>de mail", "alain.bougeniere@univ-evry.fr");
    
    header('Location: testb.php');
    exit;
    ?>