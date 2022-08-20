<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
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
                            <li><a href="welcome.php">Student Dashboard</a></li>
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
                            <td align="right">
                                <span>
                                    <b> Programme : </b> <i> COMPUTER SCIENCE. (ND)(FT)</i>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <div style="padding:50px;overflow:auto;width:800px;height:800px">
                    <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                        <div class="section-title row text-center"> 
                            <div>
                                <h4 style="color: darkgreen; font-weight: bolder; font-size: larger; text-align: center;">CS/ND/20/000025 - MUSTOPHA ABDULWARITH OLAYIKANMI</h4>
                                <hr>



                                <!-- I started content here -->
                            <div style="text-align: left;">
                                    <p style="font-weight: bold; float: left;">Post-Primary Examination Results</p>
                                <table style="float: left;" cellpadding="15px">
                                    <tr>
                                        <td valign="top">
                                <table style="float: left; width: 200px;" border="3">
                                    <tr>
                                        <td colspan="2">
                                            <u style="font-weight: bold; color: Darkgreen;">The First Examination</u>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Date:</td>
                                        <td>
                                        <span>2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Center:</td>
                                        <td>
                                        <span>T SOLUTION EDUCATIONAL CENTRE</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;"><u>
                                        Number:</u></td>
                                        <td>
                                        <span>24084015</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Type:</td>
                                        <td>
                                        <span>NABTEB</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table style="float: center; width: 200px; padding: 0px;" border="3">
                                    <tr>
                                        <td colspan="3">
                                            <u style="font-weight: bold; color: Darkgreen;">Subjects</u>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>S/No</th>
                                        <th>SUBJECT</th>
                                        <th>GRADE</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Agricultural Science</td>
                                        <td>C4</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Biology</td>
                                        <td>F9</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Chemistry</td>
                                        <td>C5</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Comunication Technology</td>
                                        <td>P8</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Economics</td>
                                        <td>C4</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>English Language</td>
                                        <td>C6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mathematics</td>
                                        <td>P8</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Physics</td>
                                        <td>P7</td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top">
                                <table style="float: center; width: 200px;" border="3">
                                    <tr >
                                        <td colspan="2">
                                            <u style="font-weight: bold; color: Darkgreen;">The First Examination</u>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Date:</td>
                                        <td>
                                        <span>2019</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Center:</td>
                                        <td>
                                        <span>T SOLUTION EDUCATIONAL CENTRE</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;"><u>
                                        Number:</u></td>
                                        <td>
                                        <span>24084015</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: Darkgreen; font-weight: bolder;">
                                        Type:</td>
                                        <td>
                                        <span>NABTEB</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table style="float: right; width: 200px; padding: 0px;" border="3">
                                    <tr>
                                        <td colspan="3">
                                            <u style="font-weight: bold; color: Darkgreen;">Subjects</u>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>S/No</th>
                                        <th>SUBJECT</th>
                                        <th>GRADE</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Agricultural Science</td>
                                        <td>C4</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Biology</td>
                                        <td>F9</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Chemistry</td>
                                        <td>C5</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Comunication Technology</td>
                                        <td>P8</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Economics</td>
                                        <td>C4</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>English Language</td>
                                        <td>C6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Mathematics</td>
                                        <td>P8</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Physics</td>
                                        <td>P7</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                    &nbsp;<hr>
                    <table style="width: 150%">
                        <tr>
                            <td>
                            <table style="font-weight: bold;">
                                <tr>
                                    <th>
                                        <u>FIRST QUALITFICATION</u>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Name of Institution:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Location:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Year ND Certificate Obtained: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Year I.T was Done:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Certificate Obatined:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Field of study: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Class/Grade: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        CGPA
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table style="font-weight: bold;">
                                <tr>
                                    <th>
                                        <u>SECOND QUALITFICATION</u>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Name of Institution:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Location:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Year ND Certificate Obtained: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Year I.T was Done:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Certificate Obatined:
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Field of study: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Class/Grade: 
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        CGPA
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        </tr>
                    </table>
                    
                            </div><!-- I ended content here --> 
                            </div>
                        </div><!-- end title -->
                    </table>
                </div>
            </td>
        </tr>


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
                            <table cellspacing="0" cellpadding="0" border="0" style="text-align: right; color: white">
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