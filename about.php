<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel ="stylesheet" href ="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    </head>
    <body>
        <div class="header">
            <div class="menu bar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="index2.php" class="navbar-brand" style="font-size: 26px">DBProject</a>
                    <button class="navbar-toggler toggler-example" type="button" data-toggle = "collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class = "collapse navbar-collapse" id="navbarMenu">
                        <ul class = "navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a href="about.php" class="nav-link">About
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tables
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="issuer.php" class="nav-link">Issuer</a>
                                    <a class="dropdown-item"  href="Location.php" class="nav-link">Location</a>
                                    <a class="dropdown-item"  href="Registration.php" class="nav-link">Registration</a>
                                    <a class="dropdown-item"  href="vehicle.php" class="nav-link">Vehicle</a>
                                    <a class="dropdown-item"  href="violation.php" class="nav-link">Violation</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Statistics</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class = "container-fluid m-5">
            <div class="main">
                <div class = "row">
                    <div class = "col">
                        <div class = "text" style="width:600px">
                            <h1 style="position:relative; top:50px">About the Data Set</h1>
                            <h2 style="position:relative; top:70px; font-size:20px; line-height:1.8">The data we are looking at involves the details of every parking ticket issued in NYC in 2017 provided to us by the NYC 
                        Department of Finance. This data was made publicly available to aid in ticket resolution and to guide policy makers. Our inspiration to look at this dataset was to
                        see when tickets are most likely to be issued, where they were most likely issued, and what types of cars were most commonly ticketed. </h2>    
                        </div> 
                    </div>
                    <div class = "col">
                        <img src="About-Parking-Violatoin.jpeg" height=800px>
                    </div>
                </div>
                <div class = "row">
                    <p>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            View the Mega Table
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="container">
                                <h2>NYC Traffic Violations 2017</h2>
                                <?php 
                                
                                    try {
                                    include('conn.php'); ?>
                                    
                                        <table class="table-responsive table-bordered table-hover table-striped" id="myTable" style="max-height: 300px; max-width: px; overflow: scroll">
                                            <thead class="thead-dark">
                                                <tr class = "table-primary">
                                                    <th>summons_number</th>
                                                    <th>plate_id</th>
                                                    <th>registration_state</th>
                                                    <th>plate_type</th>
                                                    <th>issue_date</th>
                                                    <th>violation_code</th>
                                                    <th>vehicle_body_type</th>
                                                    <th>vehicle_make</th>
                                                    <th>issuing_agency</th>
                                                    <th>street_code1</th>
                                                    <th>street_code2</th>
                                                    <th>street_code3</th>
                                                    <th>vehicle_expiration_date</th>
                                                    <th>violation_location</th>
                                                    <th>violation_precinct</th>
                                                    <th>issuer_precinct</th>
                                                    <th>issuer_code</th>
                                                    <th>issuer_command</th>
                                                    <th>issuer_squad</th>
                                                    <th>violation_time</th>
                                                    <th>time_first_observed</th>
                                                    <th>violation_county</th>
                                                    <th>violation_front_opposite</th>
                                                    <th>house_number</th>
                                                    <th>street_name</th>
                                                    <th>intersecting_street</th>
                                                    <th>date_first_observed</th>
                                                    <!--<th>law_section</th>-->
                                                    <th>subdivision</th>
                                                    <th>violation_legal_code</th>
                                                    <th>days_parking_in_effect</th>
                                                    <th>from_hours_in_effect</th>
                                                    <th>to_hours_in_effect</th>
                                                    <th>vehicle_color</th>
                                                    <th>unregistered_vehicle</th>
                                                    <th>vehicle_year</th>
                                                    <th>meter_number</th>
                                                    <th>feet_from_curb</th>
                                                    <th>violation_post_code</th>
                                                    <th>violation_description</th>
                                                </tr>
                                            </thead >
                                            <tbody>
                                                <?php /*foreach ($dbo->query('SELECT summons_number, plate_id, registration_state, plate_type, issue_date, violation_code, 
                                                                                                        vehicle_body_type, vehicle_make, issuing_agency, street_code1,
                                                                                                        street_code2, street_code3, vehicle_expiration_date, violation_location, 
                                                                                                        violation_precinct, issuer_precinct, issuer_code, issuer_command, issuer_squad, 
                                                                                                        violation_time, time_first_observed, violation_county, violation_front_opposite, 
                                                                                                        house_number, street_name, intersecting_street, date_first_observed, law_section, 
                                                                                                        subdivision, violation_legal_code, days_parking_in_effect, from_hours_in_effect, 
                                                                                                        to_hours_in_effect, vehicle_color, unregistered_vehicle, vehicle_year, meter_number, 
                                                                                                        feet_from_curb, violation_post_code, violation_description
                                                                                                from ParkingViolationsMegaTable LIMIT 50') as $row) */
                                                       foreach ($dbo->query('SELECT * FROM megaView WHERE LENGTH(violation_description)>1 LIMIT 50;') as $row)                                             
                                                { ?>
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
                                                    <td><?php echo $row["street_code2"]; ?></td>
                                                    <td><?php echo $row["street_code3"]; ?></td>
                                                    <td><?php echo $row["vehicle_expiration_date"]; ?></td>
                                                    <td><?php echo $row["violation_location"]; ?></td>
                                                    <td><?php echo $row["violation_precinct"]; ?></td>
                                                    <td><?php echo $row["issuer_precinct"]; ?></td>
                                                    <td><?php echo $row["issuer_code"]; ?></td>
                                                    <td><?php echo $row["issuer_command"]; ?></td>
                                                    <td><?php echo $row["issuer_squad"]; ?></td>
                                                    <td><?php echo $row["violation_time"]; ?></td>
                                                    <td><?php echo $row["time_first_observed"]; ?></td>
                                                    <td><?php echo $row["violation_county"]; ?></td>
                                                    <td><?php echo $row["violation_front_opposite"]; ?></td>
                                                    <td><?php echo $row["house_number"]; ?></td>
                                                    <td><?php echo $row["street_name"]; ?></td>
                                                    <td><?php echo $row["intersecting_street"]; ?></td>
                                                    <td><?php echo $row["date_first_observed"]; ?></td>
                                                    <!-- <td><?php echo $row["law_section"]; ?></td> -->
                                                    <td><?php echo $row["subdivision"]; ?></td>
                                                    <td><?php echo $row["violation_legal_code"]; ?></td>
                                                    <td><?php echo $row["days_parking_in_effect"]; ?></td>
                                                    <td><?php echo $row["from_hours_in_effect"]; ?></td>
                                                    <td><?php echo $row["to_hours_in_effect"]; ?></td>
                                                    <td><?php echo $row["vehicle_color"]; ?></td>
                                                    <td><?php echo $row["unregistered_vehicle"]; ?></td>
                                                    <td><?php echo $row["vehicle_year"]; ?></td>
                                                    <td><?php echo $row["meter_number"]; ?></td>
                                                    <td><?php echo $row["feet_from_curb"]; ?></td>
                                                    <td><?php echo $row["violation_post_code"]; ?></td>
                                                    <td><?php echo $row["violation_description"]; ?></td>
                                                <!-- End first row. Note this will repeat for each row returned by the previous query-->
                                                </tr>
                                                <?php }
                                                //Set it to null since we are done with the variable 
                                                $dbo = null ?>
                                            </tbody>
                                        </table>

                                    <?php $dbo = null;
                                    } catch (PDOException $e) {
                                        //Will tell us our error message if the connection doesn't work etc
                                        print "Error!: " . $e->getMessage() . "<br/>";
                                        die();
                                    } ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').dataTable( {"pagingType": "simple"} );
            } );
        </script>
    </body>
</html>