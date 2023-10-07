<?php
$delete = false; 
include 'header.php';
if(!isset($_SESSION["loggedin"])){
	header('Location:index.php');
	  exit;
	}
include 'asidebar.php';

  if(isset($_POST['delete'])){
  $p_id = $_POST['delete'];
  $sql = "DELETE FROM `pooler` WHERE `p_id` = $p_id";
  $result = mysqli_query($conn, $sql);
  $delete = true;

  }
?>
 
<div class = "right_content">
<h1 style="text-align:center; margin-top:10px"> Pooler List</h1>
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
		          <th scope="col">r_id</th>
		          <th scope="col">first_name</th>
		          <th scope="col">last_name</th>
		          <th scope="col">email_id</th>
		          <th scope="col">contact_number</th>
		          <th scope="col">password</th>
		          <th scope="col">date_of_birth</th>
		          <th scope="col">photo</th>
		          <th scope="col">Action</th>
		        </tr>
		      </thead>
		      <tbody>
			        <?php 
			          $sql = "SELECT * FROM `pooler`";
			          $result = mysqli_query($conn, $sql);
			          $p_id = 0;
			          while($row = mysqli_fetch_assoc($result)){
			            $p_id = $p_id + 1;
			            echo "<tr>
			            
			            <td>". $row['p_id'] . "</td>
			            <td>". $row['fname'] . "</td>
			            <td>". $row['lname'] . "</td>
			            <td>". $row['emailid'] . "</td>
			            <td>". $row['phoneno'] . "</td>
			            <td>". $row['pwd'] . "</td>
			            <td>". $row['dob'] . "</td>
			            <td>"
			            ?>
			            <img style="width:100px; height:100px" src="/gng/photo/pooler/<?php echo $row['photo']; ?>" />
			            <?php
			            echo "</td>";
			            $p_id = $row['p_id'];
			           echo "<td> <button class='delete btn btn-sm btn-primary' name='delete' id='delete' value='$p_id'>Delete</button>  </td>
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