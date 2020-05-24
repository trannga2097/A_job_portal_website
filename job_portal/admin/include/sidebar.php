<!-- Nếu admin_type = 1 thì sẽ điều khiển được nhiều chức năng hơn admin_type = 2 -->
<?php 

  include('connection/db.php');

  $sql = "SELECT * FROM `admin_login` WHERE `admin_email`='{$_SESSION['admin_email']}' and `admin_type`='Super Admin'";
    
  $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){
 
?>
   <div class="container-fluid">

      <div class="row">

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">

          <div class="sidebar-sticky">

            <ul class="nav flex-column">

              <li class="nav-item">

                <a class="nav-link active" href="admin_dashboard.php">

                  <span data-feather="home"></span>

                  Dashboard <span class="sr-only">(current)</span>

                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="admin.php">

                  <span data-feather="users"></span>

                  Admin

                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="create_company.php">

                  <span data-feather="layers"></span>

                  Company

                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="jobseeker.php">

                  <span data-feather="layers"></span>

                  Job Seeker

                </a>

              </li>

            </ul>

            <ul class="nav flex-column mb-2">

              <li class="nav-item">

                <a class="nav-link" href="category.php">

                  <span data-feather="file-text"></span>

                  Category

                </a>

              </li>

            </ul>

          </div>

        </nav> 
<?php
}else{
  ?>
    <div class="container-fluid">

      <div class="row">

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">

          <div class="sidebar-sticky">

            <ul class="nav flex-column">

              <li class="nav-item">

                <a class="nav-link active" href="admin_dashboard.php">

                  <span data-feather="home"></span>

                  Dashboard <span class="sr-only">(current)</span>

                </a>

              </li>

              <li class="nav-item">

                <!-- <a class="nav-link" href="#">

                  <span data-feather="file"></span>

                  Orders

                </a> -->

              </li>

              <li class="nav-item">

                <!-- <a class="nav-link" href="#">

                  <span data-feather="shopping-cart"></span>

                  Products

                </a> -->

              </li>

              <li class="nav-item">

                <!-- <a class="nav-link" href="customers.php">

                  <span data-feather="users"></span>

                  Customers

                </a> -->

              </li>

              <li class="nav-item">

                <a class="nav-link" href="job_create.php">

                  <span data-feather="bar-chart-2"></span>

                  Job Create

                </a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="apply_jobs.php">

                  <span data-feather="layers"></span>

                  Apply Jobs

                </a>

              </li>

            </ul>

            <ul class="nav flex-column mb-2">

              <li class="nav-item">

                <a class="nav-link" href="#">

                  <span data-feather="file-text"></span>

                  Category

                </a>

              </li>

            </ul>

          </div>

        </nav>
<?php
  }
 ?>
