<?php

$dbhost = '127.0.0.1'; // localhost
$dbuname = 'root'; //user name
$dbpass = 'root'; //Password
$dbname = 'parkingviolations'; //Database name

$dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); 

if (isset($_POST['deletelocationdata'])) {
    $var_summons_number= $_POST['delete_summons'];

    $query = "DELETE FROM location WHERE summons_number = '$var_summons_number' ";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Deleted"); <script>';
        header('Location: location.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}