<?php
   error_reporting(E_ERROR | E_PARSE);
    include 'header.php';
    if(!isset($_SESSION["loggedin"])){
      $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
      header('Location: ' . $home_url);
        exit;
      }
?>

<style>
#div1{
    /* border:2px solid black; */
    display:flex;
    padding-left:35px;
    /* justify-content: center;  */
  	align-items: center;
    padding-top:20px;
    height:40px;
    font-size:25px;
    font-weight:bold;
}
.div1{
	color:black;
	position:relative;
	left:35%;
	top:20%;
	height:400px;
	width:400px;
	display:block;
	background-color: rgba(255, 255, 255);
	/* opacity:0.7; */
	box-shadow:6px 6px 10px 0px black;
}
.divs:hover a{
	color:black;
}
.div2:hover {
    background-color: rgba(265, 265, 265, 0.7); /* Change background color when hovering */
	color:black;
	font-weight:bold;

  }
.divs:hover {
    background-color: rgba(265, 265, 265, 0.70); /* Change background color when hovering */
	color:black;
	font-weight:bold;
  }
  .body{
    background-image:url("images/others/3 (1).jpg");
  }
  .card-img-top{
    width:100%;
    height: 100%;
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    filter: blur(1px);
    
  }
  .navbar{
    background-color: black;
    
  }
  @import url('https://fonts.googleapis.com/css?family=Roboto');

body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}
/*----------bootstrap-navbar-css------------*/
.navbar-logo{
	padding: 15px;
	color: #fff;
}
.navbar-mainbg{
	background-color: #272727;
	padding: 0px;
}
#navbarSupportedContent{
	overflow: hidden;
	position: relative;
}
#navbarSupportedContent ul{
	padding: 0px;
	margin: 0px;
}
#navbarSupportedContent ul li a i{
	margin-right: 10px;
}
#navbarSupportedContent li {
	list-style-type: none;
	float: left;
}
#navbarSupportedContent ul li a{
	color: rgba(255,255,255,0.5);
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
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
.hori-selector{
	display:inline-block;
	position:absolute;
	height: 100%;
	top: 0px;
	left: 0px;
	transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	background-color: #fff;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
	position: absolute;
	width: 25px;
	height: 25px;
	background-color: #fff;
	bottom: 10px;
}
.hori-selector .right{
	right: -25px;
}
.hori-selector .left{
	left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before{
	content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #272727;
}
.hori-selector .right:before{
	bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
	bottom: 0;
    left: -25px;
}


@media(min-width: 992px){
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
	    display: -ms-flexbox!important;
	    display: flex!important;
	    -ms-flex-preferred-size: auto;
	    flex-basis: auto;
	}
}


@media (max-width: 991px){
	#navbarSupportedContent ul li a{
		padding: 12px 30px;
	}
	.hori-selector{
		margin-top: 0px;
		margin-left: 10px;
		border-radius: 0;
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}
	.hori-selector .left,
	.hori-selector .right{
		right: 10px;
	}
	.hori-selector .left{
		top: -25px;
		left: auto;
	}
	.hori-selector .right{
		bottom: -25px;
	}
	.hori-selector .left:before{
		left: -25px;
		top: -25px;
	}
	.hori-selector .right:before{
		bottom: -25px;
		left: -25px;
	}
    

}
</style>
<script>
  // ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top":itemPosNewAnimTop.top + "px", 
			"left":itemPosNewAnimLeft.left + "px",
			"height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}
$(document).ready(function(){
	setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function(){ test(); });
});


// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
	// Get current path and find target link
	var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
	if ( path == '' ) {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
	// Add active class to target link
	target.parent().addClass('active');
});

</script>
<body>
<!--navbar code starts here-->
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img src="images/logoSets/whitelogo.png" height="35px" width="40px"/></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('poolerHome.php','_self'); target='_self'"><i class="fas fa-home"></i>Home</a>
                </li>
                
                <li class="nav-item ">
                <a class="nav-link" href="javascript:void(0);"onclick="window.open('riderlist.php','_self');"><i class="fas fa-car-alt"></i>Rider List</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('logout.php','_self');"><i class="fas fa-user-alt"></i>LogOut</a>
                </li>
                
            </ul>
        </div>
    </nav>
