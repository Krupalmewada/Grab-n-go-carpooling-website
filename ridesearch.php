<?php 
//connectting to database
include("header.php");
$conn = getDbConn();
?>

<style>
.card-img-top {
    width: 100%;
    height: 100%;
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    filter: blur(1px);

}

.navbar {
    background-color: black;

}

@import url('https://fonts.googleapis.com/css?family=Roboto');

body {
    font-family: 'Roboto', sans-serif;
    background-color: rgba(0, 0, 0, 0.9);
}

* {
    margin: 0;
    padding: 0;
}

i {
    margin-right: 10px;
}

/*----------bootstrap-navbar-css------------*/
.navbar-logo {
    padding: 15px;
    color: #fff;
}

.navbar-mainbg {
    background-color: #272727;
    padding: 0px;
}

#navbarSupportedContent {
    overflow: hidden;
    position: relative;
}

#navbarSupportedContent ul {
    padding: 0px;
    margin: 0px;
}

#navbarSupportedContent ul li a i {
    margin-right: 10px;
}

#navbarSupportedContent li {
    list-style-type: none;
    float: left;
}

#navbarSupportedContent ul li a {
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration: 0.6s;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}

#navbarSupportedContent>ul>li.active>a {
    color: #5161ce;
    background-color: transparent;
    transition: all 0.7s;
}

#navbarSupportedContent a:not(:only-child):after {
    content: "\f105";
    position: absolute;
    right: 20px;
    top: 10px;
    font-size: 14px;
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    font-weight: 900;
    transition: 0.5s;
}

#navbarSupportedContent .active>a:not(:only-child):after {
    transform: rotate(90deg);
}

.hori-selector {
    display: inline-block;
    position: absolute;
    height: 100%;
    top: 0px;
    left: 0px;
    transition-duration: 0.6s;
    transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    background-color: #fff;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    margin-top: 10px;
}

.hori-selector .right,
.hori-selector .left {
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #fff;
    bottom: 10px;
}

.hori-selector .right {
    right: -25px;
}

.hori-selector .left {
    left: -25px;
}

.hori-selector .right:before,
.hori-selector .left:before {
    content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #272727;
}

.hori-selector .right:before {
    bottom: 0;
    right: -25px;
}

.hori-selector .left:before {
    bottom: 0;
    left: -25px;
}


@media(min-width: 992px) {
    .navbar-expand-custom {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .navbar-expand-custom .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row;
    }

    .navbar-expand-custom .navbar-toggler {
        display: none;
    }

    .navbar-expand-custom .navbar-collapse {
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto;
    }
}


