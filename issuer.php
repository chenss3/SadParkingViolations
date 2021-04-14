
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel ="stylesheet" href ="style.css">
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
                                </li>
                                <li class="nav-item">
                                    <a href="issuer.php" class="nav-link">Issuer</a>
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
        <div class="container">
            <h2>Issuer Table</h2>
            <?php 
                try {
                    $dbhost = '127.0.0.1'; // localhost
                    $dbuname = 'root'; //user name
                    $dbpass = 'root'; //Password
                    $dbname = 'parkingviolations'; //Database name
                
                $dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass); ?>

                    <table class="table-responsive table-bordered table-striped" id="myTable" style="max-height: 300px; overflow: scroll">
                        <thead>
                            <tr class = "table-primary active">
                                <th>issuer_code</th>
                                <th>issuing_agency</th>
                                <th>issuer_precinct</th>
                                <th>issuer_command</th>
                                <th>issuer_squad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dbo->query('SELECT * from issuer LIMIT 50') as $row) { ?>
                            <tr>
                                <!-- Print (echo) the value of each column of the table -->
                                <td><?php echo $row["issuer_code"]; ?></td>
                                <td><?php echo $row["issuing_agency"]; ?></td>
                                <td><?php echo $row["issuer_precinct"]; ?></td>
                                <td><?php echo $row["issuer_command"]; ?></td>
                                <td><?php echo $row["issuer_squad"]; ?></td>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').dataTable( {"pagingType": "simple"} );
        } );
    </script>
    </body>
</html>