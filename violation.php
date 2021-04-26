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
                        <li class="nav-item">
                            <a href="issuer.php" class="nav-link">Issuer</a>
                        </li>
                        <li class="nav-item">
                            <a href="location.php" class="nav-link">Location</a>
                        </li>
                        <li class="nav-item">
                            <a href="registration.php" class="nav-link">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a href="vehicle.php" class="nav-link">Vehicle</a>
                        </li>
                        <li class="nav-item">
                            <a href="violation.php" class="nav-link">Violation</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="violationaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Violation Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertviolation.php" method="POST">
                <div class="modal-body">
                        <div class="form_group">
                                <label>Summons Number</label>
                                <input type="text" name = "summons_number" class="form-control" placeholder="Enter Summons Number">
                        </div>
                        <div class="form_group">
                                <label>Violation Code</label>
                                <input type="text" name = "violation_code" class="form-control" placeholder="Enter Violation Code">
                        </div>
                        <div class="form_group">
                                <label>Violation Location</label>
                                <input type="text" name = "violation_location" class="form-control" placeholder="Enter Violation Location">
                        </div>            
                        <div class="form_group">
                                <label>Violation Precinct</label>
                                <input type="text" name = "violation_precinct" class="form-control" placeholder="Enter Violation Precinct">
                        </div>
                        <div class="form_group">
                                <label>Violation Time</label>
                                <input type="text" name = "violation_time" class="form-control" placeholder="Enter Violation Time">
                        </div>
                        <div class="form_group">
                                <label>Violation County</label>
                                <input type="text" name = "violation_county" class="form-control" placeholder="Enter Violation County">
                        </div>
                        <div class="form_group">
                                <label>Violation Front Opposite</label>
                                <input type="text" name = "violation_front_opposite" class="form-control" placeholder="Enter Violation Front Opposite">
                        </div>
                        <div class="form_group">
                                <label>Violation Legal Code</label>
                                <input type="text" name = "violation_legal_code" class="form-control" placeholder="Enter Violation Legal Code">
                        </div>
                        <div class="form_group">
                                <label>Time First Oberved</label>
                                <input type="text" name = "time_first_observed" class="form-control" placeholder="Enter Time First Observed">
                        </div>
                        <div class="form_group">
                                <label>Date First Oberved</label>
                                <input type="text" name = "date_first_observed" class="form-control" placeholder="Enter Date First Oberved">
                        </div>
                        <div class="form_group">
                                <label>Days Parking in Effect</label>
                                <input type="text" name = "days_parking_in_effect" class="form-control" placeholder="Enter Days Parking in Effect">
                        </div>
                        <div class="form_group">
                                <label>From Hours in Effect</label>
                                <input type="text" name = "from_hours_in_effect" class="form-control" placeholder="Enter From Hours in Effect">
                        </div>
                        <div class="form_group">
                                <label>To Hours in Effect</label>
                                <input type="text" name = "to_hours_in_effect" class="form-control" placeholder="Enter To Hours in Effect">
                        </div>
                        <div class="form_group">
                                <label>Violation Post Code</label>
                                <input type="text" name = "violation_post_code" class="form-control" placeholder="Enter Violation Post Code">
                        </div>
                        <div class="form_group">
                                <label>Violation Description</label>
                                <input type="text" name = "violation_description" class="form-control" placeholder="Enter Violation Description">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "insertlocationdata" class="btn btn-primary">Save Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="violationeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Violation Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="updateviolation.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_summons" id="update_summons">
                    <div class="form_group">
                            <label>Plate ID</label>
                            <input type="text" id="plate_id" name = "plate_id" class="form-control" placeholder="Enter Plate ID">
                    </div>
                    <div class="form_group">
                            <label>Registration State</label>
                            <input type="text" id="registration_state" name = "registration_state" class="form-control" placeholder="Enter Registration State">
                    </div>            
                    <div class="form_group">
                            <label>Issue Date</label>
                            <input type="text" id="issue_date" name = "issue_date" class="form-control" placeholder="Enter Issue Date">
                    </div>
                    <div class="form_group">
                            <label>Plate Type</label>
                            <input type="text" id="plate_type" name = "plate_type" class="form-control" placeholder="Enter Plate Type">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "updateviolationdata" class="btn btn-primary">Update Data</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="violationdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Issuer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="deleteviolation.php" method="POST">
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#violationaddmodal" style="background-color: #8EA4C8; border: none">
                        Add Violation Data
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <?php 
                    try{
                        include('conn.php');
                    ?>
                    <table id="datatableid" class="table-responsive table-bordered" style="max-height: 500px; overflow: scroll">
                        <thead>
                                <th scope="col" style="background-color:#65c3ba">Summons Number</th>
                                <th scope="col" style="background-color:#65c3ba">Violation Code</th>
                                <th scope="col" style="background-color:#65c3ba">Violation Location</th>
                                <th scope="col" style="background-color:#65c3ba">Violation Precinct</th>
                                <th scope="col" style="background-color:#65c3ba ">Violation Time</th>
                                <th scope="col" style="background-color: #65c3ba">Violation County</th>
                                <th scope="col" style="background-color: #65c3ba">Violation Front Opposite</th>
                                <th scope="col" style="background-color: #65c3ba">Violation Legal Code</th>
                                <th scope="col" style="background-color: #65c3ba">Time First Observed</th>
                                <th scope="col" style="background-color: #65c3ba">Date First Observed</th>
                                <th scope="col" style="background-color: #65c3ba">Days Parking in Effect</th>
                                <th scope="col" style="background-color: #65c3ba">From Hours in Effect</th>
                                <th scope="col" style="background-color: #65c3ba">To Hours in Effect</th>
                                <th scope="col" style="background-color: #65c3ba">Violation Post Code</th>
                                <th scope="col" style="background-color: #65c3ba">Violation Description</th>
                                <th scope="col" style="background-color: #65c3ba"></th>
                                <th scope="col" style="background-color: #65c3ba"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($dbo->query('SELECT * from violation ORDER BY summons_number ASC LIMIT 50 ') as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row["summons_number"]; ?></td>
                                <td><?php echo $row["violation_code"]; ?></td>
                                <td><?php echo $row["violation_location"]; ?></td>
                                <td><?php echo $row["violation_precinct"]; ?></td>
                                <td><?php echo $row["violation_time"]; ?></td>
                                <td><?php echo $row["violation_county"]; ?></td>
                                <td><?php echo $row["violation_front_opposite"]; ?></td>
                                <td><?php echo $row["violation_legal_code"]; ?></td>
                                <td><?php echo $row["time_first_observed"]; ?></td>
                                <td><?php echo $row["date_first_observed"]; ?></td>
                                <td><?php echo $row["days_parking_in_effect"]; ?></td>
                                <td><?php echo $row["from_hours_in_effect"]; ?></td>
                                <td><?php echo $row["to_hours_in_effect"]; ?></td>
                                <td><?php echo $row["violation_post_code"]; ?></td>
                                <td><?php echo $row["violation_description"]; ?></td>
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
        $('#violationeditmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);
        $('#update_summons').val(data[0]);
        $('#plate_id').val(data[1]);
        $('#registration_state').val(data[2]);
        $('#issue_date').val(data[3]);
        $('#plate_type').val(data[4]);
        $('#issuer_squad').val(data[5]);
    });
});
</script>
<script>
$(document).ready(function(){ 
    $('.deletebtn').on('click', function() {
        $('#violationdeletemodal').modal('show');
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