<!DOCTYPE html>
<html>
    <head>
        <title> kayla </title>
    </head>
    <body>
        <h1> Jack and Sophia's amazing project yay </h1>
        <?php
        try {
        $dbhost = '127.0.0.1'; // localhost
        $dbuname = 'root'; //user name
        $dbpass = 'root'; //Password
        $dbname = 'parkingviolations'; //Database name

        $dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); ?>
        <table>
            <!-- Create the first row of table as table head (thead). -->
            <thead>
                <!-- The top row is table head with four columns named -- summons_number, plate_id ... -->
                <tr>
                <th>summons_number</th>
                <th>plate_id</th>
                <th>registration_state</th>
                <th>plate_type</th>
                <th>issue_date</th>
                <th>vehicle_body_type</th>
                <th>vehicle_make</th>
                <th>issuing_agency</th>
                <th>street_code1</th>
                </tr>
            </thead>
                <!-- Create rest of the the body of the table -->
            <tbody>
                <!-- For each row returned by the query -->
                <?php foreach ($dbo->query('SELECT summons_number, plate_id, registration_state, plate_type, issue_date, violation_code, 
                                                    vehicle_body_type, vehicle_make, issuing_agency, street_code1
                                            from ParkingViolationsMegaTable LIMIT 10') as $row) { ?>
                <tr>
                    <!-- Print (echo) the value of each column of the table -->
                    <td><?php echo $row["summons_number"]; ?></td>
                    <td><?php echo $row["plate_id"]; ?></td>
                    <td><?php echo $row["registration_state"]; ?></td>
                    <td><?php echo $row["plate_type"]; ?></td>
                    <td><?php echo $row["issue_date"]; ?></td>
                    <td><?php echo $row["violation_code"]; ?></td>
                    <td><?php echo $row["vehicle_body_type"]; ?></td>
                    <td><?php echo $row["vehicle_make"]; ?></td>
                    <td><?php echo $row["issuing_agency"]; ?></td>
                    <td><?php echo $row["street_code1"]; ?></td>
                <!-- End first row. Note this will repeat for each row returned by the previous query-->
                </tr>
                <?php } 
                //Set it to null since we are done with the variable 
                $dbo = null ?>
                <!-- End table body -->
            </tbody>
            <!-- End table -->
        </table>

        <?php $dbo = null;
        } catch (PDOException $e) {
            //Will tell us our error message if the connection doesn't work etc
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        } ?> 
    </body>
</html>