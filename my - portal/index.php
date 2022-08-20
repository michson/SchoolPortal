<?php
// Initialize the session
session_start();


echo "<script> alert('We advise you to use laptop or desktop to view this site...');</script>";
?>


<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Gracleand Polytechnic Offa</title>  
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
<div style="background-color: lightgreen">
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Warning!!</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<p>Are you sure you want to logout?</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<li><a href="logout.php">Yes</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<li><a data-dismiss="modal" aria-hidden="true">No</a></li>
				</ul>
				<!-- Tab panes -->
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
		<div style="text-align: center;" class="col-lg-7 col-md-7 col-xs-12">
			<h1 style="color: white; font-weight: bolder; letter-spacing: 3px">GRACELAND POLYTECHNIC OFFA<u><span class="m_1">Student Dashboard</span></u></h1>
		</div>				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="#">My Polytechnic</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Signout</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->



<!--Section Begain --->
<table>
	<tr>
		<td style="height: all; width: 20%; background-color: lightgreen; position: top" valign="top">
<div id="overviews"> <!-- class="section lb" style="margin: 0; padding: 0; position: fixed; overflow: auto;" -->
        <div class="container">

			<div class="row align-items-center">
				 <div>
					<div class="widget-categories" style="padding-left: 10px" >
						<img src="images/ghost_person.png" alt="" style="height: 200px" class="img-fluid img-rounded">
						<ul>
							<li><a href="#">Student Dashboard</a></li>
						</ul>
						<p></p>
						<h3 class="widget-title">My Profile</h3>
						<ul>
                            <li><a href="biodata.php">Edit Biodata</a></li>
                            <li><a href="qualifications.php">My Qualifications</a></li>
                            <li><a href="fees.php">My Fees</a></li>
                            <li><a href="registration.php">My Registration</a></li>
                            <li><a href="library.php">My Library</a></li>
                            <li><a href="accomodation.php">My Accomodation</a></li>
                            <li><a href="assignments.php">My Assignments</a></li>
                            <li><a href="result.php">My Result</a></li>
                            <li><a href="#">My Application Report</a></li>
                            <li><a href="#">My Biodata Report</a></li>
                            <li><a href="#">My Payments Report</a></li>
                            <li><a href="#">My Registrations Report</a></li>
                            <li><a href="#">My Result Roport</a></li>
                            <li><a href="reset-password.php">Change My Password</a></li>
						</ul>
					</div>
    			</div><!-- end section style="margin: 0; padding: 0; overflow: scroll; -->
    		</div>
    	</div>
    </div>
</td>
<td  rowspan="1" valign="top" bgcolor="White" align="left" style="background-color: lightgreen; border-color: green; border-width: 10px; border-style: solid; padding: 5px" >
<!-- another section (right)   style="float: right; height: all; width: 80%; overflow: all;" -->

<table>
	<tbody>
		<tr>
			<td>

				<table style="background-color: darkgreen; color: white" width="100%">
					<tbody>
						<tr>
							<td>
								<span style="font-size: medium; font-weight:bold">
									Dashboard
								</span>
							</td>
							<td>&nbsp;
							</td>
                                    <!-- PHP code for fetching data from database -->
                                     
							<td align="right">
								<span>
									<b> Programme : </b> <i> <?php echo $row['course']; ?> (ND)(FT)</i>
								</span>
							</td>
                                          </tbody>
                                </table>
			</td>
		</tr>
        <tr>
        	<td>
        		<div id="m_dnn_ctr644_MyInfo_frmContent" style="padding:50px;overflow:auto;width:800px;height:800px">
        			<table style="width:100%" cellspacing="0" cellpadding="3" border="0">
        				<!-- <div class="section-title row text-center"> 
        					<div class="col-md-8 offset-md-2">
        						<h4 style="color: darkgreen; font-weight: bolder; font-size: larger;">My Dashboard</h4>
        					</div>
        				</div> --><!-- end title -->
        				
<!-- I started the content here for the bio data-->

        				<table>
        					<tr>
	<div class="hmv-box">
		<div class="container">
				<p style="float: left;">Registration</p>
				<p style="float: center; margin-left: 350px;">Biodata</p>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="registration.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/reg.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Do Registration
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Print-icon.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                My Registration Report
                            </p>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
				<a href="biodata.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/users.ico" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Edit Biodata
                            </p>
						</p>
					</div>
				</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Print-icon.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Biodata Report
                            </p>
						</p>
					</div>
				</div>
			</div>
				<p>
					<br>
				</p>

			<hr>

			<p style="float: left;">Payment</p>
				<p style="float: center; margin-left: 350px;">Application</p>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="fees.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/coin.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Make Payment
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Print-icon.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Payments Report (Receipts)
                            </p>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Print-icon.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Application Report
                            </p>
						</p>
					</div>
				</div>
			</div>
				<p>
					<br>
				</p>

			<hr>

			<p style="float: left;">Result</p>
				<p style="float: center; margin-left: 350px;">Qualification</p>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="result.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Reports.ico" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Check Result
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/Print-icon.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Results Report
                            </p>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="qualifications.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/1.jpg" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                View Qualification
                            </p>
						</p>
					</div>
					</a>
				</div>
			</div>
				<p>
					<br>
				</p>

			<hr>

			<p>Others</p>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<a href="assignments.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/icon_news.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                My Assignment
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="library.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/library.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                My Library 
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="accomodation.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/accommodation.ico" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Accommadation
                            </p>
						</p>
					</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<a href="reset-password.php">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i><img src="images/password.png" width="50px" style="margin-top: 20px"></i></div>
						<p>
                           <p>
                                Change My Password
                            </p>
						</p>
					</div>
					</a>
				</div>
			</div>

		</div>
	</div>			
        					</tr>
        				</table>
        			</table>

<!-- I ended the content here for the bio data -->

        			<tbody>



<!-- No fuctino except break table left -->
</tbody>
</table>
							</td>
						</tr>
					</tbody></table>
				</div>
				</td>
			</tr>
<!-- No fuctino except break table left -->
<tr>
	<td valign="bottom">
		<div style="background-color: seagreen; color: white">
			<table cellspacing="0" cellpadding="0" border="0">
				<tbody>
					<tr>
						<td valign="bottom"> </td>
					</tr>
					<tr>
						<td>
							<table cellspacing="0" cellpadding="0" border="0" style="text-align: right; color: white; margin-left: 10px">
								<tbody>
									<tr>
										<td valign="top">
											<span>
												<span><a href="index.html" target="_blank">Home</a><span> | </span><a href="reset-password.php">Change Password</a></span>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td>&nbsp;
							<span>POWERED BY NTL</span>&nbsp;
							<a href="#" target="_blank">Terms Of Use</a>&nbsp;
							<a href="#" target="_blank">Privacy Statement</a>&nbsp;
							<a href="#" target="_blank">Help</a>&nbsp;
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</td>
</tr>
</table>

</div>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>