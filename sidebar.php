
<!-- side navbar code starts from here-->
  <div id="navigation bar"class="sidenav bg-dark sidenav-dark" data-color="light" data-mode="side" data-hidden="false"
    data-scroll-container="#scrollContainer"
    style="width: 205px; height:100%;position:sticky; transition: all 0.3s linear 0s; transform: translateX(0%); line-height: 30px;min-height: 100vh;">
    <div id="scrollContainer" class="ps ps--active-y" style="max-height:100%;">
      <ul class="sidenav-menu">
      <?php 
          $user_id = $_SESSION['user_id'];
          if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'pooler'){
            ?>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="poolerHome.php?p_editprofile=<?php echo $user_id; ?>">
                  <h6 style="color:white">Edit Profile</h6>
                </a>
              </li>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="poolerHome.php?request_ride=<?php echo $user_id; ?>">
                  <h6 style="color:white">Request Ride</h6>
                </a>
              </li>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="poolerHome.php?history=<?php echo $user_id; ?>">
                  <h6 style="color:white">History</h6>
                </a>
              </li>
              
              <?php 
          }
         elseif(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'rider'){
            ?>
            <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="riderHome.php?add=<?php echo $user_id; ?>">
                  <h6 style="color:white">Add ride</h6>
                </a>
              </li>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="riderHome.php?c_editprofile=<?php echo $user_id; ?>">
                  <h6 style="color:white">Edit details</h6>
                </a>
              </li>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="riderHome.php?preq=<?php echo $user_id; ?>">
                  <h6 style="color:white">Client Request</h6>
                </a>
              </li>
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="riderHome.php?workhistory=<?php echo $user_id; ?>">
                  <h6 style="color:white">Work history</h6>
                </a>
              </li>  
              <li class="nav-item" style="margin-left:-35px;">
                <a class="nav-link active" aria-current="page" href="riderHome.php?r_feedback=<?php echo $user_id; ?>">
                  <h6 style="color:white">Feedback</h6>
                </a>
              </li>  
              <?php 
         }
          ?>
      </ul>
    </div>
  </div>
  <style>
.sidenav
{
  float:left; margin-right:15px;
}
.right_content
{
  /* height: calc(100vh - 230px); */
  overflow-y: auto;
  overflow-x: hidden;
}
</style>
  