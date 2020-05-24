<?php 

	include('include/header.php');

	include('include/sidebar.php');

 ?>

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="create_company.php">Job Seeker</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Job Seeker</h1>

          </div>
          
          <table id="example" class="display" style="width:100%">

        <thead>

            <tr>

                <th>ID</th>

                <th>Email</th>

                <th>Full Name</th>

                <th>Username</th>

                <th>Date</th>

                <th>Mobile Number</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

          <?php

            include('connection/db.php');

            $sql = "SELECT * FROM `jobseeker`";
            
            $result = mysqli_query($conn, $sql);

            while ($user_row = mysqli_fetch_assoc($result)) {

            ?>

            <tr>

                <td><?php echo $user_row['id']; ?></td>

                <td><?php echo $user_row['email']; ?></td>

                <td><?php echo $user_row['fullname']; ?></td>

                <td><?php echo $user_row['username']; ?></td>

                <td><?php echo $user_row['date']; ?></td>

                <td>0<?php echo $user_row['mobile_number']; ?></td>

                <td>

                  <div class="row">

                    <div class="btn-group">

                      <a href="jobseeker_delete.php?del=<?php echo $user_row['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

                    </div>

                  </div>
                  
                </td>

            </tr>

          <?php } ?>

        </tbody>

        <tfoot>

            <tr>

                <th>ID</th>

                <th>Email</th>

                <th>Full Name</th>

                <th>Username</th>

                <th>Date</th>

                <th>Mobile Number</th>

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