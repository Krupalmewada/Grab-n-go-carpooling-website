<?php
session_start();
include 'config/config.php';

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/star.css" rel="stylesheet"/>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<title>Grab'n Go</title>
</head>
<body style="height: 100vh;">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Logo 
<div class="text-center">
    <img src="images/logoSets/logo3.png" class="img-fluid" alt="Responsive image">
  </div> -->
<?php
//include'header.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["emailid"];
    $password = $_POST["password"];

   // if(!isset($_POST['']))
    //{
      //  $showError = "Select login type";
    //}
    // for petowner
        $sql = "Select a_id, emailid, password from admin where emailid ='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql); 
        $row = $result->fetch_assoc();
        $num = mysqli_num_rows($result);
        if ($num == 1)
        {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $row['email'];
            $_SESSION['user_type'] = $_POST['admin'];
            $_SESSION['user_id'] = $row['a_id'];
            header("location: arider.php");
        } 
        else
        {
            $showError = "Invalid email or password";
        }
    }
?>

        <!--navbar code starts here-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href=""></a>
                </li>
            </ul>
            <a href="signup.php"><button type="button" class="btn btn-outline-success">Register</button></a>
    </div>
  </nav> -->
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
<img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1400&q=80" class="card-img-top" alt="..." >
<body>
<!--navbar code starts here-->
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#"><img src="/gng/images/logoSets/whitelogo.png" height="35px" width="40px"/></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                
                
                
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('index.php','_self');"><i class="fas fa-user-alt"></i>Login</a>
                </li>
               
            </ul>
        </div>
    </nav>
	<div class="div1">
        <form method = "post">
            <div id="div1">LOGIN</div>
            <div class="form-group w-75 p-3 mx-4">
            <label for="email_id" style="padding-top:20px;">Email address</label>
            <input type="email" class="form-control " id="emailid" name = "emailid" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <div class="form-group w-75 p-3 mx-4" style="margin-top:-40px;">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group w-75 p-3 mx-4">
            <div class="btn-group" role="group" aria-label="Basic example">
            
            <button type="submit" name="adminn" id="adminn" style="border-radius:5px;margin-left:5px;background-color:black; margin-top:-20px;" class="btn btn-primary ml-12" required>Log in</button>
            <!-- 
            <button type="submit" name="pooler" id="pooler" style="border-radius:5px;margin-left:5px;background-color:black;" class="btn btn-secondary" value="pooler" required>Pooler</button> -->
            </div>
            </div>
        </form>
	</div>

    
  <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" style="height:100px;width:200px;position:relative; left:50%;""role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    
</body>
</html>
