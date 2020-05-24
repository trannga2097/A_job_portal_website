<?php 

  include('connection/db.php');

  include('include/header.php');

  include('include/sidebar.php');
  
 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="job_create.php">Jobs</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">All Jobs</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

             <a class="btn btn-primary" href="add_create_job.php">Create Job</a>

            </div>

          </div>
          
          <table id="example" class="display" style="width:100%">

        <thead>

            <tr>

                <th>ID</th>

                <th>Admin Email</th>

                <th>Job Tittle</th>

                <th>Description</th>

                <th>Keyword</th>

                <th>Country</th>

                <th>Province</th>

                <th>Detail Address</th>

                <th>Category</th>

                <th>Job Time</th>

                <th>Action</th>
              
            </tr>

        </thead>

        <tbody>

          <?php

            include('connection/db.php');

            $sql = "SELECT * FROM `all_jobs` WHERE `company_email` = '{$_SESSION['admin_email']}'";
            
            $result = mysqli_query($conn, $sql);

            while ($user_row = mysqli_fetch_assoc($result)) {

            ?>

            <tr>
        
                <td><?php echo $user_row['job_id']; ?></td>

                <td><?php echo $user_row['company_email']; ?></td>

                <td><?php echo $user_row['job_tittle']; ?></td>

                <td><?php echo $user_row['description']; ?></td>

                <td><?php echo $user_row['keyword']; ?></td>

                <td><?php echo $user_row['country']; ?></td>

                <td><?php echo $user_row['province']; ?></td>

                <td><?php echo $user_row['detail_address']; ?></td>

                <td><?php echo $user_row['category']; ?></td>

                <td><?php echo $user_row['job_time']; ?></td>

                <td>

                  <div class="row">

                    <div class="btn-group">

                      <a href="job_edit.php?edit=<?php echo $user_row['job_id'];?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>

                      <a href="job_delete.php?del= <?php echo $user_row['job_id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

                    </div>

                  </div>
                  
                </td>

            </tr>

          <?php } ?>

        </tbody>

        <tfoot>

            <tr>

                 <th>ID</th>

                <th>Admin Email</th>

                <th>Job Tittle</th>

                <th>Description</th>

                <th>Keyword</th>

                <th>Country</th>

                <th>Province</th>

                <th>Detail Address</th>

                <th>Category</th>

                <th>Job Time</th>

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