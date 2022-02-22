<?php
include('header.php');
if(isset($_POST['submit']))
{
	
	$course_name=$_POST['course_name'];
	$image=$_FILES['image']['name'];
	$course_description=$_POST['course_description'];
	
    move_uploaded_file($_FILES["image"]["tmp_name"],"course_img/".$_FILES["image"]["name"]);
	$query=mysqli_query($conn,"INSERT INTO `project`(`course_name`, `course_description`, `image`)
	VALUES ('$course_name','$course_description','$image')" )or die(mysqli_error($conn));
	if($query)
	{
		echo '<script type="text/javascript">;
			alert("Update Successfully");
			window.location="add_project.php";
		</script>';
	}	else
	{
		echo '<script type="text/javascript">;
			alert("Something went wrong");
			window.location="add_project.php";
		</script>';
	}
}
?>
   	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.min.css">

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
                      <label class="col-md-12 p-0">Course Name</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="text"
                          placeholder="Course Name"
                          class="form-control p-0 border-0"
						  name="course_name"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Upload Image</label>
                      <div class="col-md-12 border-bottom p-0">
                        <input
                          type="file"
                          placeholder="Current Company"
                          class="form-control p-0 border-0"
						  name="image"
						  required
                        />
                      </div>
                    </div>
					<div class="form-group mb-4">
                      <label class="col-md-12 p-0">Course Description</label>
                      <div class="col-md-12 border-bottom p-0"><div class="form-group">
					<textarea id="content" name="course_description" class="form-control" max="255"></textarea>
				</div>
                       
                      </div>
                    </div>
                    <div class="form-group mb-4">
                      <div class="col-sm-12">
                        <button class="btn btn-success" name="submit" type="submit">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row --> <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                
                <div class="table-responsive">
                  <table class="table no-wrap">
                    <thead>
					
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Course Name</th>
                        <th class="border-top-0">Description</th>
                        <th class="border-top-0">Image</th>
                        <th class="border-top-0">Delete</th>
                      </tr>
                    </thead>
                    <tbody><?php
					$num=1;
					$q=mysqli_query($conn,"SELECT * FROM `project`");
					
						while($fetch=mysqli_fetch_array($q))
						{
					
					?>
                      <tr>
                        <td><?php echo $num++;?></td>
                        <td class="txt-oflo"><?php echo $fetch['course_name'];?></td>
                     
                        <td class="txt-oflo"><?php echo $fetch['course_description'];?></td>
                        <td><img src="course_img/<?php echo $fetch['image'];?>" width="80" height="80px"></span></td>
						<td><a href="delete.php?id=<?php echo $fetch['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
</td>
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
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
	    selector: '#content'
	});
</script>