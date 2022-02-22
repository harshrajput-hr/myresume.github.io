<?php
include('header.php');
$id=$_SESSION['id'];
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$image=$_FILES['image']['name'];
	$phone_no=$_POST['phone_number'];
	$birthday=date('Y-m-d', strtotime($_POST['birthdate']));
	$degree=$_POST['degree'];
	$experience=$_POST['experience'];
	$address=$_POST['address'];
	$status=$_POST['status'];
	$email=$_POST['email'];
	$profile=$_POST['profile'];
	$objective=$_POST['objective'];
	
	
    move_uploaded_file($_FILES["image"]["tmp_name"],"img/".$_FILES["image"]["name"]);
	$query=mysqli_query($conn,"UPDATE `admin` SET `name`='$name',`image`='$image',
	`email`='$email',`phone`='$phone_no',`degree`='$degree',`birthday`='$birthday',`address`='$address',
	`experience`='$experience',`freelance`='$status',`profile`='$profile',`career_objective`='$objective' WHERE id='$id'");
	
}

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
              <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                  <li><a href="#" class="fw-normal">Dashboard</a></li>
                </ol>
                <a
                  href="https://www.wrappixel.com/templates/ampleadmin/"
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
                  >Upgrade to Pro</a
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
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <!-- Row -->
          <div class="row">
            <!-- Column -->
           
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
              <div class="card">
                <div class="card-body">
                  <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
				   <div class="user-bg">
                  <img
                    width="100%"
                    alt="user"
                    src="img/<?php echo $image;?>"
                  />
                  <div class="overlay-box">
                    <div class="user-content">
                      <a href="javascript:void(0)"
                        ><img
                          src="img/<?php echo $image;?>"
                          class="thumb-lg img-circle"
                          alt="img"
						  name="image"
                      />
					 
					  </a>
					  
                      <h4 class="text-white mt-2"><?php echo $name;?></h4>
                      <h5 class="text-white mt-2"><?php echo $email;?></h5>
					   
                    </div>
                  </div>
                </div>
                    
                    
                   
                    <div class="form-group mb-4">
                      <label class="col-md-12 p-0">Phone No</label>
                      <div class="col-md-12 border-bottom p-0">
                        
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <label class="col-md-12 p-0">Name</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Enter Your Name"
                          class="form-control p-0 border-0"
						  name="name"
						  required
                        />
                      </div>
                    </div> 
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Profile Status</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Profile"
                          class="form-control p-0 border-0"
						  name="profile"
						  required
                        />
                      </div>
                    </div>
					
                  <div class="form-group mb-4">
                      <label class="col-md-12 p-0">Change Profile</label>
                      <div class="col-md-12 border-bottom p-0">
                       <input type="file" name="image" required>
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Phone No</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="+91"
                          class="form-control p-0 border-0"
						  name="phone_number"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Email</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="email"
                          placeholder="Enter Your Email"
                          class="form-control p-0 border-0"
						  name="email"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Birthday</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="date"
                          placeholder="Date"
                          class="form-control p-0 border-0"
						  name="birthdate"
						  required
                        />
                      </div>
                    </div><div class="form-group mb-4">
                      <label class="col-md-12 p-0">Degree</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Education"
                          class="form-control p-0 border-0"
						  name="degree"
						  required
                        />
                      </div>
                    </div><div class="form-group mb-4">
                      <label class="col-md-12 p-0">Experience</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Experience"
                          class="form-control p-0 border-0"
						  name="experience"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Address</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Full Address"
                          class="form-control p-0 border-0"
						  name="address"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Current Company</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Current Company"
                          class="form-control p-0 border-0"
						  name="status"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Career Objective</label>
                      <div class="col-md-12 border-bottom p-0">
                        <textarea
                          type="text"
                          placeholder="Career Objective"
                          class="form-control p-0 border-0"
						  name="objective"
						  required
                        ></textarea>
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <div class="col-sm-12">
                        <button class="btn btn-success" name="submit">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
          <?php
include('footer.php');

?>