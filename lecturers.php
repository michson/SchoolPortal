<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Graceland Polytechnic Offa</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login or Registration</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<p></p>
						<center><h4>Already have an account? you can <a href="login.php">Login here</a></h4></center>
						<p></p>
						<div class="row">							
								<div class="col-sm-10">
									<a href="login.php"><button type="button" class="btn btn-light btn-radius btn-brd grd1">
										LOGIN
									</button></a>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1" data-dismiss="modal" aria-hidden="true">
										Cancel</button>
								</div>
						</div>
					</div>	
					<div class="tab-pane" id="Registration">
						<p></p>
						<center><h4>Go back to homepage or click the <b>APPLY NOW</b> button to apply for your Addmission</h4></center>
						<p></p>
						<div class="row">							
								<div class="col-sm-10">
									<a href="admission.html"><button type="button" class="btn btn-light btn-radius btn-brd grd1">
										APPLY NOW
									</button></a>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1" data-dismiss="modal" aria-hidden="true">
										Cancel</button>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="about.html" id="dropdown-a" data-toggle="dropdown">About Us </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="about.html">School History </a>
								<a class="dropdown-item" href="about.html">Mission & Vision</a>
								<a/ class="dropdown-item" href="about.html">Governing Council</a>
								<a class="dropdown-item" href="about.html">Academic Board</a>
								<a class="dropdown-item" href="about.html">Principal Officer</a>
								<hr>
								<a class="dropdown-item" href="past-admin.html">Past Administrators</a>
								<hr>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Schools</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="schools.html">School of Applied Science and Technology</a>
								<a class="dropdown-item" href="schools.html">School of Business and Management Studies</a>
								<a/ class="dropdown-item" href="schools.html">School of Engineering Technology</a>
								<a class="dropdown-item" href="schools.html">School of Information and Communication Technolgy </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Programmes</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="programmes.html">National Diploma</a>
								<a class="dropdown-item" href="programmes.html">High National Diploma</a>
								<hr>
								<a/ class="dropdown-item" href="programmes.html">NCE</a>
								<hr>
								<a class="dropdown-item" href="programmes.html">Health Education</a>
								<a class="dropdown-item" href="programmes.html">Computer-Based Test (CBT)</a>
								<a class="dropdown-item" href="programmes.html">Certificate Programmes</a>
								<a class="dropdown-item" href="programmes.html">Continuing Education Programmes</a>
								<a class="dropdown-item" href="programmes.html">IJMB</a>
							</div>
						</li>
						<li class="nav-item active"><a class="nav-link" href="lecturers.html">Lecturers</a></li>
						<li class="nav-item"><a class="nav-link" href="admission.html">Admission</a></li>
						<li class="nav-item"><a class="nav-link" href="pricing.html">Library</a></li>
							<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Quick Access</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="nbte.html">NBTE</a>
								<a class="dropdown-item" href="jamb.html">JAMB</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>LOGIN</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Lecturers</h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">

				<div class="col-lg-3 col-md-6 col-12" id="abayomi">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/abayomi.jpg"  style="margin-top: 140px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
            	<a href="abayomi.html">						
						<div class="team-content">
							<h3 class="title">Mr. Abayomi</h3>
							<span class="post">HOD Computer Science</span>
						</div>
					</div>
				</a>					
				</div>

				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/mummy.jpg">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mrs. Orisunmibare</h3>
							<span class="post">Computer Science Department</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/lawal2.jpg" style="margin-top: 60px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mr. Lawal</h3>
							<span class="post">Information and Communication Technology Department</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/sta.jpg" style="margin-top: 20px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Name</h3>
							<span class="post">Computer Science Department</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12" id="abayomi">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/abayomi.jpg"  style="margin-top: 140px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mr. Abayomi</h3>
							<span class="post">HOD Computer Science</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/mummy.jpg">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mrs. Orisunmibare</h3>
							<span class="post">Computer Science Department</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/lawal2.jpg" style="margin-top: 60px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Mr. Lawal</h3>
							<span class="post">Information and Communication Technology Department</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="images/school/sta.jpg" style="margin-top: 20px">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Name</h3>
							<span class="post">Computer Science Department</span>
						</div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	

 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Graceland Polytechnic, Offa was established in 2013 on the initiative of the President CEO Princess (Dr). Ayodele Olufemi Oyeleke. The Polytechnic is set to provide full time and part time courses of instruction and training in Technology, Applied Science, Commerce, Management, Industrial, Agricultural Production and Distribution, Research in the development and adaptation of technique as the Governing Council may from time to time determine. It is to arrange conferences, seminars and study groups relative to the fields of learning and to perform such other functions as in the opinion of the Governing Council may serve to promote the objectives of the Polytechnic.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="schools.html">Schools</a></li>
							<li><a href="programmes.html">Programmes</a></li>
							<li><a href="teachers.html">Teachers</a></li>
							<li><a href="admission.html">Admission</a></li>
							<li><a href="library.html">Library</a></li>
							<li><a href="contact.html">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:info@gracelandpolytechnicoffa.edu.ng">info@gracelandpolytechnicoffa.edu.ng</a></li>
                            <li><a href="www.gpo.com">www.gpo.com</a></li>
                            <li>PO Box 16122 </li>
                            <li>NO. 0 Beside Navy base Offa Kwara state. </li>
                            <li><a href="dailto: +234-803-8102-114">+234-803-8102-114,</a><a href="dailto: +234-905-2510-621">+234-905-2510-621</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">Graceland Polytechnic Offa</a> Design By : <a href="https://html.design/">Project Student</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>
