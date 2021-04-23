<?php

$dbhost = '127.0.0.1'; // localhost
$dbuname = 'root'; //user name
$dbpass = 'root'; //Password
$dbname = 'parkingviolations'; //Database name

$dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); 

if (isset($_POST['insertdata'])) {
    $var_summons_number= $_POST['summons_number'];
    $var_issuer_code = $_POST['issuer_code'];
    $var_issuing_agency = $_POST['issuing_agency'];
    $var_issuer_precinct = $_POST['issuer_precinct'];
    $var_issuer_command = $_POST['issuer_command'];
    $var_issuer_squad = $_POST['issuer_squad'];

    $query = "INSERT INTO issuer(summons_number, issuer_code, issuing_agency, issuer_precinct, issuer_command, issuer_squad)"
            . "VALUES (:summons_number, :issuer_code, :issuing_agency, :issuer_precinct, :issuer_command, :issuer_squad)";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':issuer_code', $var_issuer_code, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':issuing_agency', $var_issuing_agency, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':issuer_precinct', $var_issuer_precinct, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':issuer_command', $var_issuer_command, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':issuer_squad', $var_issuer_squad, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); <script>';
        header('Location: issuer.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}