</style>
<?php include'sidebar.php';

  if($_SESSION['user_type'] == 'pooler' && isset($_GET['p_editprofile'])){
    //Code to display data of rider
    if($_SESSION['user_type'] == 'pooler')
    {
      //Query to edit data
      $change = false;
      if(isset($_POST['Edit']) == "Update")
      {
        $user_id = $_SESSION['user_id'];
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $date_of_birth = $_POST['date_of_birth'];
        $new_image = "";

        if(isset($_FILES['img']['name']))
        {
          $fileName = time().'-'.$_FILES['img']['name'];
          $status = move_uploaded_file($_FILES['img']['tmp_name'], 'photo/pooler/'.$fileName);
          if($status)
          {
            $new_image = $fileName;
          } 
        }

        if($new_image!="")
        {
          $edit = "Update pooler SET fname = '$first_name', lname = '$last_name', pwd = '$password', emailid = '$email', phoneno = '$contact_number', dob = '$date_of_birth', photo = '$new_image' where p_id = '$user_id' ";
        }
        else
        {
          $edit = "Update pooler SET fname = '$first_name', lname = '$last_name', pwd = '$password',  emailid = '$email', phoneno = '$contact_number', dob = '$date_of_birth' where p_id = '$user_id' ";
        }

        $result = mysqli_query($conn, $edit);
        //$num = mysqli_num_rows($result);
        // Query to edit data ends here
        // Code for alters update or not
        if ($result == 1)
        {
          echo '<div style="margin-left: 210px;" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Succes!</strong> Your data has been updated.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_POST);
        header("Location: ".$_SERVER['PHP_SELF']);
        }
        else
        {
          echo '<div style="margin-left: 210px;" class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Fail!</strong> Your data has not been updated.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_POST);
        header("Location: ".$_SERVER['PHP_SELF']);
        }
      }
        
      $sql = "SELECT * FROM pooler where p_id = '".$user_id."'";
      $result = mysqli_query($conn, $sql);
      $first_name = "";
      $last_name = "";
      $password = "";
      $address = "";
      $contact_no = "";
      $date_of_birth = "";
      $image = "";
      // code to fetch data
      while ($row = mysqli_fetch_array($result))
      {
        $first_name = $row['fname'];
        $last_name = $row['lname'];
        $password = $row['pwd'];
        $email = $row['emailid'];
        $contact_number = $row['phoneno'];
        $date_of_birth = $row['dob'];
        $image = $row['photo'];
      }
      // code for fetch data end
    }
  ?>
<div class="right_content">
    <h3>Edit Profile</h3>
    <!--CSS for <h3> tag-->
    <style>
    h3 {
        text-align: center;
        margin-top: 2px;
    }
    </style>
    <!-- Form to display and edit data -->
    <form class="row g-3" style="margin-top:20px;" method="POST" enctype="multipart/form-data" action="">
        <div class="text-center">
            <img style="width:120px; height:125px; border-radius: 50%;" src="photo/pooler/<?php echo "$image"; ?>" />
        </div>
        <div class="text-center">
            <input type="file" id="img" name="img" class="my_file" />
        </div>
        <div class="col-md-6">
            <label for="first_Name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_Name" name="first_name"
                value="<?php echo "$first_name"; ?>" />
        </div>
        <div class="col-md-6">
            <label for="last_Name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_Name" name="last_name"
                value="<?php echo "$last_name"; ?>" />
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                value="<?php echo "$password"; ?>" />
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo "$email"; ?>" />
        </div>
        <div class="col-md-4">
            <label for="contact_number" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number"
                value="<?php echo "$contact_number"; ?>" />
        </div>
        <div class="col-md-6">
            <label for="date_of_birth" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                value="<?php echo "$date_of_birth"; ?>" />
        </div>
        <div class="col-12" style="margin-top:30px;">
            <button type="submit" class="btn btn-primary" name="Edit" id="Edit">Update</button>
        </div>
    </form>
    <!-- Form codes for displaying and editing ends-->
</div>
<?php
      }





        else if($_SESSION['user_type'] == 'pooler' && isset($_GET['history'])){
      //history
      ?>
<div class="right_content">
    <h3>History</h3>
    <!--CSS for <h3> tag-->
    <style>
    h3 {
        text-align: center;
        margin-top: 2px;
    }
    </style>
    <?php 
        $select = "SELECT * FROM `r_req` where status='Accept' AND p_id = ".$user_id;
        $res = mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($res))
        {
          $r_id = $row["r_id"];
          $fromm = $row["from_"];
          $too = $row["to_"];
          $date = $row["date"];
          $time = $row["time"];
        
    $sql = "SELECT * FROM `rider` where r_id = ".$r_id;
    $result = mysqli_query($conn, $sql);
    $r_id = 0;

    while($row = mysqli_fetch_assoc($result)){     
    $photo = $row["photo"];
    $r_id = $row["r_id"];
?>


    <div class="card mb-3 mt-5 ml-5" style="max-width: 900px;border:2px solid black;">
        <div class="row no-gutters">
            <div class="col-md-4">
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
                        <li class="list-group-item">Email id:
                            <?php echo $row["emailid"]; ?>
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
                    <a class="btn btn-outline-primary" style="margin-left:30px"
                        href="r_feedback.php?r_id=<?php echo $r_id; ?>" role="button">Give Feedback</a>
                </div>
            </div>
        </div>
    </div>


    <?php
    $r_id = $r_id + 1;
    }
  }
