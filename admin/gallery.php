<?php 

include('header.php');
if(isset($_POST['submit']))
{
	$project=$_POST['project'];
	$image=$_FILES['image']['name'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"course_img/".$_FILES['image']['name']);
	$qq=mysqli_query($conn,"INSERT INTO `project_image`(`course`, `image`) VALUES ('$project','$image')");
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
              <h4 class="page-title">Project Images page</h4>
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
				   
                   
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Select Project</label>
                      <div class="col-md-12 border-bottom p-0">
					  <select class="form-control p-0 border-0" name="project"> 
				<?php 
				$qqq=mysqli_query($conn,"SELECT * FROM `project`");
				while($fff=mysqli_fetch_array($qqq))
				{
				?>
				<option class="form-control" value="<?php echo $fff['id'];?>"><?php echo $fff['course_name'];?></option><?php }?>
					  </select>
				
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Upload Image</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="file"
                          class="form-control p-0 border-0"
						  name="image"
						  required
                        />
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <div class="col-sm-12">
                        <button class="btn btn-success" name="submit" type="submit">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->  <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                
                <div class="table-responsive">
                  <table class="table no-wrap">
                    <thead>
					
                      <tr>
                        <th class="border-top-0">#</th>
                        
                        <th class="border-top-0">Image</th>
                        <th class="">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php 
					
					
					$q1=mysqli_query($conn,"SELECT * FROM `project_image`");
					while($fetch1=mysqli_fetch_array($q1))
					{
					?>
                      <tr>
                        <td><?php echo $fetch1['id'];?></td>
                        
                        <td><img src="course_img/<?php echo $fetch1['image'];?>" width="80px" height="80px"></td>
						<td><a href="gallery_delete.php?id=<?php echo $fetch1['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                      </tr>
					 <?php
					}
					 ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
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