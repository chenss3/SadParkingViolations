<?php

include('conn.php');

if (isset($_POST['insertvehicledata'])) {

    $var_summons_number= $_POST['summons_number'];
    $var_vehicle_body_type= $_POST['vehicle_body_type'];
    $var_vehicle_make = $_POST['vehicle_make'];
    $var_vehicle_expiration_date = $_POST['vehicle_expiration_date'];
    $var_vehicle_color= $_POST['vehicle_color'];
    $var_unregistered_vehicle= $_POST['unregistered_vehicle'];
    $var_vehicle_year= $_POST['vehicle_year'];

    $query = "INSERT INTO vehicle(summons_number, vehicle_body_type, vehicle_make, vehicle_expiration_date, vehicle_color, unregistered_vehicle, vehicle_year)"
            . "VALUES (:summons_number, :vehicle_body_type, :vehicle_make, :vehicle_expiration_date, :vehicle_color, :unregistered_vehicle, :vehicle_year)";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':vehicle_body_type', $var_vehicle_body_type, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_make', $var_vehicle_make, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_expiration_date', $var_vehicle_expiration_date, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_color', $var_vehicle_color, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':unregistered_vehicle', $var_unregistered_vehicle, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_year', $var_vehicle_year, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); <script>';
        header('Location: vehicle.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}