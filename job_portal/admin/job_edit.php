<?php
    
    include('connection/db.php');

    include('include/header.php');

    include('include/sidebar.php');

    $job_id = $_GET['edit'];

    $sql = "SELECT * FROM all_jobs WHERE job_id = '$job_id'";
    
    $result = mysqli_query($conn,$sql);

    while ($user_row=mysqli_fetch_array($result)){

      $job_tittle=$user_row['job_tittle'];

      $description=$user_row['description'];

      $keyword=$user_row['keyword'];

      $country=$user_row['country'];

      $province=$user_row['province'];

      $detail_address=$user_row['detail_address'];

      $category=$user_row['category'];

      $job_time=$user_row['job_time'];

    }

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="job_create.php">All Job List</a></li>

                <li class="breadcrumb-item"><a href="add_create_job.php">Update Job</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Update Job</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

                

              </div>

             <a class="btn btn-primary" href="add_create_job.php">Update Job</a>

            </div>

          </div>
          
          <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">
            
            <form action="job_update.php" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">
              
              <div class="form-group">
                
                <label for="Job Title">Job Title</label>

                <input type="text" name="job_tittle" id="job_tittle" value="<?php echo $job_tittle; ?>" class="form-control" placeholder="Enter Job">

              </div>

              

              <div class="form-group">
                
                <label for="Description">Description</label>

                <textarea name="description" id="description" class="form-control" cols="30" rows="10"><?php echo $description; ?></textarea>

              </div>

              <div class="form-group">
                
                <label for="Keyword">Keyword</label>

                <input type="text" name="keyword" id="keyword" value="<?php echo $keyword; ?>" class="form-control" placeholder="Enter Keyword">

              </div>

              <div class="form-group">
                
                <label for="">Country</label>

                <input type="text" name="country" id="country" value="<?php echo $country; ?>" class="form-control" placeholder="Enter Your Country">

              </div>

              <div class="form-group">
                
                <label for="">Province</label>

                 <input type="text" name="province" id="province" value="<?php echo $province; ?>" class="form-control" placeholder="Enter Your Province">

              </div>

              <div class="form-group">
                
                <label for="">Detail Address</label>

                 <input type="text" name="detail_address" id="detail_address" value="<?php echo $detail_address; ?>" class="form-control" placeholder="Enter Number House - Street Name">

              </div>

              <div class="form-group">
                
                <label for="">Select Category</label>

                <select name="category" class="form-control" id="category">
                <?php 

                include('connection/db.php');

                $sql = "SELECT * FROM `job_category`";
            
                $result = mysqli_query($conn, $sql);

                while ($user_row=mysqli_fetch_array($result)) {
                  ?>
                    
                  <option value="<?php echo $user_row['category'] ?>"><?php echo $user_row['category']; ?></option>

                  <?php

                }

                 ?>
                
                </select>

              </div>

              <div class="form-group">
                
                <label for="">Job Time</label>
                  

                 <input type="text" name="job_time" id="job_time" value="<?php echo $job_time; ?>" class="form-control" placeholder="Enter Job Time">

              </div>

              <input type="hidden" id="job_id" name="job_id" value="<?php echo $_GET['edit']; ?>">

                <div class="form-group">
                
                  <button type="submit" class="btn btn-block btn-success" name="submit" id="submit">Update</button>

                </div>

            </form>

          </div>

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
