<?php

include('conn.php');

if (isset($_POST['updateviolationdata'])) {

    $var_summons_number= $_POST['update_summons'];

    $var_violation_code= $_POST['violation_code'];
    $var_violation_location = $_POST['violation_location'];
    $var_violation_precinct = $_POST['violation_precinct'];
    $var_violation_time= $_POST['violation_time'];
    $var_violation_county= $_POST['violation_county'];
    $var_violation_front_opposite= $_POST['violation_front_opposite'];
    $var_violation_legal_code= $_POST['violation_legal_code'];
    $var_time_first_observed= $_POST['time_first_observed'];
    $var_date_first_observed= $_POST['date_first_observed'];
    $var_days_parking_in_effect= $_POST['days_parking_in_effect'];
    $var_from_hours_in_effect= $_POST['from_hours_in_effect'];
    $var_to_hours_in_effect= $_POST['to_hours_in_effect'];
    $var_violation_post_code= $_POST['violation_post_code'];
    $var_violation_description= $_POST['violation_description'];

    $query = "UPDATE violation SET violation_code='$var_violation_code', violation_location='$var_violation_location',
    violation_precinct='$var_violation_precinct', violation_time='$var_violation_time', violation_county='$var_violation_county', 
    violation_front_opposite='$var_violation_front_opposite', violation_legal_code='$var_violation_legal_code',
    time_first_observed='$var_time_first_observed', date_first_observed='$var_date_first_observed', days_parking_in_effect='$var_days_parking_in_effect',
    from_hours_in_effect='$var_from_hours_in_effect', to_hours_in_effect='$to_hours_in_effect', violation_post_code='$var_violation_post_code',
    violation_description='$var_violation_description' WHERE summons_number = '$var_summons_number'";

    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':violation_code', $var_violation_code, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':violation_location', $var_violation_location, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_precinct', $var_violation_precinct, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':violation_time', $var_violation_time, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_county', $var_violation_county, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_front_opposite', $var_violation_front_opposite, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_legal_code', $var_violation_legal_code, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':time_first_observed', $var_time_first_observed, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':date_first_observed', $var_date_first_observed, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':days_parking_in_effect', $var_days_parking_in_effect, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':from_hours_in_effect', $var_from_hours_in_effect, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':to_hours_in_effect', $var_to_hours_in_effect, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_post_code', $var_violation_post_code, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':violation_description', $var_violation_description, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); <script>';
        header('Location: violation.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}