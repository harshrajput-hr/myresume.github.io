<?php
include('header.php');
if(isset($_POST['submit']))
{
	$qualification=$_POST['qualification'];
	$course_name=$_POST['course_name'];
	$year=$_POST['year'];
	$college=$_POST['college'];
	$query=mysqli_query($conn,"INSERT INTO `education`(`qualification`, `year`, `college`, `name`)
	VALUES ('$qualification','$year','$college','$course_name')");
}
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
              <h4 class="page-title">Education page</h4>
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
          <div class="row" style="margin-right:200px">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
              
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-6 col-xlg-9 col-md-12">
              <div class="card">
			 
                <div class="card-body">
                  <form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-4">
                      <label class="col-md-12 p-0">Add Qualification</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Qualification"
                          class="form-control p-0 border-0"
						  name="qualification"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Specialization</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Specialization"
                          class="form-control p-0 border-0"
						  name="course_name"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Year</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Qualification Year"
                          class="form-control p-0 border-0"
						  name="year"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">College</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="College Name"
                          class="form-control p-0 border-0"
						  name="college"
						  required
                        />
                      </div>
                    </div>
					
                  
					
                    <div class="form-group mb-4">
                      <div class="col-sm-12">
                        <button class="btn btn-success" type="submit" name="submit">Update Profile</button>
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