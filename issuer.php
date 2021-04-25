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
    <div class="main" text-align="right">
        <div class="centerblock"> 
            <div class="square" style="background-color: #ceeff2; left: 200px; width:650px; height: 400px; border-radius: 10px;">
                <h4><b>Issuer Table</b></h4>
            </div> 
        </div> 
        <div id="box1">
        <div class="police-image">
            <img src="police-station.png" height=550px>
        </div>
    </div>
    
<!-- Add Modal -->
    <div class="modal fade" id="issueraddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Issuer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <form action="insertcode.php" method="POST">
                    <div class="modal-body">
                    
                        <div class="summons_number">
                            <label>Summons Number</label>
                            <input type="text" name = "summons_number" class="form-control" placeholder="Enter Summons Number">
                        </div>
                        <div class="form-group">
                            <label>Issuer Code</label>
                            <input type="text" name = "issuer_code" class="form-control" placeholder="Enter Issuer Code">
                        </div>
                        <div class="form-group">
                            <label>Issuing Agency</label>
                            <input type="text" name = "issuing_agency" class="form-control" placeholder="Enter Issuing Agency">
                        </div>

                        <div class="form-group">
                            <label>Issuer Precinct</label>
                            <input type="text" name = "issuer_precinct" class="form-control" placeholder="Enter Issuer Precinct">
                        </div>

                        <div class="form-group">
                            <label>Issuer Command</label>
                            <input type="text" name = "issuer_command" class="form-control" placeholder="Enter Issuer Command">
                        </div>

                        <div class="form-group">
                            <label>Issuer Squad</label>
                            <input type="text" name = "issuer_squad" class="form-control" placeholder="Enter Issuer Squad">
                        </div>
                    
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Issuer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name = "update_summons" id = "update_summons"> 
                        <div class="form-group">
                            <label>Issuer Code</label>
                            <input type="text" name = "issuer_code" id="issuer_code" class="form-control" placeholder="Enter Issuer Code">
                        </div>
                        <div class="form-group">
                            <label>Issuing Agency</label>
                            <input type="text" name = "issuing_agency" id="issuing_agency" class="form-control" placeholder="Enter Issuing Agency">
                        </div>

                        <div class="form-group">
                            <label>Issuer Precinct</label>
                            <input type="text" name = "issuer_precinct" id="issuer_precinct" class="form-control" placeholder="Enter Issuer Precinct">
                        </div>

                        <div class="form-group">
                            <label>Issuer Command</label>
                            <input type="text" name = "issuer_command" id="issuer_command" class="form-control" placeholder="Enter Issuer Command">
                        </div>

                        <div class="form-group">
                            <label>Issuer Squad</label>
                            <input type="text" name = "issuer_squad" id="issuer_squad" class="form-control" placeholder="Enter Issuer Squad">
                        </div>
                    
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Issuer Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="deletecode.php" method="POST">
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
    <div class = "container">
        <div class="jumbotron" style="background-color: #fff">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#issueraddmodal" style="background-color: #8EA4C8; border: none">
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
                                <th scope="col" style="background-color:#65c3ba">Issuer Code</th>
                                <th scope="col" style="background-color:#65c3ba">Issuing Agency</th>
                                <th scope="col" style="background-color:#65c3ba ">Issuer Precinct</th>
                                <th scope="col" style="background-color: #65c3ba">Issuer Command</th>
                                <th scope="col" style="background-color:#65c3ba">Issuer Squad</th>
                                <th scope="col" style="background-color:#65c3ba"> </th>
                                <th scope="col" style="background-color:#65c3ba"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($dbo->query('SELECT * from issuer ORDER BY issuer_code ASC LIMIT 50 ') as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row["summons_number"]; ?></td>
                                <td><?php echo $row["issuer_code"]; ?></td>
                                <td><?php echo $row["issuing_agency"]; ?></td>
                                <td><?php echo $row["issuer_precinct"]; ?></td>
                                <td><?php echo $row["issuer_command"]; ?></td>
                                <td><?php echo $row["issuer_squad"]; ?></td>
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
        $('#deletemodal').modal('show');
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
        $('#editmodal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text()
        }).get();
        console.log(data);
        $('#update_summons').val(data[0]);

        $('#issuer_code').val(data[1]);
        $('#issuing_agency').val(data[2]);
        $('#issuer_precinct').val(data[3]);
        $('#issuer_command').val(data[4]);
        $('#issuer_squad').val(data[5]);
    });
});

</script>
</html>