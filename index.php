<html>
    <?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    sec_session_start();

    sec_session_destroy();

    header('Location: testb.php');
    exit;
    ?>