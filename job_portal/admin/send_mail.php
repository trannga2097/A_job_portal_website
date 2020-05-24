<?php 

  include('connection/db.php');

  include('include/header.php');

  include('include/sidebar.php');

 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="job_create.php">Send E-Mail</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Send E-Mail</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

            </div>

          </div>

          <form action="phpmailer.php" method="post" style="border: 1px solid gray; width:60%; margin-left: 10%; padding: 10px; ">

          <?php

            include('connection/db.php');

            error_reporting(0);

            session_start();

            $id=$_GET['id'];

            $sql = "SELECT * FROM `apply_job`LEFT JOIN `all_jobs` ON apply_job.job_id=all_jobs.job_id WHERE id='$id' ";

            $result = mysqli_query($conn, $sql);

            while ($user_row = mysqli_fetch_array($result)) {

            ?>

            <h3 class="text-center"><?php echo $user_row['first_name']; ?>&nbsp;<?php echo $user_row['last_name']; ?></h3>
           
            <div class="form-group">

                <label for="">To :</label>

                <td><input type="email" name="to" id="to" class="form-control" value="<?php echo $user_row['job_seeker']; ?>"></td>

            </div>

            <div class="form-group">

                <label for="">From :</label>

                <td><input type="email" name="from" id="from" class="form-control" placeholder="from..."></td>

            </div>

            <div class="form-group">

                <label for="">Body :</label>

                <td><textarea name="body" id="body" class="form-control" cols="30" rows="10">Dear <?php echo strtoupper($user_row['first_name']); ?>&nbsp;<?php echo strtoupper($user_row['last_name']); ?>,</textarea></td>

            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

            <?php

            }

             ?>

             <input type="submit" class="btn btn-success btn-clock" name="submit" id="submit" value="Send">

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
    
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

    <script>

      feather.replace()

    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
      
      $(document).ready(function() {
        
        $('#example').DataTable();
        
        } );

    </script>

  </body>

</html>