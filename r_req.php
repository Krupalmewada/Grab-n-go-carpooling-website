<?php
    include 'header.php';
    $conn = getDbConn();
    if(!isset($_SESSION["loggedin"])){
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
        header('Location: ' . $home_url);
          exit;
        }
?>
<style>
body{color:black;}</style>
<?php
   // $p_id = $_POST["p_id"];
?>

<!-- Code to retrive same data in the form -->
<?php
$p_id = $_SESSION['user_id'];
$query = "SELECT * FROM pooler where p_id = " . $p_id;
      $result = mysqli_query($conn, $query);
      $first_name = "";
      $last_name = "";
      $email = "";
      $contact_number = "";
      $carname = "";
      $price = "";
      // code to fetch data
      while ($row = mysqli_fetch_array($result))
      {
        $first_name = $row['fname'];
        $last_name = $row['lname'];
        $email = $row['emailid'];
        $contact_number = $row['phoneno'];
        
      }
      // code for fetch data end
     
    ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:0px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="riderlist.php">Back</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<?php
    $p_id = $_SESSION['user_id'];
    if (isset($_POST["submit"]) == "submit"){
        $query = dbInsert('r_req', [
        'fname' => $_POST["Fname"],
        'lname' => $_POST["Lname"],
        'emailid' => $_POST["email"],
        'phoneno' => $_POST["contact_number"],
        'date' => $_POST["req_date"],
        'time' => $_POST["req_time"],
        'from_' => $_POST["fromm"],
        'to_' => $_POST["to_o"],
        'status' => 'pending',
        'p_id' => $p_id,
        'r_id' => $_GET["r_id"],
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
<h3>Request</h3>
<!--CSS for <h3> tag-->
<style>
    h3 {
        text-align: center;
        margin-top: 10px;
    }
</style>
<form action="" method="POST">
<div class="form-row mx-5">
    <div class="form-group col-md-6">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" required name="Fname" value="<?php echo $first_name; ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" required name="Lname" value="<?php echo $last_name; ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="contact_number">Mobile Number</label>
        <input type="text" class="form-control" id="contact_number" required name="contact_number" value="<?php echo $contact_number; ?>">
    </div>

    <div class="form-group col-md-6">
        <label for="email">Email Id</label>
        <input type="email" class="form-control" id="email" required name="email" value="<?php echo $email; ?>">
    </div>



    <div class="form-group col-md-6">
        <label for="req_date">Request Date</label>
        <input type="date" class="form-control" id="req_date" required name="req_date">
    </div>

    <div class="form-group col-md-6">
        <label for="req_time">Request Time</label>
        <input type="time" class="form-control" id="req_time" required name="req_time">
    </div>

    <div class="form-group col-md-6">
        <label for="fromm">From</label>
        <input type="text" class="form-control" id="fromm" required name="fromm">
    </div>

    <div class="form-group col-md-6">
        <label for="to_o">To</label>
        <input type="text" class="form-control" id="to_o" required name="to_o">
    </div>

    

    

    <div class="container mt-4 mr-5 m-md-4">
        <button type="submit" class="btn btn-outline-success" name="submit" value="submit">Send Request</button>
    </div>
</div>    
</form>


</body>
</html>