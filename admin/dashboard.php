<?php
include('header.php');

$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM `admin` where id='$id'");
$fetch=mysqli_fetch_assoc($query);
$name=$fetch['name'];
$image=$fetch['image'];
$phone_no=$fetch['phone'];
$birthday=date('Y-m-d', strtotime($fetch['birthday']));;
$degree=$fetch['degree'];
$experience=$fetch['experience'];
$address=$fetch['address'];
$email=$fetch['email'];
$status=$fetch['freelance'];
$profile=$fetch['profile'];
$objective=$fetch['career_objective'];

?>
   
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">Dashboard</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                  <li><a href="#" class="fw-normal">Dashboard</a></li>
                </ol>
                <a
                  href="profile.php"
                  target="_blank"
                  class="
                    btn btn-danger
                    d-none d-md-block
                    pull-right
                    ms-3
                    hidden-xs hidden-sm
                    waves-effect waves-light
                    text-white
                  "
                  >Update Profile</a
                >
              </div>
            </div>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
        
          <!-- ============================================================== -->
          <!-- PRODUCTS YEARLY SALES -->
          <!-- ============================================================== -->
        
          <!-- ============================================================== -->
          <!-- RECENT SALES -->
          <!-- ============================================================== -->
     
          <!-- ============================================================== -->
          <!-- Recent Comments -->
          <!-- ============================================================== -->
       <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/<?php echo $image;?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><b><?php echo $name;?></b></h4>
                      <p class="text-secondary mb-1"><?php echo $profile;?></p>
                     
                      
                    </div>
                  </div>
                </div>
              </div>
	          <div class="card mt-3">
                 <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Skill</h6>
                     		 <?php 
						$qq=mysqli_query($conn,"SELECT * FROM `skill`");
							while($fetch1=mysqli_fetch_array($qq))
							{
							$skill=$fetch1['skill'];
							$percent=$fetch1['percent'];

							?>
   <div class="skill mb-4">
                      <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $skill;?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent;?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar btn-info" role="progressbar" aria-valuenow="<?php echo $percent;?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
	<?php
		}
	?> 
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Degree</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $degree;?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Experience</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $experience;?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $phone_no;?>
                    </div>
                  </div>
                  <hr>
                 
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $address;?>
                    </div>
                  </div><hr>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $status;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="profile.php">Edit</a>
                    </div>
                  </div>
                </div>
              </div>



            </div>
			
          </div>

        </div>
    </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       <?php
include('footer.php');

?>