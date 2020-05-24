<?php 

  include('connection/db.php');

  include('include/header.php');

  include('include/sidebar.php');

 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="apply_jobs.php">Applied Jobs</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Apply Jobs</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

             <a class="btn btn-primary" href="add_create_job.php">Applied Jobs</a>

            </div>

          </div>
          
          <form action="" style="border: 1px solid gray; width: 80%; margin-left: 10%; padding: 10px;">

          <?php

            error_reporting(0);

            include('connection/db.php');

            session_start();

            $id=$_GET['id'];

            $sql = "SELECT * FROM `apply_job`LEFT JOIN `all_jobs` ON apply_job.job_id=all_jobs.job_id WHERE id='$id' ";

            $result = mysqli_query($conn, $sql);

            while ($user_row = mysqli_fetch_assoc($result)) {

            ?>

            <div class="form-group">

              <label for="">Job Title: </label>

              <td><?php echo $user_row['job_tittle']; ?></td>

            </div>
        
            <div class="form-group">

              <label for="">Job Description: </label>

              <td><?php echo $user_row['description']; ?></td>

            </div>
         
            <div class="form-group">

              <label for="">Job Seeker Name: </label>

              <td><?php echo $user_row['first_name']; ?></td> <td><?php echo $user_row['last_name']; ?></td>

            </div>
         
            <div class="form-group">

              <label for="">Job Seeker Email: </label>

              <td><?php echo $user_row['job_seeker']; ?></td>

            </div>

            <div class="form-group">

              <label for="">Job Seeker Contact Number: </label>

              <td><?php echo $user_row['contact_number']; ?></td>

            </div>
        
          <div class="form-group">

            <label for="">Job Seeker CV: </label>

            <td><a href="http://localhost:8080/job_portal/apply_job/<?php echo $user_row['file'] ?>">Download File</a></td>

          </div>

          <?php } ?>

          <a href="send_mail.php?id=<?php echo $id; ?>" class="btn btn-success">Accept</a>

          <a href="reject_job.php?del=<?php echo $id; ?>" class="btn btn-danger">Reject</a>

        </form>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <div class="table-responsive">

          </div>

        </main>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <script src="../../assets/js/vendor/popper.min.js"></script>

    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script>

      feather.replace()

    </script>

    <!-- datatables plugin -->

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
      
      $(document).ready(function() {
        
        $('#example').DataTable();
        
        } );

    </script>

  </body>

</html>