@media (max-width: 991px) {
    #navbarSupportedContent ul li a {
        padding: 12px 30px;
    }

    .hori-selector {
        margin-top: 0px;
        margin-left: 10px;
        border-radius: 0;
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
    }

    .hori-selector .left,
    .hori-selector .right {
        right: 10px;
    }

    .hori-selector .left {
        top: -25px;
        left: auto;
    }

    .hori-selector .right {
        bottom: -25px;
    }

    .hori-selector .left:before {
        left: -25px;
        top: -25px;
    }

    .hori-selector .right:before {
        bottom: -25px;
        left: -25px;
    }

    a .div1 {
        margin-left: 100px !important;
        padding-left: 100px;
    }


}
</style>
<script>
// ---------Responsive-navbar-active-animation-----------
function test() {
    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
        "top": itemPosNewAnimTop.top + "px",
        "left": itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click", "li", function(e) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
        var activeWidthNewAnimHeight = $(this).innerHeight();
        var activeWidthNewAnimWidth = $(this).innerWidth();
        var itemPosNewAnimTop = $(this).position();
        var itemPosNewAnimLeft = $(this).position();
        $(".hori-selector").css({
            "top": itemPosNewAnimTop.top + "px",
            "left": itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}
$(document).ready(function() {
    setTimeout(function() {
        test();
    });
});
$(window).on('resize', function() {
    setTimeout(function() {
        test();
    }, 500);
});
$(".navbar-toggler").click(function() {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function() {
        test();
    });
});


// --------------add active class-on another-page move----------
jQuery(document).ready(function($) {
    // Get current path and find target link
    var path = window.location.pathname.split("/").pop();

    // Account for home page with empty path
    if (path == '') {
        path = 'index.html';
    }

    var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
    // Add active class to target link
    target.parent().addClass('active');
});
</script>

<body>
    <!--navbar code starts here-->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <?php
    if(isset($_SESSION["loggedin"]))
    {
      ?>
        <a class="div1 navbar-brand" href="poolerHome.php" style="margin-left:40px; color:white;">Back</a>
        <?php
    }
    else
    {
      ?>
        <a class="navbar-brand div1" href="riderlist.php" style="margin-left:40px; color:white;">Back</a>
        <?php
    }
    ?>


    </nav>

    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <form class="d-flex" role="search" method="post" action="ridesearch.php">
        <input class="form-control me-2" type="search" placeholder="From" aria-label="Search" name="fromm" id="fromm">
        <input class="form-control me-2" type="search" placeholder="To" aria-label="Search" name="too" id="too">
        <button class="btn btn-outline-success" type="submit" name="search" id="search" value="search" onclick="onclick_but()">Search</button>
      </form>
</nav> -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> -->


    <h1 style="margin-top:20px; color:white;">Ride List</h1>
    <!--CSS for <h1> tag-->
    <style>
    h1 {
        text-align: center;
        margin-top: 2px;
    }
    </style>
    <?php
if (isset($_POST["search"])){
    //echo "hello";
    $fromm = $_POST["fromm"];
    $too = $_POST["too"];
?>
    <?php 
$ra_id = 0;
    $sql = "SELECT * FROM `rideadd` where from_ = '$fromm' AND to_ = '$too'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {

    while($r = mysqli_fetch_assoc($result)){   
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

    <style>
    .card {
        flex-direction: row;
        align-items: center;
    }

    .card-title {
        font-weight: bold;
    }

    .card img {
        width: 30%;
        border-top-right-radius: 0;
        border-bottom-left-radius: calc(0.25rem - 1px);
    }

    @media only screen and (max-width: 768px) {
        a {
            display: none;
        }

        .card-body {
            padding: 0.5em 1.2em;
        }

        .card-body .card-text {
            margin: 0;
        }

        .card img {
            width: 50%;
        }
    }

    @media only screen and (max-width: 1200px) {
        .card img {
            width: 40%;
        }
    }

    td {
        padding: 6px;
    }
    </style>
    <div class="card" style="margin:60px;">
        <div class="card-title">
            <img src="photo/rider/<?php echo $photo; ?>" class="card-img"
                style="margin-left:50px;height:100px display:float;width:100px; border-radius:50%;" />
            <h5 style="display:float;margin-left:50px;margin-top:20px;">
                <?php echo $row["fname"]; echo " "; echo $row["lname"]; ?>
            </h5>
            <span style="margin-left:50px;margin-top:20px;">Rating:
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
            </span>
        </div>
        <div class="card-body">

            <div class="card-text" style="display:inline-block; clear:both;margin-left:100px;">
                <h3>RIDER DETAILS</h3>

                <table>
                    <tr>
                        <td>
                            Mobile Number:
                        </td>
                        <td>
                            <?php echo $row["phoneno"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender:
                        </td>
                        <td>
                            <?php echo $row["gender"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            email id:
                        </td>
                        <td>
                            <?php echo $row["emailid"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Rating:
                        </td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <a href="r_req.php?r_id=<?php echo $r_id; ?>" class="btn btn-primary"
                                style="margin-top:30px;">Send Request</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="card-text" style="display:inline-block; clear:both; margin-left:100px;">
                <h3>TRIP DETAILS</h3>
                <table>
                <tr>
                        <td>
                            Car name:
                        </td>
                        <td>
                            <?php echo $carname; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Price per km:
                        </td>
                        <td>
                            <?php echo $price; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            From:
                        </td>
                        <td>
                            <?php echo $fromm; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            To:
                        </td>
                        <td>
                            <?php echo $too; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date:
                        </td>
                        <td>
                            <?php echo $date; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Time:
                        </td>
                        <td>
                            <?php echo $time; ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>




    </div>
    <!-- 
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
    </div> -->


    <?php
    }
    $ra_id = $ra_id + 1;
    }
}
else
{
    echo "<h1 style='color:white;'>Sorry! No rides are available for these </h1>";
}
?>
    <?php
}
?>