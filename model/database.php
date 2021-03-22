<?php
    //HEROKU DATABASE CONNECTION
    
    $username = 'zjl1dbudkoc5rr6c';
    $password = 'vginhqvgkqrs7obm';


    try {
        $db = new PDO('mysql:host=eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dgtn366u7rngrzgc', $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    
    

    //LOCAL CONNECTION TESTING DATABASE SETUP
    /*
    $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
    $username = 'root';
    
    try {
        $db = new PDO($dsn, $username);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('./view/error.php');
        exit();
    }
    */
?>