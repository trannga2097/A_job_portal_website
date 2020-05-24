<?php

  include('connection/db.php');

  include('include/header.php');

  $page='home';

  $query=mysqli_query($conn, "SELECT * FROM job_category");

?>

    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">

      <div class="overlay"></div>

      <div class="container">

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">

          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">

            <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="66642069">0</span> great job offers you deserve!</p>

            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

            <div class="ftco-search">

              <div class="row">

                <div class="col-md-12 nav-link-wrap">

                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

                  </div>

                </div>

                <div class="col-md-12 tab-wrap">
                  
                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">

                      <form action="index.php" method="post" class="search-job">

                        <div class="row">

                          <div class="col-md-9">

                            <div class="form-group">

                              <div class="form-field">

                                <div class="icon"><span class="icon-briefcase"></span></div>

                                <input type="text" class="form-control" name="key" id="key" placeholder="eg. Developer/JavaScript/HaNoi/HoChiMinh">

                              </div>

                            </div>

                          </div>

                          <div class="col-md-3">

                            <div class="form-group">

                              <div class="form-field">

                                <input type="submit" value="Search" name="search" id="search" class="form-control btn btn-primary">

                              </div>

                            </div>

                          </div>

                        </div>

                      </form>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <?php

    include('connection/db.php');

    if (isset($_POST['search']) or ($_GET['page']) ) {           
              
      $page=$_GET['page'];

      if ($page=="") { 
              
        $keyword=$_POST['key'];

        $category=$_POST['key'];

        $province=$_POST['key'];

        $page1=0;

        }else {
            
            $num_per_page=3;
            
            $page1=($page*$num_per_page)-$num_per_page;

            $keyword=$_GET['keyword'];

            $category=$_GET['category'];

            $province=$_GET['province'];

           }

          $sql1="SELECT * FROM all_jobs LEFT JOIN company ON all_jobs.company_email=company.admin WHERE keyword LIKE '%$keyword%' OR category LIKE '%$keyword%' OR province LIKE '%$keyword%' LIMIT $page1,3 ";

          $sql=mysqli_query($conn,$sql1 );


          ?>

    <div id="id_job_alls">

      <section class="ftco-section bg-light">

      <div class="container">

        <div class="row justify-content-center mb-5 pb-3">

          <div class="col-md-7 heading-section text-center ftco-animate">

            <span class="subheading">Recently Added Jobs</span>

            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
      
          </div>

        </div>

        <div class="row">

          <?php 

          while ($row=mysqli_fetch_array($sql)) { ?>

         <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">

                <div class="job-post-item-header d-flex align-items-center">

                  <h2 class="mr-3 text-black h3"><?php echo $row['job_tittle']; ?></h2>

                  <div class="badge-wrap">

                   <span class="bg text-white badge py-2 px-3"><?php echo $row['job_time']; ?></span>

                  </div>

                </div>

                <div class="job-post-item-body d-block d-md-flex">

                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['category']; ?></a></div>

                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company']; ?></a></div>

                  <div><span class="icon-my_location"></span> <span><?php echo $row['detail_address']; ?>-<?php echo $row['province']; ?>-<?php echo $row['country']; ?></span></div>

                </div>

              </div>

              <div class="ml-auto d-flex">

                <a href="blog-single.php?id=<?php echo $row['job_id']; ?>" class="btn btn-primary py-2 mr-1">Apply Job</a>

                <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">

                  <span class="icon-heart"></span>

                </a>

              </div>

            </div>

          </div>

          <?php } ?>

        </div>

        <div class="row mt-5">

          <div class="col text-center">

            <div class="block-27">

              <ul>

                <li><a href="#">&lt;</a></li>

               <?php 

                include('connection/db.php');

                $sql=mysqli_query($conn,"SELECT * FROM all_jobs LEFT JOIN company ON all_jobs.company_email=company.admin WHERE keyword LIKE '%$keyword%' OR category LIKE '%$keyword%'");

                $total_record=mysqli_num_rows($sql);

                $num_per_page=3;

                $total_page=ceil($total_record/$num_per_page);

                for($i=1;$i<=$total_page;$i++){

                ?>

                <li><a href="index.php?page=<?php echo $i; ?>& keyword=<?php echo $keyword; ?>& category=<?php echo $category; ?>"><?php echo $i; ?></a></li>

                <?php } ?>

                <li><a href="#">&gt;</a></li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </section>

</div>

<?php } ?>

    <section class="ftco-section services-section bg-light">

      <div class="container">

        <div class="row d-flex">

          <div class="col-md-3 d-flex align-self-stretch ftco-animate">

            <div class="media block-6 services d-block">

              <div class="icon"><span class="flaticon-resume"></span></div>

              <div class="media-body">

                <h3 class="heading mb-3">Search Millions of Jobs</h3>

                <p>A small river named Duden flows by their place and supplies.</p>

              </div>

            </div>  

          </div>

          <div class="col-md-3 d-flex align-self-stretch ftco-animate">

            <div class="media block-6 services d-block">

              <div class="icon"><span class="flaticon-collaboration"></span></div>

              <div class="media-body">

                <h3 class="heading mb-3">Easy To Manage Jobs</h3>

                <p>A small river named Duden flows by their place and supplies.</p>

              </div>

            </div>  

          </div>

          <div class="col-md-3 d-flex align-self-stretch ftco-animate">

            <div class="media block-6 services d-block">

              <div class="icon"><span class="flaticon-promotions"></span></div>

              <div class="media-body">

                <h3 class="heading mb-3">Top Careers</h3>

                <p>A small river named Duden flows by their place and supplies.</p>

              </div>

            </div>  

          </div>

          <div class="col-md-3 d-flex align-self-stretch ftco-animate">

            <div class="media block-6 services d-block">

              <div class="icon"><span class="flaticon-employee"></span></div>

              <div class="media-body">

                <h3 class="heading mb-3">Search Expert Candidates</h3>

                <p>A small river named Duden flows by their place and supplies.</p>

              </div>

            </div>  

          </div>

        </div>

      </div>

    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-10">

            <div class="row">

              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">

                  <div class="text">

                    <strong class="number" data-number="1350000">0</strong>

                    <span>Jobs</span>

                  </div>

                </div>

              </div>

              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">

                  <div class="text">

                    <strong class="number" data-number="40000">0</strong>

                    <span>Members</span>

                  </div>

                </div>

              </div>

              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">

                  <div class="text">

                    <strong class="number" data-number="30000">0</strong>

                    <span>Resume</span>

                  </div>

                </div>

              </div>

              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">

                  <div class="text">

                    <strong class="number" data-number="10500">0</strong>

                    <span>Company</span>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section class="ftco-section ftco-counter">

      <div class="container">

        <div class="row justify-content-center mb-5 pb-3">

          <div class="col-md-7 heading-section text-center ftco-animate">

            <span class="subheading">Categories work wating for you</span>

            <h2 class="mb-4"><span>Current</span> Job Posts</h2>

          </div>

        </div>

        <div class="row">

          <div class="col-md-3 ftco-animate">

            <ul class="category">

              <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>

              <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>

              <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>

              <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>

            </ul>

          </div>

          <div class="col-md-3 ftco-animate">

            <ul class="category">

              <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>

              <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>

              <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>

              <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>

            </ul>

          </div>

          <div class="col-md-3 ftco-animate">

            <ul class="category">

              <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>

              <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>

              <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>

              <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>

            </ul>

          </div>

          <div class="col-md-3 ftco-animate">

            <ul class="category">

              <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>

              <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>

              <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>

              <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>

            </ul>

          </div>

        </div>

      </div>

    </section>

    <section class="ftco-section-parallax">

      <div class="parallax-img d-flex align-items-center">

        <div class="container">

          <div class="row d-flex justify-content-center">

            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">

              <h2>FEEDBACK</h2>

              <p style="color: #000;">if you guys are dissatisfied anything, let send email for us. <br>We'll make you guys satisfied back!</p>

                <a href="feedback.php"><svg class="bi bi-box-arrow-right" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: #000;">
                <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 010-.708L14.293 8l-2.647-2.646a.5.5 0 01.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h9a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 01.5 12V4A1.5 1.5 0 012 2.5h7A1.5 1.5 0 0110.5 4v1.5a.5.5 0 01-1 0V4a.5.5 0 00-.5-.5H2a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h7a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V12A1.5 1.5 0 019 13.5H2z" clip-rule="evenodd"/>
                </svg></a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

<?php

  include('include/footer.php');

?>

