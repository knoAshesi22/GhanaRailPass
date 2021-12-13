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



<div class="container py-5">
    <header class="text-center text-black">
        <h3 style="text-align: center;text-decoration: underline;">List of Available Trips</h3>
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
                                <th>Booking</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //include 'config.php';
                            $conn=connectDB();

//                            $q2="SELECT Stations.name AS o, Stations_d.name AS d, Trains.name AS t,Trips.startTime, Trips.endTime, Trips.price FROM Trips
//                            INNER JOIN Stations ON Stations.stationid=Trips.origin
//                            INNER JOIN Stations Stations_d ON Stations_d.stationid=Trips.destination INNER JOIN Trains ON Trains.trainid=Trips.train
//                            WHERE  Trips.startTime>DATE_SUB(NOW(), INTERVAL 30 MINUTE";


                            $q2="SELECT Stations.name AS o, Stations_d.name AS d, Trains.name AS t,Trips.startTime, Trips.endTime, Trips.price, Trips.tripid FROM Trips 
                            INNER JOIN Stations ON Stations.stationid=Trips.origin 
                            INNER JOIN Stations Stations_d ON Stations_d.stationid=Trips.destination INNER JOIN Trains ON Trains.trainid=Trips.train
                            WHERE  Trips.startTime>= cast(now() as time)";

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

                                echo "<td>";
                                echo "<button onclick='return book_func(".$row['tripid'].")'>Book</button>";
//                                echo "<input type='submit' value='Book'>";
                                echo "</td>";

                                $r1=$_SESSION['userid'];
                                $r2=$row['tripid'];
                                $q1="INSERT INTO Orders (customer_id, trip_id) VALUES ('$r1','$r2')";


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


