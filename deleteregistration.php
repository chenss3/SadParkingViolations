<?php

include('conn.php');

if (isset($_POST['deletedata'])) {
    $var_summons_number= $_POST['delete_summons'];

    $query = "DELETE FROM registration WHERE summons_number = :summons_number ";
    try
    {
        $prepared_stmt = $dbo->prepare($query);
        $prepared_stmt->bindValue(':summons_number', $var_summons_number, PDO::PARAM_INT);
        $result = $prepared_stmt->execute();
        echo '<script> alert ("Data Deleted"); <script>';
        header('Location: registration.php');
 
    }
    catch (PDOException $ex)
    { // Error in database processing.
        echo $sql . "<br>" . $error->getMessage(); // HTTP 500 - Internal Server Error
    }
}