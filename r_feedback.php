<?php
    include 'header.php';
    $conn = getDbConn();
    if(!isset($_SESSION["loggedin"])){
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
        header('Location: ' . $home_url);
          exit;
        }
?>
<?php
    $r_id = $_GET["r_id"];
?>
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
	background-color: rgba(0, 0, 0, 0.85);
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
  body{
    /* background-image:url("images/others/3 (1).jpg"); */
    background-color:rgba(0,0,0,0.8);
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

<body>
<!--navbar code starts here-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:0px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="poolerHome.php">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>


<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="poolerHome.php?history">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav> -->


<?php
    $dt = date('Y-m-d');
    $p_id = $_SESSION['user_id'];
    if (isset($_POST["submit"]) == "submit"){
        $query = dbInsert('r_feedback', [
            'feedback_date' => $dt,
            'r_id' => $r_id,
            'p_id' => $p_id,
            'rating' => $_POST['star'],
 ]);
 if($query){
    echo ' </br>'.'<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your feedback has been sent.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  //header('Location:poolerHome.php');
  } 
  else {
    echo '</br>'.'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Problem!</strong> Enter proper details
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }        
}
        ?>



<h1>Feedback</h1>
<!--CSS for <h3> tag-->
<style>
    h1 {
        color:white;
        text-align: center;
        margin-top: 10px;
    }
</style>
<div class="container mt-5">
<div class = "card">
<div class="text-center">
        <div class="card-header">
            <h3>Give your rating</h3>
        </div>
<div class="stars">
  <form action="" method="POST">
    <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
    <label class="star star-1" for="star-1"></label>
    <div class="container mt-4 mr-5 m-md-4">
        <button type="submit" class="btn btn-outline-success" name="submit" value="submit">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
<?php
include "footer.php";
?>