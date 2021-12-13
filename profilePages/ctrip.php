<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', 'root');
//define('DB_DATABASE', 'railpassv3');
//$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
include_once('./config.php');
$conn=connectDB();
?>

<form id="tripform" class="form-su" name="form" method="post" action="profilePages/ctrip_validate.php" enctype="multipart/form-data" onsubmit="return(validate());"  >
    <fieldset>
        <legend>Create a new trip here!</legend>

        <div class="form-group">
            <select class="form-control" name="origin" id="origin" required>
                <option value="" disabled selected hidden>Select Station of Origin</option>
                <?php

                $query = "SELECT * FROM Stations";
                $result = $conn->query($query);
                while($row = mysqli_fetch_array( $result )) {
                    $r1=$row['stationid'];
                    echo "<option value='$r1'>";
                    echo $row['name'];
                    echo "</option>";

                }

                ?>
            </select>
        </div>

        <div class="form-group">
            <select class="form-control" name="destination" id="destination" required>
                <option value="" disabled selected hidden>Select Destination Station</option>
                <?php

                $query = "SELECT * FROM Stations";
                $result = $conn->query($query);
                while($row = mysqli_fetch_array( $result )) {
                    $r1=$row['stationid'];
                    echo "<option value='$r1'>";
                    echo $row['name'];
                    echo "</option>";

                }

                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Starting Time: </label>
            <input type="time" class="form-control" name="start" id="start" placeholder="Starting Time" required>
        </div>

        <div class="form-group">
        <label>Ending Time: </label>
        <input type="time" class="form-control" name="end" id="end" placeholder="Ending Time" required>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" required>
        </div>

        <div class="form-group">
            <select class="form-control" name="train" id="train" required>
                <option value="" disabled selected hidden>Select Train</option>
                <?php

                $query = "SELECT * FROM Trains";
                $result = $conn->query($query);
                while($row = mysqli_fetch_array( $result )) {
                    $r1=$row['trainid'];
                    echo "<option value='$r1'>";
                    echo $row['name'];
                    echo "</option>";

                }

                ?>
            </select>
        </div>


        <div class="form-group ">
            <button type="submit" class="btn btn-info btn-lg btn-block login-button">Create Train</button>
        </div>

    </fieldset>
</form>


<div class="container py-5">
    <header class="text-center text-black">
        <h3 style="text-align: center;text-decoration: underline;">List of Trips</h3>
        <!--                <h5 class="display-5">Details</h5>-->
    </header>




    <div class="row py-5">
        <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body p-5 bg-white rounded">
                    <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Starting Station</th>
                                <th>Ending Station</th>
                                <th>Starting Time</th>
                                <th>Ending Time</th>
                                <th>Price</th>
                                <th>Train</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //include 'config.php';
                            $conn=connectDB();

                            $query = "SELECT * FROM Trips";
                            $q2="SELECT Stations.name AS o, Stations_d.name AS d, Trains.name AS t,Trips.startTime, Trips.endTime, Trips.price FROM Trips 
                            INNER JOIN Stations ON Stations.stationid=Trips.origin 
                            INNER JOIN Stations Stations_d ON Stations_d.stationid=Trips.destination INNER JOIN Trains ON Trains.trainid=Trips.train ";
                            $result = $conn->query($q2);
                            $count=0;
                            while($row = mysqli_fetch_array( $result )) {
//                                echo $row['name'];
//                                echo "<br />";
                                $count+=1;
                                echo "<tr>";
                                echo "<td>";
                                echo $count;
                                echo "</td>";
                                echo "<td>";
                                echo $row['o'];
                                echo "</td>";
                                echo "<td>";
                                echo $row['d'];
                                echo "</td>";
                                echo "<td>";
                                echo $row['startTime'];
                                echo "</td>";
                                echo "<td>";
                                echo $row['endTime'];
                                echo "</td>";
                                echo "<td>";
                                echo $row['price'];
                                echo "</td>";
                                echo "<td>";
                                echo $row['t'];
                                echo "</td>";
                                echo "</tr>";






                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

