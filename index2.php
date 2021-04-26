<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel ="stylesheet" href ="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
        <title> Parking Violations </title>
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
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class ="main">
            <div class="main-image">
                <img src="city-street.jpeg" height=502px width="fit-content">
                <div class="centerblock"> 
                    <div class="square" top=100px>
                        <h4><b>NYC Parking Violations</b></h4>
                    </div> 
                </div> 
            </div>
        </div>
        <div class ="icons">
            <div class="icon-about">
                <div class="icon-square" style="position: absolute; left: 150px; top: 650px">
                    <img src="index2-about.jpeg" height=300px width="fit-content">
                </div> 
                <div class = "text-square" style="position: absolute; left: 230px; top: 930px">
                    <a style="font-size: 40px; color:black"><b>About</b></a>
                </div>
                <div class = "text-square" style="position: absolute; left: 235px; top: 995px">
                    <a href="about.php" style="font-size: 20px; text-decoration: none">Learn More ►</a>
                </div>
            </div>
            <div class="icon-tables">
                <div class="icon-square" style="position: absolute; left: 570px; top: 660px">
                    <img src="index2-tables.png" height=260px width="fit-content">
                </div> 
                <div class = "text-square" style="position: absolute; left: 650px; top: 930px">
                    <a style="font-size: 40px; color:black"><b>Tables</b></a>
                </div>
                <div class = "text-square" style="position: absolute; left: 655px; top: 995px">
                    <a href="issuer.php" style="font-size: 20px; text-decoration: none">Take a Look ►</a>
                </div>
            </div>
            <div class="icon-statistics">
                <div class="icon-square" style="position: absolute; left: 990px; top: 660px">
                    <img src="index2-statistics.jpeg" height=250px width="fit-content">
                </div> 
                <div class = "text-square" style="position: absolute; left: 1035px; top: 930px">
                    <a style="font-size: 40px; color:black"><b>Statistics</b></a>
                </div>
                <div class = "text-square" style="position: absolute; left: 1040px; top: 995px">
                    <a href="statistics.php" style="font-size: 20px; text-decoration: none">Analyze Trends ►</a>
                </div>
            </div>
        </div>


        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>
</html>