?>
</div>
<?php
      }

else if($_SESSION['user_type'] == 'pooler' && isset($_GET['request_ride'])){
      //requested ridesss

      ?>
<div class="right_content">
    <h3 >Requested Rides</h3>
    <!--CSS for <h3> tag-->
    <style>
    h3 {
        text-align: center;
        margin-top: 2px;
    }
    </style>
    
    <form method="post" action="">
    <?php 


        $select = "SELECT * FROM `r_req` where status='pending' AND p_id = ".$user_id;
        $res = mysqli_query($conn,$select);
        while($row = mysqli_fetch_assoc($res))
        {
          $r_id = $row["r_id"];
          $fromm = $row["from_"];
          $too = $row["to_"];
          $date = $row["date"];
          $time = $row["time"];
          $rr_id = $row["rr_id"];
        
    $sql = "SELECT * FROM `rider` where r_id = ".$r_id;
    $result = mysqli_query($conn, $sql);
    $r_id = 0;

    while($row = mysqli_fetch_assoc($result)){     
    $photo = $row["photo"];
    $r_id = $row["r_id"];
?>


    <div class="card mb-3 mt-5 ml-5" style="max-width: 900px;border:2px solid black;">
        <div class="row no-gutters">
            <div class="col-md-4">
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
                        <li class="list-group-item">Email id:
                            <?php echo $row["emailid"]; ?>
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
                        <li class="list-group-item">
                        <button class='delete btn btn-sm btn-primary' name='delete' id='delete' value=<?php $rr_id ?> >Delete</button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>


    <?php
    $r_id = $r_id + 1;


    }
    
  }

  
?>
</form>
</div>
<?php
      }else if($_SESSION['user_type']== 'pooler')
      {
        $sql = "SELECT * FROM pooler where p_id = '".$user_id."'";
            $result = mysqli_query($conn, $sql);
            $first_name = "";
            $last_name = "";
            $password = "";
            $address = "";
            $contact_no = "";
            $date_of_birth = "";
            $image = "";
            // code to fetch data
            while ($row = mysqli_fetch_array($result))
            {
              $first_name = $row['fname'];
              $last_name = $row['lname'];
              $password = $row['pwd'];
              $email = $row['emailid'];
              $contact_number = $row['phoneno'];
              $date_of_birth = $row['dob'];
              $image = $row['photo'];
              $gender = $row['gender'];
            }
            ?>
             <div class="card mb-3 mt-5 ml-5" style="max-width: 900px;">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="photo/pooler/<?php echo $image; ?>" class="card-img">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h4 class="card-title">
                              <?php echo $first_name; echo " "; echo $last_name; ?>
                          </h4>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item">Mobile Number:
                                  <?php echo $contact_number; ?>
                              </li>
                              <li class="list-group-item">Email id:
                                  <?php echo $row["email_id"]; ?>
                              </li>
                              <li class="list-group-item">Gender:
                                  <?php echo $gender; ?>
                              </li>
                              <li class="list-group-item">Password:
                                  <?php echo $password; ?>
                              </li>
                              <li class="list-group-item">Date of birth:
                                  <?php echo $date_of_birth; ?>
                              </li>
                              
                          </ul>
                          
                         
      
                      </div>
                  </div>
              </div>
          </div>
         <?php   
      }
      ?>
    
    </body>
    </html>
    