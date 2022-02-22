<?php 
include('admin/conn.php');
$query=mysqli_query($conn,"SELECT * FROM `admin`");
$fetch=mysqli_fetch_array($query);
$name=$fetch['name'];
$image=$fetch['image'];
$phone_no=$fetch['phone'];
$birthday=date('Y-m-d', strtotime($fetch['birthday']));;
$degree=$fetch['degree'];
$experience=$fetch['experience'];
$address=$fetch['address'];
$email=$fetch['email'];
$status=$fetch['freelance'];
$resume=$fetch['resume'];
$profile=$fetch['profile'];
$objective=$fetch['career_objective'];
$portfolio=$fetch['portfolio'];
?>

<!DOCTYPE html>
<html lang="en">

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
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary"><?php echo $name;?></h1>
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

    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, My name</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;"><?php echo $name;?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Mechanical Designer, Mechanical Engineer, AutoCAD , SolidWorks, 2D and 3D Designer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="admin/resume/<?php echo $resume;?>"  download class="btn btn-white mr-4">Download Resume</a>
                        
                        <a href="admin/portfolio/<?php echo $portfolio;?>"download class="btn btn-blue d-none d-sm-block">Download Portfolio</a>
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                    <img class="rounded-circle shadow-sm" src="admin/img/<?php echo $image;?>" style="margin-left:120px" width="300px" height="300px" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="admin/img/<?php echo $image;?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4"><?php echo $profile;?></h3>
                    <p><?php echo $objective;?></p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary"><?php echo $name;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary"><?php echo $birthday;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary"><?php echo $degree;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo $experience;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">+91<?php echo $phone_no;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"><?php echo $email;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary"><?php echo $address;?></span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Current Company: <span class="text-secondary"><?php echo $status;?></span></h6></div>
                    </div>
                    <a href="tel://9897024967" class="btn blue btn-outline-primary mr-4">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center"><?php 

$qq=mysqli_query($conn,"SELECT * FROM `skill`");
while($fetch1=mysqli_fetch_array($qq))
{
$skill=$fetch1['skill'];
$percent=$fetch1['percent'];

$color = '';
if ($percent > 90) {
    $color = 'green';
}else if($percent >= 50){
    $color = 'red';
}

?>
                <div class="col-md-6">
  
                    <div class="skill mb-4">
                      <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"><?php echo $skill;?></h6>
                            <h6 class="font-weight-bold"><?php echo $percent;?>%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar <?php echo $color;?>" role="progressbar" aria-valuenow="<?php echo $percent;?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                          </div><?php
		}
	?> 
						 
            </div> 
        
        </div>
    </div>
	
    <!-- Skill End -->




    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
				<div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
					<?php 
                   $q1=mysqli_query($conn,"SELECT * FROM `experience`");
                   while($fet1=mysqli_fetch_array($q1))
					 
					{
					?>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $fet1['designation'];?></h5>
                            <p class="mb-2"><strong><?php echo $fet1['company'];?></strong></p>
                        </div>
                        <?php 
							}
						?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
					<?php 
$q=mysqli_query($conn,"SELECT * FROM `education`");
while($fet=mysqli_fetch_array($q))
{
?>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo $fet['name'];?>(<?php echo $fet['qualification'];?>)
                            </h5>
                            <p class="mb-2"><strong><?php echo $fet['college'];?></strong> | <small><?php echo $fet['year'];?></small></p>
                        </div>
						 <?php 
							}
						?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Qualification End -->



    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
			<?php 
			
			$project=mysqli_query($conn,"SELECT * FROM `project` ORDER BY `id` DESC Limit 6");
			while($ff=mysqli_fetch_array($project))
			{
			?>
                <div class="service-box col-lg-3 col-md-6 text-center mb-5" style="margin-left:70px">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                       <img src="admin/course_img/<?php echo $ff['image'];?>" class="rounded-circle" width="60px" height="60px">&nbsp &nbsp
                        <h4 class="font-weight-bold m-0"><?php echo $ff['course_name'];?></h4>
                    </div>
                    <p><?php echo $ff['course_description'];?></p>
                    <a class="border-bottom border-primary text-decoration-none" href="project.php?id=<?php echo $ff['id']?>">Read More</a>
                </div>
				<?php 
				
			}
				
				?>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4">
				 
					<?php 
				$qqq=mysqli_query($conn,"SELECT * FROM `project`");
				while($fff=mysqli_fetch_array($qqq))
				{
				?>
				<li class="btn btn-sm btn-outline-primary m-1" data-filter="<?php echo $fff['id'];?>"><?php echo $fff['course_name'];?></li>
				<?php }?>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
			<?php 
			$q1=mysqli_query($conn,"SELECT * FROM `project_image` ORDER BY `id` DESC Limit 6");
					while($fetch1=mysqli_fetch_array($q1))
					{
					?>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
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
	<center><a href="more.php"><button type="button" class="btn btn-outline-primary">More</button></a></center>


    <!-- Portfolio End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form id="" method="post">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" name="name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" name="email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" name="subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required" name="msg"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" name="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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