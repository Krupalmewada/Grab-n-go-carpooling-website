<?php 
//connectting to database
include("header.php");
$conn = getDbConn();
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#272727;">
    <div class="container-fluid">
    <?php
    if(isset($_SESSION["loggedin"]))
    {
      ?>
    <a class="navbar-brand" href="poolerHome.php">Back</a>
    <?php
    }
    else
    {
      ?>
    <a class="navbar-brand" href="index.php">Back</a>
      <?php
    }
    ?>
      <!--  <a class="navbar-brand" href="index.php">Back</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <form class="d-flex" role="search" method="post" action="ridesearch.php">
        <input class="form-control me-2" type="search" placeholder="From" aria-label="Search" name="fromm" id="fromm">
        <input class="form-control me-2" type="search" placeholder="To" aria-label="Search" name="too" id="too">
        <button class="btn btn-outline-success" type="submit" name="search" id="search" value="search" onclick="onclick_but()">Search</button>
      </form>
</nav>

<h1 >Ride List</h1>
        <!--CSS for <h1> tag-->
      <style>
        body{
            background-color:rgba(0,0,0,0.9);
        }
          h1
          {
            text-align:center;
            color:white;
            margin-top:20px;
          }
        </style>
<!-- cards -->
<script type="text/javascript">
    function onclick_but()
    {
        if (isset($_POST["search"])){
    //echo "hello";
    $fromm = $_POST["fromm"];
    $too = $_Post["too"];
    echo $fromm;
    echo $too;
        }
    }
    </script>


<?php 
$ra_id = 0;
    $sql = "SELECT * FROM `rideadd`";
    $result = mysqli_query($conn, $sql);
    

    while($r = mysqli_fetch_assoc($result)){     
    //$photo = $row["photo"];
    $ra_id = $r["ra_id"];
    $fromm = $r["from_"];
    $too = $r["to_"];
    $date = $r["date"];
    $time = $r["time"];
    $r_id = $r["r_id"];
    $carname = $r["carname"];
    $price = $r["price"];
        
    $sql = "SELECT * FROM `rider` where r_id = ". $r_id;
    $res = mysqli_query($conn, $sql);
    $r_id = 0;

    while($row = mysqli_fetch_assoc($res)){     
    $photo = $row["photo"];
    $r_id = $row["r_id"];

?>



    <div class="card mb-3 mt-5 ml-5" style="margin-right: 50px;">
        <div class="row no-gutters">
            <div class="col-md-2">
                <img src="photo/rider/<?php echo $photo; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $row["fname"]; echo " "; echo $row["lname"]; ?>
                    </h5>
                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mobile Number:
                            <?php echo $row["phoneno"]; ?>
                        </li>
                        <li class="list-group-item">Gender:
                            <?php echo $row["gender"]; ?>
                        </li>
                        
                        
                        <li class="list-group-item">email id:
                            <?php echo $row["emailid"]; ?>
                        </li>

                        
                        <li class="list-group-item">Rating: 
                        <?php
                            //Query to display the average of the rating
                           $avg = "SELECT FORMAT(AVG(DISTINCT rating), 0) AS average FROM r_feedback where r_id = ".$r_id;
                            $res1= mysqli_query($conn, $avg);
                            $row1 = mysqli_fetch_assoc($res1);
                            $average = $row1['average'];
                            if($average != NULL)
                            {
                                echo $average . "/5";
                            }
                            else
                            {
                                echo "0/5";
                            }
                        ?>
                        </li>
                        <li class="list-group-item">Car name:
                            <?php echo $carname; ?>
                        </li>
                        <li class="list-group-item">Price per km:
                            <?php echo $price; ?>
                        </li>
                        <li class="list-group-item">From:
                            <?php echo $fromm; ?>
                        </li>

                        <li class="list-group-item">To:
                            <?php echo $too; ?>
                        </li>

                        <li class="list-group-item">Date:
                            <?php echo $date; ?>
                        </li>

                        <li class="list-group-item">Time:
                            <?php echo $time; ?>
                        </li>

                    </ul>
                        
                    <a class="btn btn-outline-primary" href="r_req.php?r_id=<?php echo $r_id; ?>" role="button">Send Request</a>
                   

                </div>
            </div>
        </div>
    </div>


<?php
    }
    $ra_id = $ra_id + 1;
    }
?>


<?php
include 'footer.php';
?>