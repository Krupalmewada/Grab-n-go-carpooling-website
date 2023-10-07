<?php 
  include 'header.php';
?>
<?php
  $conn = getDbConn();
?>
<style>
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

  <!--navbar code starts here-->
  <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img src="images/logoSets/whitelogo.png" height="35px" width="40px"/></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('index.php','_self');"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-users"></i>About US</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('login.php','_self');"><i class="fas fa-user-alt"></i>Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="javascript:void(0);"onclick="window.open(' signup.php','_self');"><i class="fas fa-portrait"></i>Register</a>
                </li>
            </ul>
        </div>
    </nav>

  <!--navbar code starts here-->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="signup.php">Back
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

<!-- 
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>
        <li class="nav-item dropdown">
        
      </li>
      </ul>
      
      <a href="login.php"><button type="button" class="btn btn-outline-success">Log In</button></a>

    </div>
  </nav> -->

  <!-- Register as rider-->
<?php
//echo '<pre>'; print_r($conn); exit;
  // check connection
  /*if (!$conn){
    die("connection was not successful : ". mysqli_connect_error());
  } else {
    echo "connection was successful";
  }*/
  
  // inserting data into database
  if (isset($_POST['submit']) && $_POST['submit'] == 'register'){

    //echo '<pre>'; print_r($_POST); //exit;
    //echo '<pre>'; print_r($_FILES); //exit;
    

    $fileName = time().'-'.$_FILES['img']['name'];

    $status = move_uploaded_file($_FILES['img']['tmp_name'], 'Photo/rider/'.$fileName);
    /**$fname = $_POST["Fname"];
      $lname = $_POST["Sname"];
      $emailid = $_POST["Email"];
      $phoneno = $_POST["phone_no"];
      $password = $_POST["pass"];
      $dob = $_POST["age"];
      $gender = $_POST["gender"];
    //var_dump($status);
    //exit;
    // query to be executed

  $insert= "INSERT INTO rider(fname,lname,emailid,phoneno,pwd,dob,gender,photo) VALUES ($fname'],$_POST['Sname'],$_POST['Email'],$_POST['phone_no'],$_POST['pass'],$_POST['age'],$_POST['gender'],$fileName)"; */
    $insert = dbInsert('rider', [
      'fname' => $_POST["Fname"],
      'lname' => $_POST["Lname"],
      'emailid' => $_POST["email"],
      'phoneno' => $_POST["phone_no"],
      'pwd' => $_POST["pass"],
      'dob' => $_POST["age"],
      'gender' => $_POST["gender"],
      'photo' => $fileName,
    ]);
    //echo $insert; 
    //exit;
//$sql = mysqli_query($conn,$insert);

    // shows result of query in true or false
    //$result = mysqli_query(getDbConn(), $insert);

    // shows if data is insered successfully or not
    if($insert){
      echo ' </br>'.'<div class="alert alert-success" role="alert">
      Successfully registered go to : <a href="login.php" class="alert-link">
      log in now</a>
    </div>';

    } 
    else {
      echo '</br>'.'<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong> problem signing up</strong> enter correct details
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                      </div>';
    }
  }
  

 mysqli_close(getDbConn());
   
?>
  <h2 class="mx-5 mt-3">Register as Rider</h2>

  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mt-5">
        <div class="form-row mx-5">
          <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" required name="Fname" pattern="[A-Za-z]+">
          </div>

          <div class="form-group col-md-6">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" required name="Lname" pattern="[A-Za-z]+">
          </div>

          <div class="form-group col-md-6">
            <label for="email">Email Id</label>
            <input type="email" class="form-control" id="email" required name="email">
          </div>

          <div class="form-group col-md-6">
            <label for="contact_number">Mobile Number</label>
            <input type="text" minlength="10" maxlength="10" pattern="[0-9]+" class="form-control" id="phone_no" required name="phone_no">
          </div>

          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pass" required name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
          </div>

          <div class="form-group col-md-6">
            <label for="age">Birthdate</label>
            <input type="date" class="form-control" id="age" required name="age" max="2000-12-31" min="1980-01-01">
          </div>
        </div>

        <div class="input-group mb-3 ml-5 mt-3">
          <label>Select Image File:</label>
          <input style="margin-left:20px;" type="file" required id="img" name="img" accept="image/*">
        </div>

        

          <label for="gender" class="mr-3">Gender:</label>
          <label class=" active">
            <input type="radio" name="gender" id="option1" value="MALE" checked> MALE
          </label>
          <label class="">
            <input type="radio" name="gender" style="margin-left:10px;" id="option2" value="FEMALE"> FEMALE
          </label>
      

        <div class="container mt-4 mr-5 m-md-4">
          <button type="submit" class="btn btn-secondary" name="submit" value="register">Register</button>
        </div>
      </div>
    </form>
  </div>
  
</body>
</html>

