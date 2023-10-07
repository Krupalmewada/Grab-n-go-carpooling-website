<?php
    include 'config/config.php';
    $conn = getDbConn();
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
<style>
.divs a{color:white;}
.divs{
	text-decoration:none;
	position:relative;
		clear:both;
		border:2.5px solid white;
		height:33px;
		width:300px;
		display: flex;
		left:35px;
		top:50px;
		justify-content: center; 
  		align-items: center;
		margin-top:30px;
		border-radius:8px;
		color: white;
		
	}
.div2{
	float:left;
	border:2.5px solid white;
	height:160px;
	width:180px;
	border-radius: 20%;
	margin-left:10px;
	margin-top:10px;
	display: flex;
  	justify-content: center; 
  	align-items: center;
	font-size:30px;
	color:white;
	
}
.div1{
	
	position:relative;
	left:100px;
	top:100px;
	height:400px;
	width:400px;
	display:block;
	background-color: rgba(0, 0, 0, 0.95);
	border:3px solid grey; 
	opacity:0.7;
	box-shadow:10px 7px 10px 0px grey;
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
    opacity:0.9;
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
<img src="https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1973&q=80" style="filter:blur(4px);opacity:0.8;" class="card-img-top" alt="..." >
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
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('index.php','_self');"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('contactus.php','_self');"><i class="far fa-address-book"></i>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('aboutus.php','_self');"><i class="fas fa-users"></i>About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('riderlist.php','_self');"><i class="fas fa-car-alt"></i>Rider List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('login.php','_self');"><i class="fas fa-user-alt"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open(' signup.php','_self');"><i class="fas fa-portrait"></i>Register</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- Code to retrive same data in the form
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->

<?php
    if (isset($_POST["sub"])){
        $query = dbInsert('contactUs', [
        'fname' => $_POST["Fname"],
        'lname' => $_POST["Lname"],
        'emailid' => $_POST["email"],
        'message' => $_POST["message"],
        ]);
      if($query){
        echo ' </br>'.'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your request has been sent.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      } 
      else {
        echo '</br>'.'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Problem!</strong> Enter proper details
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    }
    
?>

<div class="div1 " style="color:white;height:450px;margin-left:400px;">
        <form method = "post">
            <div id="div1" style="margin-left:10px;margin-top:10px;">Contact US</div>
            <div class="form-group w-75 p-3 mx-4 m-0">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" required name="Fname">
            
            
            
            <label for="fname">Last Name</label>
            <input type="text" class="form-control" id="lname" required name="Lname">
            

        
            <label for="email">Email Id</label>
            <input type="email" class="form-control" id="email" required name="email">

            <label for="msg">Message</label>
            <textarea id="message" name="message" required class="form-control" style="height: 80px;"> </textarea>
            
            <button type="submit" class="btn" style="border:2px solid white;border-radius:5px;margin-left:5px;background-color:grey;color:black;margin-top:7px;font-weight:bold;" name="sub" value="sub" >Send Message</button>
            </div>

            </div>
            </div>
        </form>
	</div>
<!-- <h3>Contact US</h3> -->
<!--CSS for <h3> tag-->
    <!-- <style>
        h3 {
            text-align: center;
            margin-top: 10px;
            <div style="border:2px solid black;display:inline-block;">
    }
</style>
<form action="" method="POST">
<div class="form-row mx-5" style="padding-left:30%">
    <div class="form-group col-md-6">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" required name="Fname">
    </div>
    <div class="form-group col-md-6">
</div>
    <div class="form-group col-md-6">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" required name="Lname">
    </div>
    <div class="form-group col-md-6">
</div>
    <div class="form-group col-md-6">
        <label for="email">Email Id</label>
        <input type="email" class="form-control" id="email" required name="email">
    </div>
    <div class="form-group col-md-6">
</div>
    <div class="form-group col-md-6">
        <label for="msg">Message</label>
        <textarea id="message" name="message" required class="form-control" style="height: 150px;"> </textarea>
    </div>

    <div class="container mt-4 mr-5 m-md-4">
        <button type="submit" class="btn btn-dark" name="sub" value="sub">Send Message</button>
    </div>
</div>    
</form>
</div> -->

<?php
include "footer.php";
?>