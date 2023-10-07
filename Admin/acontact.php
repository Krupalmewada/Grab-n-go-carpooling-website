<?php
$delete = false; 
include 'header.php';
if(!isset($_SESSION["loggedin"])){
	header('Location:index.php');
	  exit;
	}
include 'asidebar.php';

  if(isset($_POST['delete'])){
  $cu_id = $_POST['delete'];
  $sql = "DELETE FROM `contactUs` WHERE `cu_id` = $cu_id";
  $result = mysqli_query($conn, $sql);
  $delete = true;

  }
?>
 
<div class = "right_content">
	<h1 style="text-align:center; margin-top:10px"> Contact Us List</h1>
<?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your data has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
		<div class="container my-4" style="margin-left:0px;">
		  <form action="" method="POST">
		    <table class="table table-striped" id="myTable">
		      <thead>
		        <tr>
		          <th scope="col">cu_id</th>
		          <th scope="col">first_name</th>
		          <th scope="col">last_name</th>
		          <th scope="col">email_id</th>
		          <th scope="col">message</th>
		          <th scope="col">Action</th>
		        </tr>
		      </thead>
		      <tbody>
			        <?php 
			          $sql = "SELECT * FROM `contactUs`";
			          $result = mysqli_query($conn, $sql);
			          $cu_id = 0;
			          while($row = mysqli_fetch_assoc($result)){
			            $cu_id = $cu_id + 1;
			            echo "<tr>
			            
			            <td>". $row['cu_id'] . "</td>
			            <td>". $row['fname'] . "</td>
			            <td>". $row['lname'] . "</td>
			            <td>". $row['emailid'] . "</td>
			            <td>". $row['message'] . "</td>";
			            $cu_id = $row['cu_id'];
			           echo "<td> <button class='delete btn btn-sm btn-primary' name='delete' id='delete' value='$cu_id'>Delete</button>  </td>
			          </tr>";
			        } 
			          ?>
      			</tbody>
		 </table>
 	 </form>
	 </div>
</div>

<?php
include 'footer.php';
?>