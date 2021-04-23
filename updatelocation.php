<?php

$dbhost = '127.0.0.1'; // localhost
$dbuname = 'root'; //user name
$dbpass = 'root'; //Password
$dbname = 'parkingviolations'; //Database name

$dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); 

if (isset($_POST['updatelocationdata'])) {
    $var_summons_number= $_POST['update_summons'];

    $var_street_code1 = $_POST['street_code1'];
    $var_street_code2 = $_POST['street_code2'];
    $var_street_code3 = $_POST['street_code3'];
    $var_house_number = $_POST['house_number'];
    $var_street_name = $_POST['street_name'];
    $var_intersecting_street = $_POST['intersecting_street'];
    $var_subdivision = $_POST['subdivision'];
    $var_meter_number = $_POST['meter_number'];
    $var_feet_from_curb = $_POST['feet_from_curb'];

    $query = "UPDATE location SET street_code1 = '$var_street_code1', street_code2 = '$street_code2', street_code3 = '$street_code3',
                house_number = '$var_house_number', street_name = '$street_name', intersecting_street= '$intersecting_street',
                subdivision= '$subdivision', meter_number= '$meter_number', feet_from_curb= '$feet_from_curb' 
                WHERE summons_number = '$var_summons_number' ";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':street_code1', $var_street_code1, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':street_code2', $var_street_code2, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':street_code3', $var_street_code3, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':house_number', $var_house_number, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':street_name', $var_street_name, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':intersecting_street', $var_intersecting_street, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':subdivision', $var_subdivision, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':meter_number', $var_meter_number, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':feet_from_curb', $var_feet_from_curb, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); <script>';
        header('Location: location.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}