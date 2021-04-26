<?php



if (isset($_POST['insertlocationdata'])) {

    $var_summons_number= $_POST['summons_number'];
    $var_plate_id= $_POST['plate_id'];
    $var_registration_state = $_POST['registration_state'];
    $var_issue_date = $_POST['issue_date'];
    $var_plate_type = $_POST['plate_type'];

    $query = "INSERT INTO registration(summons_number, plate_id, registration_state, issue_date, plate_type)"
            . "VALUES (:summons_number, :plate_id, :registration_state, :issue_date, :plate_type)";
    try
    {
        include('conn.php');
        
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
        $prepared_stmt->bindValue(':plate_id', $var_plate_id, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':registration_state', $var_registration_state, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':issue_date', $var_issue_date, PDO::PARAM_STR);
        $prepared_stmt->bindValue(':plate_type', $var_plate_type, PDO::PARAM_STR);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Saved"); <script>';
        header('Location: registration.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}