<?php

    include('include/header.php');

    include('include/sidebar.php');

?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <nav aria-label="breadcrumb">

              <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>

                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>

                <li class="breadcrumb-item"><a href="add_customer.php">Add Customer</a></li>

              </ol>

            </nav>

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

            <h1 class="h2">Add Customer</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">

                

              </div>

             <a class="btn btn-primary" href="add_customer.php">Add Customer</a>

            </div>

          </div>
          
          <div style="width: 60%; margin-left: 20%; background-color: #f2f4f4;">
            
            <form action="customer_add.php" method="post" style="margin:3%; padding: 3%;" name="customer_form" id="customer_form">
              
              <div class="form-group">
                
                <label for="Customer Email">Enter Email</label>

                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Cusomer Email">

              </div>

              <div class="form-group">
                
                <label for="Passwoed">Enter Password</label>

                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">

              </div>

              <div class="form-group">
                
                <label for="Customer Username">Enter Username</label>
                
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Customer Username">

              </div>

               <div class="form-group">
                
                <label for="First Name">Enter First Name</label>
                
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name">

              </div>

              <div class="form-group">
                
                <label for="Last Name">Enter Last Name</label>
                
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name">

              </div>

              <div class="form-group">
                
                <label for="Admin Type">Enter Admin Type</label>
                
                <select name="admin_type" class="form-control" id="admin_type">
                  
                  <option value="1">Super Admin</option>

                  <option value="2">Customer Admin</option>

                </select>

              </div>

                <div class="form-group">
                
                  <button type="submit" class="btn btn-block btn-success" name="submit" id="submit">Submit</button>

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
