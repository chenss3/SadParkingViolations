
<?php

include('conn.php');

if (isset($_POST['insertlocationdata'])) {
    
    $var_summons_number= $_POST['summons_number'];
    $var_street_code1 = $_POST['street_code1'];
    $var_street_code2 = $_POST['street_code2'];
    $var_street_code3 = $_POST['street_code3'];
    $var_house_number = $_POST['house_number'];
    $var_street_name = $_POST['street_name'];
    $var_intersecting_street = $_POST['intersecting_street'];
    $var_subdivision = $_POST['subdivision'];
    $var_meter_number = $_POST['meter_number'];
    $var_feet_from_curb = $_POST['feet_from_curb'];


    
    $query = "INSERT INTO location(summons_number, street_code1, street_code2, street_code3, 
                house_number, street_name, intersecting_street, subdivision, meter_number, feet_from_curb"
            . "VALUES (:summons_number, :street_code1, :street_code2, :street_code3, :house_number, 
                :street_name, :intersecting_street, :subdivision, :meter_number, :feet_from_curb)";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
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