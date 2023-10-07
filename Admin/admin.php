
<?php
	include 'header.php'; 
	if(!isset($_SESSION["loggedin"])){
      header('Location:index.php');
        exit;
      }
  include 'asidebar.php';
?>  
<!-- start cards from here -->

<?php 
include 'footer.php';
?>

