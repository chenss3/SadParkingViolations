<?php

include('conn.php');

if (isset($_POST['updatevehicledata'])) {

    $var_summons_number= $_POST['update_summons'];

    $var_vehicle_body_type= $_POST['vehicle_body_type'];
    $var_vehicle_make = $_POST['vehicle_make'];
    $var_vehicle_expiration_date = $_POST['vehicle_expiration_date'];
    $var_vehicle_color = $_POST['vehicle_color'];
    $var_unregistered_vehicle = $_POST['unregistered_vehicle'];
    $var_vehicle_year = $_POST['vehicle_year'];

    $query = "UPDATE vehicle SET vehicle_body_type='$var_vehicle_body_type', vehicle_make='$var_vehicle_make',
            vehicle_expiration_date='$var_vehicle_expiration_date', vehicle_color='$var_vehicle_color', unregistered_vehicle='$var_unregistered_vehicle', vehicle_year='$var_vehicle_year'
             WHERE summons_number = '$var_summons_number'";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_body_type', $var_vehicle_body_type, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_make', $var_vehicle_make, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_expiration_date', $var_vehicle_expiration_date, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_color', $var_vehicle_color, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':unregistered_vehicle', $var_unregistered_vehicle, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':vehicle_year', $var_vehicle_year, PDO::PARAM_STR);
        
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); </script>';
        header('Location: vehicle.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}