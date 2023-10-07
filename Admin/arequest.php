<?php
$delete = false; 
include 'header.php';
if(!isset($_SESSION["loggedin"])){
	header('Location:index.php');
	  exit;
	}
include 'asidebar.php';

  if(isset($_POST['delete'])){
  $rr_id = $_POST['delete'];
  $sql = "DELETE FROM `r_req` WHERE `rr_id` = $rr_id";
  $result = mysqli_query($conn, $sql);
  $delete = true;

  }
?>
 
<div class = "right_content">
<h1 style="text-align:center; margin-top:10px"> Request List</h1>
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
		          <th scope="col">rr_id</th>
                  <th scope="col">r_id</th>
                  <th scope="col">p_id</th>
		          <th scope="col">first_name pooler</th>
		          <th scope="col">last_name pooler</th>
		          <th scope="col">email_id pooler</th>
		          <th scope="col">contact_number pooler</th>
		          <th scope="col">from</th>
		          <th scope="col">to</th>
		          <th scope="col">date</th>
		          <th scope="col">time</th>
		          <th scope="col">Action</th>
		        </tr>
		      </thead>
		      <tbody>
			        <?php 
			          $sql = "SELECT * FROM `r_req`";
			          $result = mysqli_query($conn, $sql);
			          $rr_id = 0;
			          while($row = mysqli_fetch_assoc($result)){
			            $rr_id = $rr_id + 1;
			            echo "<tr>
			            
			            <td>". $row['rr_id'] . "</td>
                        <td>". $row['r_id'] . "</td>
                        <td>". $row['p_id'] . "</td>
			            <td>". $row['fname'] . "</td>
			            <td>". $row['lname'] . "</td>
			            <td>". $row['emailid'] . "</td>
			            <td>". $row['phoneno'] . "</td>
			            <td>". $row['from_'] . "</td>
			            <td>". $row['to_'] . "</td>
			            <td>". $row['date'] . "</td>
                        <td>". $row['time'] . "</td>";
			            $rr_id = $row['rr_id'];
			           echo "<td> <button class='delete btn btn-sm btn-primary' name='delete' id='delete' value='$rr_id'>Delete</button>  </td>
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