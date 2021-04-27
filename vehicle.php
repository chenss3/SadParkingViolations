<!DOCTYPE html>
<html>
<head>
<!-- THe following is the stylesheet file. The CSS file decides look and feel -->
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
                            <a href="statistics.php" class="nav-link">Statistics</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="main" text-align="right">
        <div class="centerblock"> 
            <div class="square" style="background-color: #bdeaee; left: 200px; width:650px; height: 400px; border-radius: 10px;">
                <h4><b>Vehicle Table</b></h4>
            </div> 
        </div> 
        <div id="box1">
        <div class="police-image">
            <img src="vehicle-image.jpeg" height=510px>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="vehicleaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Vehicle Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertvehicle.php" method="POST">
                <div class="modal-body">
                        <div class="form_group">
                                <label>Summons Number</label>
                                <input type="number" name = "summons_number" class="form-control" placeholder="Enter Summons Number">
                        </div>
                        <div class="form_group">
                                <label>Vehicle Body Type</label>
                                <input type="text" maxlength="4" name = "vehicle_body_type" class="form-control" placeholder="Enter Vehicle Body Type">
                        </div>
                        <div class="form_group">
                                <label>Vehicle Make</label>
                                <input type="text" maxlength="10" name = "vehicle_make" class="form-control" placeholder="Enter Vehicle Make">
                        </div>            
                        <div class="form_group">
                                <label>Vehicle Expiration Date</label>
                                <input type="text" maxlength="10" name = "vehicle_expiration_date" class="form-control" placeholder="Enter Vehicle Expiration Date">
                        </div>
                        <div class="form_group">
                                <label>Vehicle Color</label>
                                <input type="text" maxlength="15" name = "vehicle_color" class="form-control" placeholder="Enter Vehicle Color">
                        </div>
                        <div class="form_group">
                                <label>Unregistered Vehicle</label>
                                <input type="text" maxlength="4" name = "unregistered_vehicle" class="form-control" placeholder="Enter Unregistered Vehicle">
                        </div>
                        <div class="form_group">
                                <label>Vehicle Year</label>
                                <input type="text" maxlength="4" name = "vehicle_year" class="form-control" placeholder="Enter Vehicle Year">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "insertvehicledata" class="btn btn-primary">Save Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="vehicleeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Vehicle Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="updatevehicle.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_summons" id="update_summons">
                    <div class="form_group">
                            <label>Vehicle Body Type</label>
                            <input type="text" maxlength="4" id="vehicle_body_type" name = "vehicle_body_type" class="form-control" placeholder="Enter Vehicle Body Type">
                    </div>
                    <div class="form_group">
                            <label>Vehicle Make</label>
                            <input type="text" maxlength="10" id="vehicle_make" name = "vehicle_make" class="form-control" placeholder="Enter Vehicle Make">
                    </div>            
                    <div class="form_group">
                            <label>Vehicle Expiration Date</label>
                            <input type="text" maxlength="10" id="vehicle_expiration_date" name = "vehicle_expiration_date" class="form-control" placeholder="Enter Vehicle Expiration Date">
                    </div>
                    <div class="form_group">
                            <label>Vehicle Color</label>
                            <input type="text" maxlength="15" id="vehicle_color" name = "vehicle_color" class="form-control" placeholder="Enter Vehicle Color">
                    </div>
                    <div class="form_group">
                            <label>Unregistered Vehicle</label>
                            <input type="text" maxlength="4" id="unregistered_vehicle" name = "unregistered_vehicle" class="form-control" placeholder="Enter Unregistered Vehicle">
                    </div>
                    <div class="form_group">
                            <label>Vehicle Year</label>
                            <input type="text" maxlength="4" id="vehicle_year" name = "vehicle_year" class="form-control" placeholder="Enter Vehicle Year">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "updatevehicledata" class="btn btn-primary">Update Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="vehicledeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Issuer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="deletevehicle.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name = "delete_summons" id = "delete_summons"> 
                        <h5>Do you want to delete this data?</h5>
                    
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Yes, delete it.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron" style="background-color: #fff">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vehicleaddmodal" style="background-color: #8EA4C8; border: none">
                        Add Data
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php 
                    try{
                        include('conn.php');
                    ?>
                    <table id="datatableid" class="table table-bordered" style="max-height: 300px; overflow: scroll">
                        <thead>
                            <tr class = "table-primary active" >
                                <th scope="col" style="background-color:#65c3ba">Summons Number</th>
                                <th scope="col" style="background-color:#65c3ba">Vehicle Body Type</th>
                                <th scope="col" style="background-color:#65c3ba">Vehicle Make</th>
                                <th scope="col" style="background-color:#65c3ba ">Vehicle Expiration Date</th>
                                <th scope="col" style="background-color: #65c3ba">Vehicle Color</th>
                                <th scope="col" style="background-color: #65c3ba">Unregistered Vehicle</th>
                                <th scope="col" style="background-color: #65c3ba">Vehicle Year</th>
                                <th scope="col" style="background-color: #65c3ba"></th>
                                <th scope="col" style="background-color: #65c3ba"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($dbo->query('SELECT * from vehicle ORDER BY summons_number ASC LIMIT 50 ') as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row["summons_number"]; ?></td>
                                <td><?php echo $row["vehicle_body_type"]; ?></td>
                                <td><?php echo $row["vehicle_make"]; ?></td>
                                <td><?php echo $row["vehicle_expiration_date"]; ?></td>
                                <td><?php echo $row["vehicle_color"]; ?></td>
                                <td><?php echo $row["unregistered_vehicle"]; ?></td>
                                <td><?php echo $row["vehicle_year"]; ?></td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn" style="background-color: #98D4BB; border: none"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn" style="background-color: #DC828F; border: none"> DELETE </button>
                                </td>
                            </tr>
                        <?php
                                }
                            }
                            catch (PDOException $e) {?>
                        </tbody>
                        <?php
                        //Will tell us our error message if the connection doesn't work etc
                        print "Error!: " . $e->getMessage() . "<br/>";
                        die();
                    } 
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#datatableid').DataTable({
        paging: true,
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "pageLength": 10,
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
} );
</script>

<script>
$(document).ready(function(){ 
    $('.editbtn').on('click', function() {
        $('#vehicleeditmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);

        $('#update_summons').val(data[0]);
        $('#vehicle_body_type').val(data[1]);
        $('#vehicle_make').val(data[2]);
        $('#vehicle_expiration_date').val(data[3]);
        $('#vehicle_color').val(data[4]);
        $('#unregistered_vehicle').val(data[5]);
        $('#vehicle_year').val(data[5]);
    });
});
</script>
<script>
$(document).ready(function(){ 
    $('.deletebtn').on('click', function() {
        $('#vehicledeletemodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);
        $('#delete_summons').val(data[0]);
    });
});
</script>
</body>
</html>