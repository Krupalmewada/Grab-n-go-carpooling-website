<?php
$delete = false; 
include 'header.php';
if(!isset($_SESSION["loggedin"])){
	header('Location:index.php');
	  exit;
	}
include 'asidebar.php';

  if(isset($_POST['delete'])){
  $ra_id = $_POST['delete'];
  $sql = "DELETE FROM `rideadd` WHERE `ra_id` = $ra_id";
  $res = mysqli_query($conn, $sql);
  $delete = true;

  }
?>
 
<div class = "right_content">
<h1 style="text-align:center; margin-top:10px"> Rider Added ride List</h1>
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
		          <th scope="col">ra_id</th>
                  <th scope="col">r_id</th>
		          <th scope="col">first_name</th>
		          <th scope="col">last_name</th>
		          <th scope="col">email_id</th>
		          <th scope="col">contact_number</th>
                  <th scope="col">car name</th>
                  <th scope="col">price</th>
		          <th scope="col">from</th>
                  <th scope="col">to</th>
		          <th scope="col">date</th>
		          <th scope="col">time</th>
		          <th scope="col">Action</th>
		        </tr>
		      </thead>
		      <tbody>
			        <?php 
			          $sql = "SELECT * FROM `rideadd`";
			          $result = mysqli_query($conn, $sql);
			          $ra_id = 0;
			          while($row = mysqli_fetch_assoc($result)){
			           
			            echo "<tr>
			            
			            <td>". $row['ra_id'] . "</td>
                        <td>". $row['r_id'] . "</td>
			            <td>". $row['fname'] . "</td>
			            <td>". $row['lname'] . "</td>
			            <td>". $row['emailid'] . "</td>
			            <td>". $row['phoneno'] . "</td>
			            <td>". $row['carname'] . "</td>
			            <td>". $row['price'] . "</td>
                        <td>". $row['from_'] . "</td>
                        <td>". $row['to_'] . "</td>
                        <td>". $row['date'] . "</td>
                        <td>". $row['time'] . "</td>";
			            
			            $ra_id = $row['ra_id'];
			           echo "<td> <button class='delete btn btn-sm btn-primary' name='delete' id='delete' value='$ra_id'>Delete</button>  </td>
			          </tr>";
                      $ra_id = $ra_id + 1;
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