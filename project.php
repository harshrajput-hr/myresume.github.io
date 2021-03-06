<!DOCTYPE html>
<html lang="en">
<?php 
	include('admin/conn.php');
	$id=$_GET['id'];
	   $row=mysqli_query($conn, "SELECT * FROM `project` WHERE id='$id'");
	   $college_rowh=mysqli_fetch_array($row);

?>
<head>
    <meta charset="utf-8">
    <title>HarshRajput - Portfolio</title>	<link rel="icon" href="img\icon2.png" type="image/gif/png">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet"><style>
	.whatsaapp_float
	{
		position:fixed;
		bottom:100px;
		right:20px;
	}
	</style>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5 nav-fixed-top">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary"></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="mailto:hrajput159@gmail.com" class="btn btn-menu d-none d-lg-block" style="background-color:#457efa; color: #ffffff;">Hire Me</a>
        </div>
    </nav>
    <!-- Navbar End -->

 <div class="whatsaapp_float">
	<a href="https://wa.me/919897024967"><img src="4188696.png"  width="90px"></a>
 </div>
  
  
 
 <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;"><?php echo $college_rowh['course_name'];?></h1>
                <h1 class="position-absolute text-uppercase text-primary"><?php echo $college_rowh['course_name'];?></h1>
            </div>
 
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-circle" src="admin/course_img/<?php echo $college_rowh['image'];?>"  style="height:300px;width:300px" alt="">
                </div>
                <div class="col-lg-7">
                    <h2 class="mb-4">About Project</h2>
                    <p><b>Project Description</b></p>
                    <div class="row mb-4 ml-1">
                    <?php echo $college_rowh['course_description'];?>
					</div>
					
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> <div class="container-fluid pt-5 pb-3 mt-5" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="position-absolute text-uppercase text-primary">Project Related Images</h1>
            </div>
            
            <div class="row portfolio-container mt-5">
			<?php 
			$q1=mysqli_query($conn,"SELECT * FROM `project_image` where course='$id'");
					while($fetch1=mysqli_fetch_array($q1))
					{
					?>
                <div class="col-lg-4 col-md-6 mb-4 mt-5 portfolio-item">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="admin/course_img/<?php echo $fetch1['image'];?>"  style="height:200px;width:200px"alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="admin/course_img/<?php echo $fetch1['image'];?>" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
				<?php 
				
					}
				?>

            </div>
        </div>  

    </div>
	<center><a href="index.php"><button type="button" class="btn btn-outline-primary">Back to Home</button></a></center>

  <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">HarshRajput</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="#">Harsh Rajput</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>