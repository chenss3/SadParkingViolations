<!DOCTYPE html>
<html>
    <head>
        <title> HTML Cheat Sheet </title>
    </head>
    <body>
        <h1> Heading One </h1>
        <h2> Heading Two</h2>
        <table>
            <tr>
                <th>summons_number</th>
                <th>plate_id</th>
                <th>registration_state</th>
            </tr>
            <?php

            try {
            $dbhost = '127.0.0.1'; // localhost
            $dbuname = 'root';
            $dbpass = 'root';
            $dbname = 'parkingviolations'; //Database name

            $dbo = new PDO('mysql:host=' . $dbhost . ';port=8889;dbname=' . $dbname, $dbuname, $dbpass);
            foreach($dbh->query('SELECT * from ParkingViolationsMegaTable LIMIT 5') as $row) {
                print_r($row);
            }
            $dbh = null;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }

            
            /*
            $host="127.0.0.1";
            $username = "root";
            $password = "";
            $database = "parkingviolations";
            
            $mysqli = new mysqli($host,$username,$password, $database);


            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
                exit();
            } else {
                echo "Connect Succesfully. Host info: " . $mysqli->host_info;
            }
            */

            /*
            $host='localhost';
            $username = "root";
            $password = "";
            $database = "parkingviolations";
            $con=mysqli_connect($host,$user,$pass, $database);
            if($con === false){
                die("ERROR: Could not connect." . $mysql->connect_error);
            }
            echo "Connect Succesfully. Host info " . $mysql->host_info; */
            $summons_number = 'summons_number';
            $plate_id= 'plate_id';
            $registration_state = 'registration_state';
            $q="SELECT summons_number, plate_id, registration_state FROM ParkingViolationsTable LIMIT 10";
            $r=mysqli_query($mysqli,$q);
            var_dump($r);
            while($rows=mysqli_fetch_assoc($r)){
                echo "summons_number :".$rows[$summons_number]."<br />"."plate_id :".$rows[$plate_id]."<br />"."registration_state :".$rows[$registration_state]."<br />";
            }
            $mysqli -> close();
            /*
            $conn = mysqli_connect("localhost", "root", "", "parkingviolations");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "<p>Connected to MySQL!</p>";
            }

            $sql = "SELECT summons_number, plate_id, registration_state FROM ParkingViolationsMegaTable";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["summons_number"]. "</td><td>" . $row["plate_id"] . "</td><td>". $row["registration_state"]. "</td></tr>";
                }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            */
            ?>
        </table>
    </body>
</html>