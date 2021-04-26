<?php 
include_once('conn.php');
?>

<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <link rel ="stylesheet" href ="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
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
                    <ul class = "navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="about.php" class="nav-link">About
                                <span class="sr-only">(current)</span>
                            </a>
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
                            <a href="statistics.php" class="nav-link">Statistics</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
            ['Subdivision', 'Count'],

            <?php
                $sql = "CALL get_all_subdivision_counts()";
                foreach ($dbo->query($sql) as $chart) {
                    echo"['".$chart['subdivision']."',".$chart['count']."],";
                }
            ?>
            ]);

            var options = {
                    colors: ['#8EA4C8', '#C3B8AA', '#218B82', '#9AD9DB', '#E5DBD9', '#98D4BB', '#C47482', '#D5E4C3', '#EB96AA', '#2CCED2']
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div class="main" text-align="right">
        <div id="box1">
        <div class="police-image" style="position: absolute; top: 100px; left: 800px">
            <img src="statistics-red.jpeg" height=480px>
        </div>
        <div class="centerblock">
            <div class="square" style="position: absolute; background-color: #fff; left: 370px; width:500px; height: 350px; border-radius: 10px;">
                <h4 style="font-size: 30px; position: absolute; top: 100px"><b>Top 10 Subdivisions with Frequent Parking Violations</b></h4>
            </div> 
        </div> 
    </div>
    <div>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart2);

            function drawChart2() {

                var data = google.visualization.arrayToDataTable([
                ['Violation County', 'Count'],

                <?php
                    $sql = "CALL get_all_county_counts()";
                    foreach ($dbo->query($sql) as $chart) {
                        echo"['".$chart['violation_county']."',".$chart['count']."],";
                    }
                ?>
                ]);

                var options = {
                    colors: ['#E9BBB5', '#E7CBA9', '#AAD9CD', '#E8D595', '#8DA47E', '#F5BFD2', '#E5DB9C', '#D0BCAC', '#BEB4C5', '#E6A57E']
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                chart.draw(data, options);
            }
        </script>
        <div id="piechart2" style="width: 900px; height: 500px; position: relative; top: 80px"></div>
    </div>
    <div class="main" text-align="right">
        <div id="box1">
        <div class="police-image" style="position: absolute; top: 630px; left: 800px">
            <img src="statistics-yellow.png" height=480px>
        </div>
        <div class="centerblock">
            <div class="square" style="position: absolute; background-color: #fff; top: 630px; left: 370px; width:500px; height: 350px; border-radius: 10px;">
                <h4 style="font-size: 30px; position: absolute; top: 130px"><b>Counties and Percentage of Parking Violations</b></h4>
            </div> 
        </div> 
    </div>
    <div>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart3);

            function drawChart3() {

                var data = google.visualization.arrayToDataTable([
                ['Vehicle Make', 'Count'],

                <?php
                    $sql = "CALL get_all_vehicle_makes()";
                    foreach ($dbo->query($sql) as $chart) {
                        echo"['".$chart['vehicle_make']."',".$chart['count']."],";
                    }
                ?>
                ]);

                var options = {
                    colors: ['#218B82', '#9AD9DB', '#E5DBD9', '#98D4BB', '#EB96AA', '#B8E0F6', '#A4CCE3', '#37667E', '#DEC4D6', '#7B92AA']
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

                chart.draw(data, options);
            }
        </script>
        <div id="piechart3" style="width: 900px; height: 500px; position: relative; top: 80px"></div>
    </div>
    <div class="main" text-align="right">
        <div id="box1">
        <div class="police-image" style="position: absolute; top: 1150px; left: 800px">
            <img src="statistics-teal.png" height=480px>
        </div>
        <div class="centerblock">
            <div class="square" style="position: absolute; background-color: #fff; top: 1150px; left: 370px; width:500px; height: 350px; border-radius: 10px;">
                <h4 style="font-size: 30px; position: absolute; top: 130px"><b>Top 10 Car Makes with Frequent Parking Violations</b></h4>
            </div> 
        </div> 
    </div>
  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</html>