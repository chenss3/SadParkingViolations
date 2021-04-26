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
                            <a href="#" class="nav-link">Statistics</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="main" text-align="right">
        <div class="centerblock"> 
            <div class="square" style="background-color: #bdeaee; left: 200px; width:650px; height: 400px; border-radius: 10px;">
                <h4><b>Location Table</b></h4>
            </div> 
        </div> 
        <div id="box1">
        <div class="police-image">
            <img src="location-image.jpeg" height=530px>
        </div>
    </div>
    
<!-- Add Modal -->
    <div class="modal fade" id="locationaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form action="insertlocation.php" method="POST">
                    <div class="modal-body">
    
                        <div class="summons_number">
                            <label>Summons Number</label>
                            <input type="number" name = "summons_number" class="form-control" placeholder="Enter Summons Number">
                        </div>
                        <div class="form-group">
                            <label>Street Code 1</label>
                            <input type="number" name = "street_code1" class="form-control" placeholder="Enter Street Code 1">
                        </div>
                        <div class="form-group">
                            <label>Street Code 2</label>
                            <input type="number" name = "street_code2" class="form-control" placeholder="Enter Street Code 2">
                        </div>

                        <div class="form-group">
                            <label>Street Code 3</label>
                            <input type="number" name = "street_code3" class="form-control" placeholder="Enter Street Code 3">
                        </div>

                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" name = "house_number" class="form-control" placeholder="Enter House Number">
                        </div>

                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" name = "street_name" class="form-control" placeholder="Enter Street Name">
                        </div>

                        <div class="form-group">
                            <label>Intersecting Street</label>
                            <input type="text" name = "intersecting_street" class="form-control" placeholder="Enter Intersecting Street">
                        </div>

                        <div class="form-group">
                            <label>Subdivision</label>
                            <input type="text" name = "subdivision" class="form-control" placeholder="Enter Subdivision">
                        </div>
                    
                        <div class="form-group">
                            <label>Meter Number</label>
                            <input type="text" name = "meter_number" class="form-control" placeholder="Enter Meter Number">
                        </div>

                        <div class="form-group">
                            <label>Feet From Curb</label>
                            <input type="text" name = "feet_from_curb" class="form-control" placeholder="Feet From Curb">
                        </div>
                        
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertlocationdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="locationeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Location Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="updatelocation.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name = "update_summons" id = "update_summons"> 
                        <div class="form-group">
                            <label>Street Code 1</label>
                            <input type="text" name = "street_code1" id = "street_code1" class="form-control" placeholder="Enter Street Code 1">
                        </div>
                        <div class="form-group">
                            <label>Street Code 2</label>
                            <input type="text" name = "street_code2" id = "street_code2" class="form-control" placeholder="Enter Street Code 2">
                        </div>

                        <div class="form-group">
                            <label>Street Code 3</label>
                            <input type="text" name = "street_code3" id = "street_code3" class="form-control" placeholder="Enter Street Code 3">
                        </div>

                        <div class="form-group">
                            <label>House Number</label>
                            <input type="text" name = "house_number" id = "house_number" class="form-control" placeholder="Enter House Number">
                        </div>

                        <div class="form-group">
                            <label>Street Name</label>
                            <input type="text" name = "street_name" id = "street_name" class="form-control" placeholder="Enter Street Name">
                        </div>

                        <div class="form-group">
                            <label>Intersecting Street</label>
                            <input type="text" name = "intersecting_street" id = "intersecting_street" class="form-control" placeholder="Enter Intersecting Street">
                        </div>

                        <div class="form-group">
                            <label>Subdivision</label>
                            <input type="text" name = "subdivision" id = "subdivision" class="form-control" placeholder="Enter Subdivision">
                        </div>
                    
                        <div class="form-group">
                            <label>Meter Number</label>
                            <input type="text" name = "meter_number" id = "meter_number" class="form-control" placeholder="Enter Meter Number">
                        </div>

                        <div class="form-group">
                            <label>Feet From Curb</label>
                            <input type="text" name = "feet_from_curb" id = "feet_from_curb" class="form-control" placeholder="Feet From Curb">
                        </div>
                        
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatelocationdata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deletelocationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Location Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="deletelocation.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name = "delete_summons" id = "delete_summons"> 
                        <h5>Do you want to delete this data?</h5>
                    
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" name="deletelocationdata" class="btn btn-primary">Yes, delete it.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class = "container">
        <div class="jumbotron" style="background-color: #fff">
            <div class="card">
                <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#locationaddmodal" style="background-color: #8EA4C8; border: none">
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
                                <th scope="col" style="background-color:#65c3ba">Street Code 1</th>
                                <th scope="col" style="background-color:#65c3ba">Street Code 2</th>
                                <th scope="col" style="background-color:#65c3ba ">Street Code 3</th>
                                <th scope="col" style="background-color: #65c3ba">House Number</th>
                                <th scope="col" style="background-color:#65c3ba">Street Name</th>
                                <th scope="col" style="background-color:#65c3ba">Intersecting Street</th>
                                <th scope="col" style="background-color:#65c3ba">Subdivision</th>
                                <th scope="col" style="background-color:#65c3ba">Meter Number</th>
                                <th scope="col" style="background-color:#65c3ba">Feet From Curb</th>
                                <th scope="col" style="background-color:#65c3ba"> </th>
                                <th scope="col" style="background-color:#65c3ba"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($dbo->query('SELECT * from location ORDER BY summons_number ASC LIMIT 50 ') as $row) {
                            ?>
                            <tr>

                                <td><?php echo $row["summons_number"]; ?></td>
                                <td><?php echo $row["street_code1"]; ?></td>
                                <td><?php echo $row["street_code2"]; ?></td>
                                <td><?php echo $row["street_code3"]; ?></td>
                                <td><?php echo $row["house_number"]; ?></td>
                                <td><?php echo $row["street_name"]; ?></td>
                                <td><?php echo $row["intersecting_street"]; ?></td>
                                <td><?php echo $row["subdivision"]; ?></td>
                                <td><?php echo $row["meter_number"]; ?></td>
                                <td><?php echo $row["feet_from_curb"]; ?></td>
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
</body>

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
    $('.deletebtn').on('click', function() {
        $('#deletelocationmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);
        $('#delete_summons').val(data[0]);
    });
});
</script>

<script>
$(document).ready(function(){ 
    $('.editbtn').on('click', function() {
        $('#locationeditmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);
        
        $('#update_summons').val(data[0]);
        $('#street_code1').val(data[1]);
        $('#street_code2').val(data[2]);
        $('#street_code3').val(data[3]);
        $('#house_number').val(data[4]);
        $('#street_name').val(data[5]);
        $('#intersecting_street').val(data[6]);
        $('#subdivision').val(data[7]);
        $('#meter_number').val(data[8]);
        $('#feet_from_curb').val(data[9]);
    });
});

</script>
</html>