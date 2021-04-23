<?php
    $dbhost = '127.0.0.1'; // localhost
    $dbuname = 'root'; //user name
    $dbpass = 'root'; //Password
    $dbname = 'parkingviolations'; //Database name

    $dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); 

?>