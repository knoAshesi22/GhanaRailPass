<?php
session_start();

?>

<form id="trainform" class="form-su" name="form" method="post" action="profilePages/cstation_validate.php" enctype="multipart/form-data" onsubmit="return(validate());"  >
    <fieldset>
        <legend>Create a new station here!</legend>

        <div class="form-group">
            <input type="text" class="form-control" name="sname" id="sname" placeholder="Enter Station Name" required>
        </div>


        <div class="form-group ">
            <button type="submit" class="btn btn-info btn-lg btn-block login-button">Create Stations</button>
        </div>

    </fieldset>
</form>



<div class="container py-5">
    <header class="text-center text-black">
        <h3 style="text-align: center;text-decoration: underline;">List of Stations</h3>
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
                                <th>Station Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include 'config.php';
                            $conn=connectDB();

                            $query = "SELECT * FROM Stations";
                            $result = $conn->query($query);
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
                                echo $row['name'];
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
