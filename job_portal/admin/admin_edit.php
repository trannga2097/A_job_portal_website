<?php
    include('connection/db.php');

    include('include/header.php');

    include('include/sidebar.php');

    $id = $_GET['edit'];

    $sql = mysqli_query($conn,"SELECT * FROM admin_login WHERE id = '$id'");
            
    
    while ($user_row=mysqli_fetch_array($sql)) {

      $admin_email=$user_row['admin_email'];

      $admin_pass=$user_row['admin_pass'];

      $admin_fullname=$user_row['admin_fullname'];

      $admin_phone=$user_row['admin_phone'];

      $admin_type=$user_row['admin_type'];

    }

?>

<script>
      $(document).ready(function(){
        $('#admin_type').val("<?php echo $_GET['admin_type'] ?>")
      });
  </script>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>

                <li class="breadcrumb-item"><a href="add_admin.php">Update Admin</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Update Company Admin</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

             <a class="btn btn-primary" href="add_admin.php">Update Admin</a>

            </div>

          </div>
          
          <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">
            
            <form action="admin_update.php" method="post" style="margin:3%; padding: 3%;" name="admin_form" id="admin_form">
              
              <div class="form-group">
                
                <label for="Admin Email">Enter Email</label>

                <input type="email" name="email" id="email" value="<?php echo $admin_email; ?>" class="form-control" placeholder="Enter Admin Email">

              </div>

              <div class="form-group">
                
                <label for="Passwoed">Enter Password</label>

                <input type="password" name="password" id="password" value="<?php echo $admin_pass; ?>" class="form-control" placeholder="Enter Password">

              </div>

              <div class="form-group">
                
                <label for="Admin Full Name">Enter Full Name</label>
                
                <input type="text" name="fullname" id="fullname" value="<?php echo $admin_fullname; ?>" class="form-control" placeholder="Enter Admin Full Name">

              </div>

               <div class="form-group">
                
                <label for="Fhone">Enter Phone</label>
                
                <input type="number" name="phone" id="phone" value="<?php echo $admin_phone; ?>" class="form-control" placeholder="Enter Admin Phone">

              </div>

              <div class="form-group">
                  
                  <label for="Admin Type">Enter Admin Type</label>

                    <select name="admin_type" class="form-control" id="admin_type" selected="<?php echo $admin_type; ?>">

                  
                    <option value="Super Admin" <?=$admin_type == 'Super Admin' ? ' selected="selected"' : '';?>>Super Admin</option>

                    <option value="Company Admin" <?=$admin_type == 'Company Admin' ? ' selected="selected"' : '';?>>Company Admin</option>

                  </select>

              </div>

              <input type="hidden" id="id" name="id" value="<?php echo $_GET['edit']; ?>"  >


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
