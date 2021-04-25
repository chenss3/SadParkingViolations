<?php
    // MAC credentials
    $dbhost = '127.0.0.1'; // localhost
    $dbuname = 'root'; //user name
    $dbpass = 'root'; //Password
    $dbname = 'parkingviolations'; //Database name
    $dbport = '8889'; // database port
    
    // WINDOWS Credentials
    $dbhost = '127.0.0.1'; // localhost
    $dbuname = 'root'; //user name
    $dbpass = ''; //Password
    $dbname = 'parkingviolations'; //Database name
    $dbport = '3306'; // database port

    $dbo = new PDO('mysql:host=' . $dbhost . ';port=' . $dbport . ';dbname=' . $dbname, $dbuname, $dbpass); 

?>