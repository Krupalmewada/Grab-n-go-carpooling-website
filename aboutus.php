<?php 
  include 'header.php';
?>
<style>

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
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('index.php','_self');"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"onclick="window.open('contactus.php','_self');"><i class="far fa-address-book"></i>Contact Us</a>
                </li>
                <li class="nav-item active">
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
    
    <table>
        <tr>
        <td>
            <img src="images/others/3 (1).jpg" alt="..." style="height:400px; width:400px; border-radius:50%;margin:50px;margin-left:200px;">
        </td>
            <td style="width:500px;">
                <h5>Benifit as Car Pooler</h5>
                <p>
                    Pooling in a carpooling app allows users to split the cost of fuel, tolls, and parking expenses among multiple passengers. This significantly reduces individual transportation costs, making it an economical option compared to driving alone or taking a taxi. By promoting the sharing of vehicles, carpooling apps with pooling features contribute to reducing carbon emissions and the overall environmental footprint. Fewer cars on the road result in lower air pollution and a more sustainable transportation system.
                </p>
    </td>
    </tr>

    <tr>
    <td> <img src="images/others/4 (2).jpg"alt="..." style="height:400px; width:400px; border-radius:50%;margin:50px;margin-left:200px;"></td>
    <td style="width:500px;">
      <h5>Works As Rider</h5>
      <p>Car ownership comes with expenses such as fuel, maintenance, insurance, and parking. By sharing rides through a carpooling app, you can offset these costs by receiving contributions from passengers, helping to reduce the financial burden of owning a car. Working as a car owner in a carpooling app allows you to choose your own schedule and availability. You can offer rides when it suits you, providing flexibility and convenience in managing your time and commitments. </p>
    </td>
    </tr>
</table>
<?php include 'footer.php';?>