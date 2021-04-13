<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel ="stylesheet" href ="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <title> kayla </title>
    </head>
    <body>
        <div class="header">
            <div class="menu bar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="index2.php" class="navbar-brand">DBProject</a>
                    <button class="navbar-toggler toggler-example" type="button" data-toggle = "collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class = "collapse navbar-collapse" id="navbarMenu">
                        <ul class = "navbar-nav ms-auto">
                            <li class="nav-item active">
                                <a href="about.php" class="nav-link">About
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Insert</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Update</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Delete</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>
</html>