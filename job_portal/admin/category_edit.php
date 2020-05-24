<?php
    include('connection/db.php');

    include('include/header.php');

    include('include/sidebar.php');

    $id = $_GET['edit'];

    $sql = mysqli_query($conn,"SELECT * FROM job_category WHERE id = '$id'");
            
    
    while ($user_row=mysqli_fetch_array($sql)) {
      
      $category=$user_row['category'];

      $des=$user_row['des'];

    }

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="category.php">Category</a></li>

                <li class="breadcrumb-item"><a href="add_category.php">Update Category</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Update Category</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

              </div>

             <a class="btn btn-primary" href="add_category.php">Update Category</a>

            </div>

          </div>
          
          <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">
            
           <form action="category_update.php" method="post" style="margin:3%; padding: 3%;" name="category_form" id="category_form">
              
             <div class="form-group">
                
                <label for="Category Name">Category Name</label>

                <input type="text" name="category" id="category" value="<?php echo $category; ?>" class="form-control" placeholder="Enter Category Name">

              </div>

              <input type="hidden" id="id" name="id" value="<?php echo $_GET['edit']; ?>">

              <div class="form-group">
                
                <label for="Description">Description</label>

                <textarea type="longtext" name="description" id="description" value="<?php echo $des; ?>" class="form-control" cols="30" rows="10"></textarea>

              </div>

              

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
