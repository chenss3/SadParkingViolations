<?php

include('conn.php');

if (isset($_POST['deletelocationdata'])) {
    $var_summons_number= $_POST['delete_summons'];

    $query = "DELETE FROM location WHERE summons_number = :var_summons_number ";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Deleted"); <script>';
        header('Location: location.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}