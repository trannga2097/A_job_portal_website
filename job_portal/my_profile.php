<?php

  include('include/my_profile.php');

  include('connection/db.php');

  $query=mysqli_query($conn,"SELECT * FROM profiles WHERE user_email='{$_SESSION['email']}'");
  while ($user_row=mysqli_fetch_array($query)) {

    $img=$user_row['img'];

    $name=$user_row['name'];

    $dob=$user_row['dob'];

    $contact_number=$user_row['contact_number'];

    $email=$user_row['email'];

  }

?>

  <br>

  <div style="margin-left: 25%; width: 50%; border: 1px solid gray;padding: 10px;">

    <form  action="profile_add.php" method="post" name="profile_form" id="profile_form" enctype="multipart/form-data">

      <div class="row">

        <div class="col-md-4">

        <img  src="upload/<?php if(!empty($img)){echo $img;}else{echo 'avata1.png';}?>"  class="img-thumbnail" alt="" width="200" height="200">
        <input type="file" class="form-control" name="img" id="img">

      </div>

      <div class="col-md-8">

        <div class="form-group">

          <label for="">Your Name:</label>

          <input type="text" name="name" id="name" value="<?php if(!empty($name)) echo $name; ?> " placeholder="Enter Your Name..." class="form-control">

        </div>

        <div class="form-group">

          <label for="">Your Date of Birth: </label>

          <input type="date" name="dob" id="dob"  required value="<?php if(!empty($dob)) echo $dob; ?>" class="form-control">

        </div>

        <div class="form-group">

          <label for="">Your Contact Number: </label>

          <input type="tel" name="contact_number" id="contact_number" value="<?php if(!empty($contact_number))  echo $contact_number; ?> "placeholder="Enter Your Number..." class="form-control">

        </div>

        <div class="form-group">

         <label for="">Your Email: </label>

        <input type="text" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" onChange="number_function" placeholder="Enter Your Email..." class="form-control">

        </div> 

        <button type="submit" id="submit" placeholder="submit" name="submit" class="btn btn-success">ADD</button>
        
      </div>
      
    </div>
      
    </form>

  </div>
  
  <br>
   
  <section class="ftco-section-parallax">

    <div class="parallax-img d-flex align-items-center">

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">

            <h2>Subcribe to our Newsletter</h2>

              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>

              <div class="row d-flex justify-content-center mt-4 mb-4">

                 <div class="col-md-8">

                  <form action="#" class="subscribe-form">

                    <div class="form-group d-flex">

                      <input type="text" class="form-control" placeholder="Enter email address">

                      <input type="submit" value="Subscribe" class="submit px-3">

                    </div>

                    </form>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

  <?php

    include('include/footer.php');
    
  ?>
