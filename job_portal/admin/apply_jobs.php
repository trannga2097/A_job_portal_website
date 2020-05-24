<?php 

  include('connection/db.php');

  include('include/header.php');
  
  include('include/sidebar.php');

 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="apply_jobs.php">Apply Jobs</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Apply Jobs</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

            

            </div>

          </div>
          
          <table id="example" class="display" style="width:100%">

        <thead>

            <tr>

                <th>ID</th>

                <th>Job Tittle</th>

                <th>Description</th>

                <th>Job Seeker First Name</th>

                <th>Job Seeker Last Name</th>

                <th>Job Seeker Email</th>

                <th>Job Seeker CV</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

          <?php

            include('connection/db.php');

            $a=1;

            $sql = "SELECT * FROM all_jobs INNER JOIN apply_job ON all_jobs.job_id=apply_job.job_id WHERE company_email='{$_SESSION['admin_email']}'  ";
            $result = mysqli_query($conn, $sql);

            while ($user_row = mysqli_fetch_assoc($result)) {

            ?>

            <tr>
        
                <td><?php echo $a ?></td>

                <td><?php echo $user_row['job_tittle']; ?></td>

                <td><?php echo $user_row['description']; ?></td>

                <td><?php echo $user_row['first_name']; ?></td>

                <td><?php echo $user_row['last_name']; ?></td>

                <td><?php echo $user_row['job_seeker']; ?></td>


                <td><a href="http://localhost:8080/jobportal/apply_job/<?php echo $user_row['file'] ?>">Download File</a></td>

                <td>

                  <div class="row ">

                    <div class="btn-group ">

                      <a href="view_applied_jobs.php?id=<?php echo $user_row['id'];?>" class="btn btn-success " style><span class="glyphicon glyphicon-eye-open"></span></a>

                    </div>

                  </div>
                  
                </td>

            </tr>

          <?php $a++;} ?>

        </tbody>

        <tfoot>

            <tr>

                <th>ID</th>

                <th>Job Tittle</th>

                <th>Description</th>

                <th>Job Seeker First Name</th>

                <th>Job Seeker Last Name</th>

                <th>Job Seeker Email</th>

                <th>Job Seeker CV</th>

                <th>Action</th>


            </tr>

        </tfoot>

    </table>

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