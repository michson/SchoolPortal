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
					<li><a href="index.html">Yes</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<table><tbody><tr><td> <table style="background-color: darkgreen; color: white" width="100%"><tbody><tr><td>
            <span id="m_dnn_ctr644_MyInfo_Label1" style="font-size:Medium;font-weight:bold">Dashboard</span>
            </td><td>&nbsp;</td><td align="right">
            <span id="m_dnn_ctr644_MyInfo_lblProgram"><b> Programme : </b> <i> COMPUTER SCIENCE. (ND)(FT)</i></span>
            </td></tr></tbody></table></td></tr>
        <tr><td>
            <div id="m_dnn_ctr644_MyInfo_frmContent" style="padding:50px;overflow:auto;width:800px;height:800px">
            	
            
            

    <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
        	<div class="section-title row text-center"> 
                <div class="col-md-8 offset-md-2">
                    <h4 style="color: darkgreen; font-weight: bolder; font-size: larger;">My Dashboard</h4>
                </div>
            </div><!-- end title -->
        <tbody><tr>
            <td style="height:19px" valign="middle" align="center">
               <table id="m_dnn_ctr644_MyInfo_ctl23_tbconfirm" style="width:100%" cellspacing="0" cellpadding="3" border="0">
		<tbody><tr>
			<td align="center">
                <table class="m_lightlineubox" style="width:100%" cellspacing="0" cellpadding="3" border="0">
                    <tbody><tr>
                        <td class="m_lightback" colspan="2" align="center">
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                <tbody><tr>
                                    <td style="width:50%" align="center">
                                        <table style="width:100%" class="m_lightlineubox" cellspacing="0" cellpadding="3" border="0">
                                            <tbody><tr>
                                                <td class="m_lightback" colspan="2" style="height:22px" align="left">
                                                    <span style="font-size:10pt">Program Information</span></td>
                                            </tr>
                                <tr>
                                    <td style="padding:5px" nowrap="" align="right">
                                        Registration No./ Matric No.:</td>
                                    <td style="padding:5px">
                            <span id="m_dnn_ctr644_MyInfo_ctl23_lbApplicationNumber" style="color:Darkgreen; font-weight: bolder;">CS/ND/20/000025</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:5px" align="right">
                                        <span>
                                        School Program:</span></td>
                                    <td style="padding:5px">
                            <span id="m_dnn_ctr644_MyInfo_ctl23_lblSchoolProgram" class="m_aspNetDisabled">ND</span></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px" align="right">
                                        <span>
                                        Program of Study:</span></td>
                                    <td style="padding:5px">
                            <span id="m_dnn_ctr644_MyInfo_ctl23_lblFirstChoice" class="m_aspNetDisabled"> COMPUTER SCIENCE. (ND)(FT)</span></td>
                                </tr>
                                <tr>
                                    <td style="padding:5px" align="right">
                                        <span>
                                        Department:</span></td>
                                    <td style="padding:5px">
                                        <span id="m_dnn_ctr644_MyInfo_ctl23_lblDepartment" class="m_aspNetDisabled" style="color:Black;font-weight:normal">SCIENCE TECHNOLOGY</span></td>
                                </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    <span>
                                                    Mode Of Admission</span>:</td>
                                                <td style="padding:5px">
                                                    <span id="m_dnn_ctr644_MyInfo_ctl23_lblMode" style="color:Black"></span></td>
                                            </tr>
                                            <tr style="font-size:10pt">
                                                <td style="padding:5px" align="right">
                                                    <span>
                                                    Semester Of Admission</span>:</td>
                                                <td style="padding:5px">
                                                    <span id="m_dnn_ctr644_MyInfo_ctl23_lblSemester" style="color:Black"></span></td>
                                            </tr>
                                            <tr style="font-size:10pt">
                                                <td style="padding:5px" align="right">
                                                    <span>
                                                    Session Of Admission:</span></td>
                                                <td style="padding:5px">
                                                    <span id="m_dnn_ctr644_MyInfo_ctl23_lblSession" class="m_aspNetDisabled" style="color:Black">2019/2020</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Year of Entry:</td>
                                                <td style="padding:5px">
                                                    <span id="m_dnn_ctr644_MyInfo_ctl23_lblYearofEntry">2019</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    <span><span>
                                                    Current Le</span>vel:</span></td>
                                                <td style="padding:5px">
                                                    <span id="m_dnn_ctr644_MyInfo_ctl23_lblLevel">200</span></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                    <td style="width:50%" valign="top" align="center">
                                        <table style="width:100%" class="m_lightlineubox" cellspacing="0" cellpadding="3" border="0" align="center">
                                            <tbody><tr>
                                                <td class="m_lightback" colspan="2" align="left">
                                                    <span style="font-size:10pt">JAMB Information</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Exam No.:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtJambNo" type="text" value="APPN/LT/2019277558" id="m_dnn_ctr644_MyInfo_ctl23_txtJambNo" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Score:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtJambScore" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtJambScore" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td class="m_lightback" colspan="2" style="padding:5px" align="left">
                                                    <span style="font-size:10pt">Council Comment</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Comment</td>
                                                <td style="padding:5px">
                                                    <textarea name="dnn$ctr644$MyInfo$ctl23$txtCouncil" rows="5" cols="20" id="m_dnn_ctr644_MyInfo_ctl23_txtCouncil" class="m_aspNetDisabled m_btsInput"></textarea></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td class="m_lightback" colspan="2" style="height:22px" align="left">
                            <span style="font-size:10pt">Personal Data</span></td>
                    </tr>
                    <tr>
                        <td colspan="2" valign="top" align="right">
                            <table style="width:30%" cellspacing="0" cellpadding="3" border="0">
                                <tbody><tr>
                                    <td align="right">
                                        <img id="m_dnn_ctr644_MyInfo_ctl23_imgphoto" src="images/ghost_person.png" style="height:120px;width:140px" align="absmiddle"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr style="font-weight:bold">
                        <td colspan="2" align="center">
                            <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                <tbody><tr>
                                    <td style="width:50%" align="center">
                                        <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                            <tbody><tr>
                                                <td style="padding:5px" align="right">
                            Firstname:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtFirstname" type="text" value="ABDULWARITH" readonly="" id="m_dnn_ctr644_MyInfo_ctl23_txtFirstname" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Middlename:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtMiddlename" type="text" value="OLAYIKANMI" readonly="" id="m_dnn_ctr644_MyInfo_ctl23_txtMiddlename" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Lastname:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtLastname" type="text" value="MUSTOPHA" readonly="" id="m_dnn_ctr644_MyInfo_ctl23_txtLastname" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Marital Status:</td>
                                                <td style="padding:5px">
                                                    <select name="dnn$ctr644$MyInfo$ctl23$DDLMaritalStatus" id="m_dnn_ctr644_MyInfo_ctl23_DDLMaritalStatus" disabled="" class="m_aspNetDisabled m_btsInput">
				<option selected="" value="1">Single</option>
				<option value="2">Married</option>
				<option value="3">Widowed</option>
				<option value="4">Divorced</option>
				<option value="-1">please select</option>

			</select></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    <span><span>Religion</span><strong>:</strong></span></td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtReligion" type="text" value="ISLAM" id="m_dnn_ctr644_MyInfo_ctl23_txtReligion" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    <span>
                                                    First Language:</span></td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtFirstLang" type="text" value="YORUBA" id="m_dnn_ctr644_MyInfo_ctl23_txtFirstLang" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Second Language:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtSecondLang" type="text" value="ENGLISH" id="m_dnn_ctr644_MyInfo_ctl23_txtSecondLang" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                    <td align="center">
                                        <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                            <tbody><tr>
                                                <td style="padding:5px" align="right">
                                                    Date of Birth:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtDateOfBirth" type="Date" id="m_dnn_ctr644_MyInfo_ctl23_txtDateOfBirth" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Sex:</td>
                                                <td style="padding:5px">
                                                    <select name="dnn$ctr644$MyInfo$ctl23$DDLSex" id="m_dnn_ctr644_MyInfo_ctl23_DDLSex" disabled="" class="m_aspNetDisabled m_btsInput">
				<option selected="" value="M">Male</option>
				<option value="F">Female</option>

			</select></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Nationality:</td>
                                                <td style="padding:5px">
                                                    <select name="dnn$ctr644$MyInfo$ctl23$DDLNationality" id="m_dnn_ctr644_MyInfo_ctl23_DDLNationality" disabled="" class="m_aspNetDisabled m_btsInput">
				<option value="3">Afghanistan, Islamic State of</option>
				<option value="6">Albania</option>
				<option value="62">Algeria</option>
				<option value="13">American Samoa</option>
				<option value="1">Andorra, Principality of</option>
				<option value="9">Angola</option>
				<option value="5">Anguilla</option>
				<option value="10">Antarctica</option>
				<option value="4">Antigua and Barbuda</option>
				<option value="11">Argentina</option>
				<option value="7">Armenia</option>
				<option value="16">Aruba</option>
				<option value="15">Australia</option>
				<option value="14">Austria</option>
				<option value="17">Azerbaidjan</option>
				<option value="31">Bahamas</option>
				<option value="24">Bahrain</option>
				<option value="20">Bangladesh</option>
				<option value="19">Barbados</option>
				<option value="35">Belarus</option>
				<option value="21">Belgium</option>
				<option value="36">Belize</option>
				<option value="26">Benin</option>
				<option value="27">Bermuda</option>
				<option value="32">Bhutan</option>
				<option value="29">Bolivia</option>
				<option value="18">Bosnia-Herzegovina</option>
				<option value="34">Botswana</option>
				<option value="33">Bouvet Island</option>
				<option value="30">Brazil</option>
				<option value="108">British Indian Ocean Territory</option>
				<option value="28">Brunei Darussalam</option>
				<option value="23">Bulgaria</option>
				<option value="22">Burkina Faso</option>
				<option value="25">Burundi</option>
				<option value="118">Cambodia, Kingdom of</option>
				<option value="46">Cameroon</option>
				<option value="37">Canada</option>
				<option value="53">Cape Verde</option>
				<option value="125">Cayman Islands</option>
				<option value="40">Central African Republic</option>
				<option value="216">Chad</option>
				<option value="45">Chile</option>
				<option value="47">China</option>
				<option value="54">Christmas Island</option>
				<option value="38">Cocos (Keeling) Islands</option>
				<option value="48">Colombia</option>
				<option value="49">Commercial</option>
				<option value="120">Comoros</option>
				<option value="41">Congo</option>
				<option value="39">Congo, The Democratic Republic of the</option>
				<option value="44">Cook Islands</option>
				<option value="50">Costa Rica</option>
				<option value="100">Croatia</option>
				<option value="52">Cuba</option>
				<option value="55">Cyprus</option>
				<option value="56">Czech Republic</option>
				<option value="59">Denmark</option>
				<option value="58">Djibouti</option>
				<option value="60">Dominica</option>
				<option value="61">Dominican Republic</option>
				<option value="225">East Timor</option>
				<option value="63">Ecuador</option>
				<option value="64">Educational</option>
				<option value="66">Egypt</option>
				<option value="212">El Salvador</option>
				<option value="90">Equatorial Guinea</option>
				<option value="68">Eritrea</option>
				<option value="65">Estonia</option>
				<option value="70">Ethiopia</option>
				<option value="73">Falkland Islands</option>
				<option value="75">Faroe Islands</option>
				<option value="72">Fiji</option>
				<option value="71">Finland</option>
				<option value="51">Former Czechoslovakia</option>
				<option value="211">Former USSR</option>
				<option value="76">France</option>
				<option value="77">France (European Territory)</option>
				<option value="82">French Guyana</option>
				<option value="217">French Southern Territories</option>
				<option value="78">Gabon</option>
				<option value="86">Gambia</option>
				<option value="81">Georgia</option>
				<option value="57">Germany</option>
				<option value="83">Ghana</option>
				<option value="84">Gibraltar</option>
				<option value="79">Great Britain</option>
				<option value="91">Greece</option>
				<option value="85">Greenland</option>
				<option value="80">Grenada</option>
				<option value="89">Guadeloupe (French)</option>
				<option value="94">Guam (USA)</option>
				<option value="93">Guatemala</option>
				<option value="87">Guinea</option>
				<option value="95">Guinea Bissau</option>
				<option value="96">Guyana</option>
				<option value="101">Haiti</option>
				<option value="98">Heard and McDonald Islands</option>
				<option value="238">Holy See (Vatican City State)</option>
				<option value="99">Honduras</option>
				<option value="97">Hong Kong</option>
				<option value="102">Hungary</option>
				<option value="111">Iceland</option>
				<option value="106">India</option>
				<option value="103">Indonesia</option>
				<option value="107">International</option>
				<option value="110">Iran</option>
				<option value="109">Iraq</option>
				<option value="104">Ireland</option>
				<option value="105">Israel</option>
				<option value="112">Italy</option>
				<option value="43">Ivory Coast (Cote D'Ivoire)</option>
				<option value="113">Jamaica</option>
				<option value="115">Japan</option>
				<option value="114">Jordan</option>
				<option value="126">Kazakhstan</option>
				<option value="116">Kenya</option>
				<option value="119">Kiribati</option>
				<option value="124">Kuwait</option>
				<option value="117">Kyrgyz Republic (Kyrgyzstan)</option>
				<option value="127">Laos</option>
				<option value="136">Latvia</option>
				<option value="128">Lebanon</option>
				<option value="133">Lesotho</option>
				<option value="132">Liberia</option>
				<option value="137">Libya</option>
				<option value="130">Liechtenstein</option>
				<option value="134">Lithuania</option>
				<option value="135">Luxembourg</option>
				<option value="148">Macau</option>
				<option value="144">Macedonia</option>
				<option value="141">Madagascar</option>
				<option value="156">Malawi</option>
				<option value="158">Malaysia</option>
				<option value="155">Maldives</option>
				<option value="145">Mali</option>
				<option value="153">Malta</option>
				<option value="142">Marshall Islands</option>
				<option value="150">Martinique (French)</option>
				<option value="151">Mauritania</option>
				<option value="154">Mauritius</option>
				<option value="248">Mayotte</option>
				<option value="157">Mexico</option>
				<option value="74">Micronesia</option>
				<option value="140">Moldavia</option>
				<option value="139">Monaco</option>
				<option value="147">Mongolia</option>
				<option value="152">Montserrat</option>
				<option value="138">Morocco</option>
				<option value="159">Mozambique</option>
				<option value="146">Myanmar</option>
				<option value="160">Namibia</option>
				<option value="161">NATO (this was purged in 1996 - see hq.nato.int)</option>
				<option value="171">Nauru</option>
				<option value="170">Nepal</option>
				<option value="168">Netherlands</option>
				<option value="8">Netherlands Antilles</option>
				<option value="164">Network</option>
				<option value="172">Neutral Zone</option>
				<option value="162">New Caledonia (French)</option>
				<option value="174">New Zealand</option>
				<option value="167">Nicaragua</option>
				<option value="163">Niger</option>
				<option selected="" value="166">Nigeria</option>
				<option value="173">Niue</option>
				<option value="176">Non-Profit Making Organisations (sic)</option>
				<option value="165">Norfolk Island</option>
				<option value="122">North Korea</option>
				<option value="149">Northern Mariana Islands</option>
				<option value="169">Norway</option>
				<option value="12">Old style Arpanet</option>
				<option value="175">Oman</option>
				<option value="182">Pakistan</option>
				<option value="188">Palau</option>
				<option value="177">Panama</option>
				<option value="180">Papua New Guinea</option>
				<option value="189">Paraguay</option>
				<option value="178">Peru</option>
				<option value="181">Philippines</option>
				<option value="185">Pitcairn Island</option>
				<option value="183">Poland</option>
				<option value="179">Polynesia (French)</option>
				<option value="187">Portugal</option>
				<option value="186">Puerto Rico</option>
				<option value="190">Qatar</option>
				<option value="191">Reunion (French)</option>
				<option value="192">Romania</option>
				<option value="193">Russian Federation</option>
				<option value="194">Rwanda</option>
				<option value="92">S. Georgia &amp; S. Sandwich Isls.</option>
				<option value="201">Saint Helena</option>
				<option value="121">Saint Kitts &amp; Nevis Anguilla</option>
				<option value="129">Saint Lucia</option>
				<option value="184">Saint Pierre and Miquelon</option>
				<option value="210">Saint Tome (Sao Tome) and Principe</option>
				<option value="239">Saint Vincent &amp; Grenadines</option>
				<option value="246">Samoa</option>
				<option value="206">San Marino</option>
				<option value="195">Saudi Arabia</option>
				<option value="207">Senegal</option>
				<option value="197">Seychelles</option>
				<option value="205">Sierra Leone</option>
				<option value="200">Singapore</option>
				<option value="204">Slovak Republic</option>
				<option value="202">Slovenia</option>
				<option value="196">Solomon Islands</option>
				<option value="208">Somalia</option>
				<option value="250">South Africa</option>
				<option value="123">South Korea</option>
				<option value="69">Spain</option>
				<option value="131">Sri Lanka</option>
				<option value="198">Sudan</option>
				<option value="209">Suriname</option>
				<option value="203">Svalbard and Jan Mayen Islands</option>
				<option value="214">Swaziland</option>
				<option value="199">Sweden</option>
				<option value="42">Switzerland</option>
				<option value="213">Syria</option>
				<option value="220">Tadjikistan</option>
				<option value="229">Taiwan</option>
				<option value="230">Tanzania</option>
				<option value="219">Thailand</option>
				<option value="218">Togo</option>
				<option value="221">Tokelau</option>
				<option value="224">Tonga</option>
				<option value="227">Trinidad and Tobago</option>
				<option value="223">Tunisia</option>
				<option value="226">Turkey</option>
				<option value="222">Turkmenistan</option>
				<option value="215">Turks and Caicos Islands</option>
				<option value="228">Tuvalu</option>
				<option value="232">Uganda</option>
				<option value="231">Ukraine</option>
				<option value="2">United Arab Emirates</option>
				<option value="233">United Kingdom</option>
				<option value="235">United States</option>
				<option value="236">Uruguay</option>
				<option value="88">USA Government</option>
				<option value="143">USA Military</option>
				<option value="234">USA Minor Outlying Islands</option>
				<option value="237">Uzbekistan</option>
				<option value="244">Vanuatu</option>
				<option value="240">Venezuela</option>
				<option value="243">Vietnam</option>
				<option value="241">Virgin Islands (British)</option>
				<option value="242">Virgin Islands (USA)</option>
				<option value="245">Wallis and Futuna Islands</option>
				<option value="67">Western Sahara</option>
				<option value="247">Yemen</option>
				<option value="249">Yugoslavia</option>
				<option value="252">Zaire</option>
				<option value="251">Zambia</option>
				<option value="253">Zimbabwe</option>
				<option value="-1">please select</option>

			</select></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    State:</td>
                                                <td style="padding:5px">
                                                    <select name="dnn$ctr644$MyInfo$ctl23$DDLState" id="m_dnn_ctr644_MyInfo_ctl23_DDLState" disabled="" class="m_aspNetDisabled m_btsInput">
				<option value="1">ABIA</option>
				<option value="2">ADAMAWA</option>
				<option value="3">ANAMBRA</option>
				<option value="4">AKWA IBOM</option>
				<option value="5">BAUCHI</option>
				<option value="6">BAYELSA</option>
				<option value="7">BENUE</option>
				<option value="8">BORNO</option>
				<option value="9">CROSS RIVER</option>
				<option value="10">DELTA</option>
				<option value="11">EBONYI</option>
				<option value="12">EDO</option>
				<option value="13">EKITI</option>
				<option value="14">ENUGU</option>
				<option value="15">GOMBE</option>
				<option value="16">IMO</option>
				<option value="17">JIGAWA</option>
				<option value="18">KADUNA</option>
				<option value="19">KANO</option>
				<option value="20">KATSINA</option>
				<option value="21">KEBBI</option>
				<option value="22">KOGI</option>
				<option selected="" value="23">KWARA</option>
				<option value="24">LAGOS</option>
				<option value="25">NASSARAWA</option>
				<option value="26">NIGER</option>
				<option value="27">OGUN</option>
				<option value="28">ONDO</option>
				<option value="29">OSUN</option>
				<option value="30">OYO</option>
				<option value="31">PLATEAU</option>
				<option value="32">RIVERS</option>
				<option value="33">SOKOTO</option>
				<option value="34">TARABA</option>
				<option value="35">YOBE</option>
				<option value="36">ZAMFARA</option>
				<option value="37">ABUJA</option>
				<option value="-1">please select</option>

			</select></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    LGA:</td>
                                                <td style="padding:5px">
                                                    <select name="dnn$ctr644$MyInfo$ctl23$DDLLga" id="m_dnn_ctr644_MyInfo_ctl23_DDLLga" disabled="" class="m_aspNetDisabled m_btsInput">
				<option value="1">ABA-NORTH</option>
				<option value="2">ABA-SOUTH</option>
				<option value="3">ABADAN</option>
				<option value="4">ABAK</option>
				<option value="5">ABAKALIKI</option>
				<option value="6">ABEOKUTA-NORTH</option>
				<option value="7">ABEOKUTA-SOUTH</option>
				<option value="8">ABI</option>
				<option value="9">ABOA/ODUAL</option>
				<option value="10">ABOH-MBAISE</option>
				<option value="11">ABOR MBAISE</option>
				<option value="12">ABUOCHICHIE</option>
				<option value="13">ADAGBABIRI</option>
				<option value="14">ADAVI</option>
				<option value="15">ADO-EKITI</option>
				<option value="16">ADO-ODO/OTA</option>
				<option value="17">ADO</option>
				<option value="19">AFIJIO</option>
				<option value="20">AFIKPO-NORTH</option>
				<option value="21">AFIKPO-SOUTH</option>
				<option value="22">AFOKPELLA</option>
				<option value="23">AFUZE</option>
				<option value="24">AGAIE</option>
				<option value="25">AGATU</option>
				<option value="26">AGBAZILO</option>
				<option value="27">AGEGE</option>
				<option value="28">AGUATA</option>
				<option value="29">AGWARA</option>
				<option value="30">AHIAZU-MBAISE</option>
				<option value="31">AHOADA-EAST</option>
				<option value="32">AHOADA-WEST</option>
				<option value="33">AIYEKIRE</option>
				<option value="34">AJAOKUTA</option>
				<option value="35">AJEROMI-IFELODUN</option>
				<option value="36">AJINGI</option>
				<option value="37">AKAMKPA</option>
				<option value="38">AKINYELE</option>
				<option value="39">AKKO</option>
				<option value="40">AKOKO EDO</option>
				<option value="42">AKOKO-NORTH-WEST</option>
				<option value="43">AKOKO-NORTH</option>
				<option value="44">AKOKO-SOUTH-EAST</option>
				<option value="45">AKOKO-SOUTH</option>
				<option value="46">AKOKO</option>
				<option value="47">AKPABUYO</option>
				<option value="48">AKUKUTORU</option>
				<option value="49">AKURE-NORTH</option>
				<option value="50">AKURE-SOUTH</option>
				<option value="51">AKURE</option>
				<option value="52">AKWA NORTH</option>
				<option value="53">AKWANGA</option>
				<option value="54">ALBASU</option>
				<option value="55">ALEIRO</option>
				<option value="56">ALIMOSHO</option>
				<option value="57">ALKALERI</option>
				<option value="58">AMAC</option>
				<option value="59">AMUWO-ODOFIN</option>
				<option value="60">ANAMBRA-WEST</option>
				<option value="61">ANAMBRA</option>
				<option value="62">ANAOCHA</option>
				<option value="63">ANDONI</option>
				<option value="64">ANINRI</option>
				<option value="65">ANIOCHA NORTH</option>
				<option value="67">ANIOCHA-SOUTH</option>
				<option value="68">ANKA</option>
				<option value="69">ANKPA</option>
				<option value="70">APA</option>
				<option value="71">APAPA</option>
				<option value="72">ARDO-KOLA</option>
				<option value="73">AREWA-DANDI</option>
				<option value="74">ARGUNGU</option>
				<option value="75">AROCHUKWU</option>
				<option value="76">ASA</option>
				<option value="77">ASARI-TORU</option>
				<option value="78">ASKIRA-UBA</option>
				<option value="79">ATAKUMOSA EAST</option>
				<option value="80">ATAKUMOSA</option>
				<option value="81">ATIBA</option>
				<option value="82">ATIGBO</option>
				<option value="83">AUGIE</option>
				<option value="84">AUYO</option>
				<option value="85">AWE</option>
				<option value="86">AWGU</option>
				<option value="87">AWKA-NORTH</option>
				<option value="88">AWKA-SOUTH</option>
				<option value="89">AYAMELUM</option>
				<option value="90">AYEDA-ADE</option>
				<option value="91">AYEDIRE</option>
				<option value="92">BABURA</option>
				<option value="93">BADAGRY</option>
				<option value="94">BADE</option>
				<option value="95">BAGUDO</option>
				<option value="96">BAGWAI</option>
				<option value="97">BAKASSI</option>
				<option value="98">BAKORI</option>
				<option value="99">BAKURA</option>
				<option value="100">BALANGA</option>
				<option value="101">BALI</option>
				<option value="102">BAMA</option>
				<option value="103">BARKIN-LADI</option>
				<option value="104">BARUTEN</option>
				<option value="105">BASSA</option>
				<option value="106">BATAGARAWA</option>
				<option value="107">BATSARI</option>
				<option value="108">BAUCHI</option>
				<option value="109">BAURE</option>
				<option value="110">BAYO</option>
				<option value="111">BEBEJI</option>
				<option value="112">BEKWARA</option>
				<option value="113">BENDE</option>
				<option value="114">BIASI</option>
				<option value="115">BICHI</option>
				<option value="116">BIDA</option>
				<option value="117">BILLIRI</option>
				<option value="118">BINDAWA</option>
				<option value="119">BINJI</option>
				<option value="120">BIRINIWA</option>
				<option value="121">BIRNIN-GWARI</option>
				<option value="122">BIRNIN-KEBBI</option>
				<option value="123">BIRNIN-KUDU</option>
				<option value="124">BIU</option>
				<option value="125">BODINGA</option>
				<option value="126">BOGORO</option>
				<option value="127">BOKI</option>
				<option value="128">BOKKOS</option>
				<option value="129">BOLUWADURO</option>
				<option value="130">BOMADI</option>
				<option value="131">BOMADIM</option>
				<option value="132">BONNY</option>
				<option value="133">BORGU</option>
				<option value="134">BORIPE</option>
				<option value="135">BORSALI</option>
				<option value="136">BOSSO</option>
				<option value="137">BOSUWA</option>
				<option value="138">BRASS</option>
				<option value="139">BUGUMA</option>
				<option value="140">BUJI</option>
				<option value="141">BUKKUYUM</option>
				<option value="142">BUMZA</option>
				<option value="143">BUNGUDU</option>
				<option value="144">BUNKURE</option>
				<option value="145">BURUKU</option>
				<option value="146">BURUTU</option>
				<option value="147">CALABAR-MUNICIPAL</option>
				<option value="148">CALABAR-SOUTH</option>
				<option value="149">CHANCHAGA</option>
				<option value="150">CHARANCHI</option>
				<option value="151">CHIBOK</option>
				<option value="152">CHIKUN</option>
				<option value="153">DALA</option>
				<option value="154">DAMATURU</option>
				<option value="155">DAMBAN</option>
				<option value="156">DAMBATTA</option>
				<option value="157">DAMBOA</option>
				<option value="158">DAN-MUSA</option>
				<option value="159">DANDI</option>
				<option value="160">DANDUME</option>
				<option value="161">DANGE-SHUNI</option>
				<option value="162">DANJI</option>
				<option value="163">DANKO</option>
				<option value="164">DARAZO</option>
				<option value="165">DASS</option>
				<option value="166">DAURA</option>
				<option value="167">DAWAKIN-KUDU</option>
				<option value="168">DAWAKIN-TOFA</option>
				<option value="169">DEGEMA</option>
				<option value="170">DEKINA</option>
				<option value="171">DEMSA</option>
				<option value="172">DIKWA</option>
				<option value="173">DOGUWA</option>
				<option value="174">DOMA</option>
				<option value="175">DONGA</option>
				<option value="176">DRAL-ESAT</option>
				<option value="177">DUKKU</option>
				<option value="178">DUNUKOFIA</option>
				<option value="179">DUTSE</option>
				<option value="180">DUTSI</option>
				<option value="181">DUTSINMA</option>
				<option value="182">EASTERN-OBOLO</option>
				<option value="183">EBONYI</option>
				<option value="184">EDATI</option>
				<option value="185">EDE NORTH</option>
				<option value="186">EDE</option>
				<option value="187">EDU</option>
				<option value="188">EFFURUN</option>
				<option value="189">EFON</option>
				<option value="190">EGBEDA</option>
				<option value="191">EGBEDORE</option>
				<option value="192">EGOR</option>
				<option value="193">EHIME-MBANO</option>
				<option value="194">EJIGBO</option>
				<option value="195">EKEREMOR</option>
				<option value="196">EKET</option>
				<option value="197">EKITI-EAST</option>
				<option value="198">EKITI-SOUTH-WEST</option>
				<option value="199">EKITI-WEST</option>
				<option value="200">EKITI</option>
				<option value="201">EKPE-ATANI</option>
				<option value="202">EKWUSIGO</option>
				<option value="203">ELEME</option>
				<option value="204">ELFANE</option>
				<option value="205">EMUOHA</option>
				<option value="206">EMURE/ISE/ORUN</option>
				<option value="207">ENUGU-EAST</option>
				<option value="208">ENUGU-NORTH</option>
				<option value="209">ENUGU-SOUTH</option>
				<option value="210">EPE</option>
				<option value="211">ESAN-CENTRAL</option>
				<option value="212">ESAN-NORTH-EAST </option>
				<option value="213">ESAN-NORTH-EAST</option>
				<option value="214">ESAN-SOUTH-EAST</option>
				<option value="215">ESAN-WEST</option>
				<option value="216">ESE-ODO</option>
				<option value="217">ESIT EKIT</option>
				<option value="218">ESSIEN-UDIM</option>
				<option value="219">ETCHE</option>
				<option value="220">ETHIOPE-EAST</option>
				<option value="221">ETHIOPE-WEST</option>
				<option value="222">ETI-OSA</option>
				<option value="223">ETIM-EKPO</option>
				<option value="224">ETINAM</option>
				<option value="225">ETSAKO-CENTRAL</option>
				<option value="226">ETSAKO-EAST</option>
				<option value="227">ETSAKO-WEST</option>
				<option value="228">ETUNK</option>
				<option value="229">EWEKORO</option>
				<option value="230">EZEAGU</option>
				<option value="231">EZEOBODO</option>
				<option value="232">EZINIHITTE</option>
				<option value="233">EZZA-NORTH</option>
				<option value="234">EZZA-SOUTH</option>
				<option value="235">FAGGE</option>
				<option value="236">FAKAI</option>
				<option value="237">FASKARI</option>
				<option value="238">FIKA</option>
				<option value="239">FUFORE</option>
				<option value="240">FUNAKAYE</option>
				<option value="241">FUNE</option>
				<option value="242">FUNTUA</option>
				<option value="243">GABASAWA</option>
				<option value="244">GADA</option>
				<option value="245">GAGARAWA</option>
				<option value="246">GAMAWA</option>
				<option value="247">GANJUWA</option>
				<option value="248">GANYE</option>
				<option value="249">GARKI</option>
				<option value="250">GARKO</option>
				<option value="251">GARUN-MALLAM</option>
				<option value="252">GASHAKA</option>
				<option value="253">GASSOL</option>
				<option value="254">GAYA</option>
				<option value="255">GBAKO</option>
				<option value="256">GBOKO</option>
				<option value="257">GBONYIN</option>
				<option value="258">GEIDAM</option>
				<option value="259">GEZAWA</option>
				<option value="260">GIADE</option>
				<option value="261">GIREI</option>
				<option value="262">GIWA</option>
				<option value="263">GOGARAM</option>
				<option value="264">GOKANA</option>
				<option value="265">GOMBE</option>
				<option value="266">GOMBI</option>
				<option value="267">GORONYO</option>
				<option value="268">GUBIO</option>
				<option value="269">GUDU</option>
				<option value="270">GUJBA</option>
				<option value="271">GULANI</option>
				<option value="272">GUMA</option>
				<option value="273">GUMEL</option>
				<option value="274">GUMI</option>
				<option value="275">GURARA</option>
				<option value="276">GURI</option>
				<option value="277">GUSAU</option>
				<option value="278">GUYUK</option>
				<option value="279">GUZAMALA</option>
				<option value="280">GWADABAWA</option>
				<option value="281">GWAGWADA</option>
				<option value="282">GWALE</option>
				<option value="283">GWANDU</option>
				<option value="284">GWARAM</option>
				<option value="285">GWARZO</option>
				<option value="286">GWER-EAST</option>
				<option value="287">GWER-WEST</option>
				<option value="288">GWIWA</option>
				<option value="289">GWOZA</option>
				<option value="290">HADEJIA</option>
				<option value="291">HAWUL</option>
				<option value="292">HONG</option>
				<option value="293">IBADAN-CENTRAL</option>
				<option value="294">IBADAN-NORTH-EAST</option>
				<option value="295">IBADAN-NORTH-WEST</option>
				<option value="296">IBADAN-SOUTH-EAST</option>
				<option value="297">IBADAN-SOUTH-WEST</option>
				<option value="298">IBAJI</option>
				<option value="299">IBARAPA-CENTRAL</option>
				<option value="300">IBARAPA-EAST</option>
				<option value="301">IBARAPA-NORTH</option>
				<option value="302">IBEJU-LEKKI</option>
				<option value="303">IBENO</option>
				<option value="304">IBESIKPO-ASUTAN</option>
				<option value="305">IBI</option>
				<option value="306">IBIONO-IBOM</option>
				<option value="307">IDAH</option>
				<option value="308">IDANRE</option>
				<option value="309">IDARAPO</option>
				<option value="310">IDEATO-NORTH</option>
				<option value="311">IDEATO-SOUTH</option>
				<option value="312">IDEATO</option>
				<option value="313">IDEMILI-NORTH</option>
				<option value="314">IDEMILI-SOUTH</option>
				<option value="315">IDEMILI</option>
				<option value="316">IDO-OSI</option>
				<option value="317">IDO</option>
				<option value="318">IDU</option>
				<option value="319">IFAKO-IJAIYE</option>
				<option value="320">IFE NORTH</option>
				<option value="321">IFE SOUTH</option>
				<option value="322">IFE-CENTRAL</option>
				<option value="323">IFE-EAST</option>
				<option value="324">IFE</option>
				<option value="325">IFEDAYO</option>
				<option value="326">IFEDORE</option>
				<option value="327">IFELODUN</option>
				<option value="328">IFELOJU</option>
				<option value="329">IFFO-OTTA</option>
				<option value="330">IFO</option>
				<option value="331">IGABI</option>
				<option value="332">IGALAMELA</option>
				<option value="333">IGBADO-NORTH</option>
				<option value="334">IGBADO-SOUTH</option>
				<option value="335">IGBISIN</option>
				<option value="336">IGBO-ETITI</option>
				<option value="337">IGBO-EZE-NORTH</option>
				<option value="338">IGBO-EZE-SOUTH</option>
				<option value="339">IGUEBEN</option>
				<option value="340">IGUOBANO NORTH EAST</option>
				<option value="341">IHIALA</option>
				<option value="342">IHITTE/UBOMA</option>
				<option value="343">IJEBU-EAST</option>
				<option value="344">IJEBU-NORTH-EAST</option>
				<option value="345">IJEBU-NORTH</option>
				<option value="346">IJEBU-ODE</option>
				<option value="347">IJERO</option>
				<option value="348">IJUMU</option>
				<option value="349">IKA-NE</option>
				<option value="350">IKA-NORTH-EAST</option>
				<option value="351">IKA-SOUTH</option>
				<option value="352">IKA</option>
				<option value="353">IKALE</option>
				<option value="354">IKARA</option>
				<option value="355">IKARE</option>
				<option value="356">IKAWUNO</option>
				<option value="357">IKEDURU</option>
				<option value="358">IKEJA</option>
				<option value="359">IKENNE</option>
				<option value="360">IKERE</option>
				<option value="361">IKOLE</option>
				<option value="362">IKOM</option>
				<option value="363">IKONO</option>
				<option value="364">IKORODU</option>
				<option value="365">IKOT-ABASI</option>
				<option value="366">IKOT-EKPENE</option>
				<option value="367">IKOYI-IJUMU</option>
				<option value="368">IKPEMILI</option>
				<option value="369">IKPOBA-OKHA</option>
				<option value="370">IKWERRE</option>
				<option value="371">IKWO</option>
				<option value="372">IKWUANO</option>
				<option value="373">ILA</option>
				<option value="374">ILAJE-WEST</option>
				<option value="375">ILAJE</option>
				<option value="376">ILE-OLUJI-OKEIGBO</option>
				<option value="377">ILEJEMEJE</option>
				<option value="378">ILESA-EAST</option>
				<option value="379">ILESA-WEST</option>
				<option value="380">ILESHA WEST</option>
				<option value="381">ILESHA</option>
				<option value="382">ILISHAN REMO</option>
				<option value="383">ILLELA</option>
				<option value="384">ILORIN-EAST</option>
				<option value="385">ILORIN-SOUTH</option>
				<option value="386">ILORIN-WEST</option>
				<option value="387">ILUGUN-ALARO</option>
				<option value="388">IMEKO-AFON</option>
				<option value="389">IMO</option>
				<option value="390">INGAWA</option>
				<option value="391">INI</option>
				<option value="392">IPOKIA</option>
				<option value="393">IRELE</option>
				<option value="394">IREPO</option>
				<option value="395">IREPODUN/IFELODUN</option>
				<option value="396">IREPODUN</option>
				<option value="397">IREWOLE</option>
				<option value="398">ISA</option>
				<option value="399">ISE-ORUN</option>
				<option value="400">ISEYIN</option>
				<option value="401">ISHIELU</option>
				<option value="402">ISI-UZO</option>
				<option value="403">ISIALA-MBANO</option>
				<option value="404">ISIALA-NGWA NORTH</option>
				<option value="405">ISIALA-NGWA SOUTH</option>
				<option value="406">ISIKWUATO</option>
				<option value="407">ISIN</option>
				<option value="408">ISLAND</option>
				<option value="409">ISOKAN</option>
				<option value="410">ISOKO-NORTH</option>
				<option value="411">ISOKO-SOUTH</option>
				<option value="412">ISU</option>
				<option value="413">ISUIKWUATO</option>
				<option value="414">ITAS/GADAU</option>
				<option value="415">ITSEIWAJU</option>
				<option value="416">ITU</option>
				<option value="417">IVO</option>
				<option value="418">IWAJOWA</option>
				<option value="419">IWO</option>
				<option value="420">IZZI</option>
				<option value="421">JABA</option>
				<option value="422">JADA</option>
				<option value="423">JAHUN</option>
				<option value="424">JAKUSKO</option>
				<option value="425">JALINGO</option>
				<option value="426">JAMA'ARE</option>
				<option value="427">JEGA</option>
				<option value="428">JEMA'A</option>
				<option value="429">JERE</option>
				<option value="430">JIBIA</option>
				<option value="431">JIMETA</option>
				<option value="432">JOS-EAST</option>
				<option value="433">JOS-NORTH</option>
				<option value="434">JOS-SOUTH</option>
				<option value="435">KABBA/BUNU</option>
				<option value="436">KACHIA</option>
				<option value="437">KADUNA-NORTH</option>
				<option value="438">KAFIN-HAUSA</option>
				<option value="439">KAFUR</option>
				<option value="440">KAGA</option>
				<option value="441">KAGARKO</option>
				<option value="442">KAIAMA</option>
				<option value="443">KAITA</option>
				<option value="444">KAJOLA</option>
				<option value="445">KAJURU</option>
				<option value="446">KALA/BALGE</option>
				<option value="447">KALGO</option>
				<option value="448">KALTUNGO</option>
				<option value="449">KANAM</option>
				<option value="450">KANKARA</option>
				<option value="451">KANKE</option>
				<option value="452">KANKIA</option>
				<option value="453">KANO-MUNICIPAL</option>
				<option value="454">KARASUWA</option>
				<option value="455">KARAYE</option>
				<option value="456">KARIM-LAMIDO</option>
				<option value="457">KARU</option>
				<option value="458">KATAGUM</option>
				<option value="459">KATCHA</option>
				<option value="460">KATSINA-ALA</option>
				<option value="461">KATSINA</option>
				<option value="462">KAUGAMA</option>
				<option value="463">KAURA-NAMODA</option>
				<option value="464">KAURA</option>
				<option value="465">KAURU</option>
				<option value="466">KAZAURE</option>
				<option value="467">KEANA</option>
				<option value="468">KEBBE</option>
				<option value="469">KEFFI</option>
				<option value="470">KEMBE</option>
				<option value="471">KHANA</option>
				<option value="472">KIBIYA</option>
				<option value="473">KIRFI</option>
				<option value="474">KIRKASAMMA</option>
				<option value="475">KIRU</option>
				<option value="476">KIYAWA</option>
				<option value="477">KOGI</option>
				<option value="478">KOKA/KAWO</option>
				<option value="479">KOKO-BESSE</option>
				<option value="480">KOKONA</option>
				<option value="481">KOLOKUMA/OPKUMA</option>
				<option value="482">KOLOKUMA</option>
				<option value="483">KONDUGA</option>
				<option value="484">KONSHISHA</option>
				<option value="485">KONTAGORA</option>
				<option value="486">KOSOFE</option>
				<option value="487">KUBAH</option>
				<option value="488">KUDAN</option>
				<option value="489">KUKAWA</option>
				<option value="490">KUMBOTSO</option>
				<option value="491">KUNCHI</option>
				<option value="492">KURA</option>
				<option value="493">KURFI</option>
				<option value="494">KURMI</option>
				<option value="495">KUSADA</option>
				<option value="496">KWAMI</option>
				<option value="497">KWANDE</option>
				<option value="498">KWARE</option>
				<option value="499">KWAYA-KUSAR</option>
				<option value="500">LAFIA</option>
				<option value="501">LAGELU</option>
				<option value="502">LAGOS-ISLAND</option>
				<option value="503">LAGOS-MAINLAND</option>
				<option value="504">LAMURDE</option>
				<option value="505">LANGTANG-NORTH</option>
				<option value="506">LANGTANG-SOUTH</option>
				<option value="507">LAPAI</option>
				<option value="508">LAU</option>
				<option value="509">LAVUN</option>
				<option value="510">LERE</option>
				<option value="511">LGAYEKPE </option>
				<option value="512">LOGO</option>
				<option value="513">LOKOJA</option>
				<option value="514">MACHINA</option>
				<option value="515">MADAGALI</option>
				<option value="516">MADOBI</option>
				<option value="517">MAFA</option>
				<option value="518">MAGAMA</option>
				<option value="519">MAGUMERI</option>
				<option value="520">MAI-ADUA</option>
				<option value="521">MAIDUGURI</option>
				<option value="522">MAIGATARI</option>
				<option value="523">MAIHA</option>
				<option value="524">MAIYAMA</option>
				<option value="525">MAKARFI</option>
				<option value="526">MAKODA</option>
				<option value="527">MAKURDI</option>
				<option value="528">MALAM-MADURI</option>
				<option value="529">MALUMFASHI</option>
				<option value="530">MANGU</option>
				<option value="531">MANI</option>
				<option value="532">MARADUN</option>
				<option value="533">MARIGA</option>
				<option value="534">MARTE</option>
				<option value="535">MARU</option>
				<option value="536">MASHEGU</option>
				<option value="537">MASHI</option>
				<option value="538">MATAZU</option>
				<option value="539">MAYO-BELWA</option>
				<option value="540">MBAITOLI</option>
				<option value="541">MBANO</option>
				<option value="542">MBO</option>
				<option value="543">MICHIKA</option>
				<option value="544">MIGA</option>
				<option value="545">MIKANG</option>
				<option value="546">MINJIBIR</option>
				<option value="547">MISAU</option>
				<option value="548">MKPAT-ENIN</option>
				<option value="549">MOBA</option>
				<option value="550">MOBBAR</option>
				<option value="551">MOKWA</option>
				<option value="552">MONGUNU</option>
				<option value="553">MOPA-MURO-MOPI</option>
				<option value="554">MORO</option>
				<option value="555">MUBI-NORTH</option>
				<option value="556">MUBI-SOUTH</option>
				<option value="557">MUSAWA</option>
				<option value="558">MUSHIN</option>
				<option value="559">MUYA</option>
				<option value="560">NAFADA/BAJOGA</option>
				<option value="561">NANGERE</option>
				<option value="562">NASARAWA</option>
				<option value="563">NASSAWARA EGGON</option>
				<option value="564">NASSAWARA</option>
				<option value="565">NDOKWA-EAST</option>
				<option value="566">NDOKWA-NORTH</option>
				<option value="567">NDOKWA-SOUTH</option>
				<option value="568">NDOKWA-WEST</option>
				<option value="569">NEMBE</option>
				<option value="570">NGALA</option>
				<option value="571">NGANZAI</option>
				<option value="572">NGASKI</option>
				<option value="573">NGOR-OKPALA</option>
				<option value="574">NGURU</option>
				<option value="575">NIBO</option>
				<option value="576">NINGI</option>
				<option value="577">NJABA</option>
				<option value="578">NJIKOKA</option>
				<option value="579">NKANU-EAST</option>
				<option value="580">NKANU-WEST</option>
				<option value="581">NKWERRE</option>
				<option value="582">NNEOCHI</option>
				<option value="583">NNEWI-NORTH</option>
				<option value="584">NNEWI-SOUTH</option>
				<option value="585">NNEWI</option>
				<option value="586">NSIT-IBOM</option>
				<option value="587">NSIT-UBIUM</option>
				<option value="588">NSUKKA</option>
				<option value="589">NUKANU EAST</option>
				<option value="590">NUMAN</option>
				<option value="591">NWANGELE</option>
				<option value="592">OBAFEMI-OWODE</option>
				<option value="593">OBAJI</option>
				<option value="594">OBANLIKU</option>
				<option value="595">OBAUKWU</option>
				<option value="596">OBI-NGWA </option>
				<option value="598">OBI</option>
				<option value="599">OBIA/AKPOR</option>
				<option value="601">OBIOMA-NGWA</option>
				<option value="602">OBOKUN</option>
				<option value="603">OBOT-AKARA</option>
				<option value="604">OBOWO</option>
				<option value="605">OBUBRA</option>
				<option value="606">OBUDU</option>
				<option value="607">ODEDAH</option>
				<option value="608">ODIGBO</option>
				<option value="609">ODO-OLUWA</option>
				<option value="610">ODO-OTIN</option>
				<option value="611">ODOGBOLU</option>
				<option value="612">ODUKPANI</option>
				<option value="613">OFFA</option>
				<option value="614">OFU</option>
				<option value="615">OGBA-EGBEMA-NDONI</option>
				<option value="617">OGBADIBO</option>
				<option value="618">OGBARU</option>
				<option value="619">OGBIA</option>
				<option value="620">OGBOMOSHO-NORTH</option>
				<option value="621">OGBOMOSHO-SOUTH</option>
				<option value="622">OGOJA</option>
				<option value="623">OGORI/MAGONGO</option>
				<option value="624">OGU/BOLO</option>
				<option value="625">OGUN-WATERSIDE</option>
				<option value="626">OGUTA</option>
				<option value="627">OHAFIA</option>
				<option value="628">OHAJI-EGBEMA</option>
				<option value="629">OHAKWU</option>
				<option value="630">OHAOZARA</option>
				<option value="631">OHIMINI</option>
				<option value="632">OHUNMWODE</option>
				<option value="633">OILINGO</option>
				<option value="634">OJI-RIVER</option>
				<option value="635">OJO</option>
				<option value="636">OJU</option>
				<option value="637">OKA AK0KO</option>
				<option value="638">OKE-ERO</option>
				<option value="639">OKEHI</option>
				<option value="640">OKENE</option>
				<option value="641">OKIGWE</option>
				<option value="642">OKIRIKA</option>
				<option value="643">OKITI PUPA IJUODO</option>
				<option value="644">OKITI-PUPA</option>
				<option value="645">OKOBO</option>
				<option value="646">OKPE</option>
				<option value="647">OKPOKWU</option>
				<option value="648">OKWUANI</option>
				<option value="649">OLA OLUWA</option>
				<option value="650">OLAMABORO</option>
				<option value="651">OLEH</option>
				<option value="652">OLOGBO</option>
				<option value="653">OLORUNDA</option>
				<option value="654">OLORUNSOGO</option>
				<option value="655">OLUMBA</option>
				<option value="656">OLUYOLE</option>
				<option value="657">OMALA</option>
				<option value="658">OMUMA</option>
				<option value="659">ONA-ARA</option>
				<option value="660">ONDO WEST</option>
				<option value="661">ONDO-EAST</option>
				<option value="662">ONDO</option>
				<option value="663">ONICHA</option>
				<option value="664">ONITSHA-NORTH</option>
				<option value="665">ONITSHA-SOUTH</option>
				<option value="666">ONNA</option>
				<option value="667">ONUIMO</option>
				<option value="668">OPOBO/NKORO</option>
				<option value="669">OPOJI IRRUA </option>
				<option value="670">OPOJI IRRUA</option>
				<option value="671">OREDO</option>
				<option value="672">ORELOPE</option>
				<option value="673">ORHIONMWON</option>
				<option value="674">ORI-ADE</option>
				<option value="675">ORI-IRE</option>
				<option value="676">ORLU</option>
				<option value="677">ORO-WEST</option>
				<option value="678">OROLU</option>
				<option value="679">ORON</option>
				<option value="680">ORSU</option>
				<option value="681">ORU-EAST</option>
				<option value="682">ORU-WEST</option>
				<option value="683">ORU</option>
				<option value="684">ORUK ANAM</option>
				<option value="685">ORUMBA-NORTH</option>
				<option value="686">ORUMBA-SOUTH</option>
				<option value="687">OSE</option>
				<option value="688">OSHIELLI-NORTH</option>
				<option value="689">OSHIMILI-NORTH</option>
				<option value="690">OSHIMILI-SOUTH</option>
				<option value="691">OSHIMILI</option>
				<option value="692">OSHODI-ISOLO</option>
				<option value="693">OSIMILI-NORTH</option>
				<option value="694">OSIMILI-SOUTH</option>
				<option value="695">OSIMILI</option>
				<option value="696">OSISIOMA</option>
				<option value="697">OSOGBO</option>
				<option value="698">OTI</option>
				<option value="699">OTU-OCHA</option>
				<option value="700">OTUKPO</option>
				<option value="701">OTURKPA</option>
				<option value="702">OVIA-NORTH-EAST</option>
				<option value="703">OVIA-SOUTH-WEST</option>
				<option value="704">OWAN EAST</option>
				<option value="706">OWAN-WEST</option>
				<option value="707">OWERRI-MUNICIPAL</option>
				<option value="708">OWERRI-NORTH</option>
				<option value="709">OWERRI-WEST</option>
				<option value="710">OWO</option>
				<option value="711">OYE</option>
				<option value="712">OYI</option>
				<option value="713">OYIGBO</option>
				<option value="714">OYO-WEST</option>
				<option selected="" value="715">OYUN</option>
				<option value="716">PAIKORO</option>
				<option value="717">PANKSHIN</option>
				<option value="718">PATANI</option>
				<option value="719">PATEGI</option>
				<option value="720">PORT-HARCOURT</option>
				<option value="721">POTISKUM</option>
				<option value="722">QUAN'ANPAN</option>
				<option value="723">RABA</option>
				<option value="724">RAFI</option>
				<option value="725">RANO</option>
				<option value="726">REMO-NORTH</option>
				<option value="727">RIJAU</option>
				<option value="728">RIMI</option>
				<option value="729">RIMIN-GADO</option>
				<option value="730">RINGIM</option>
				<option value="731">RIYOM</option>
				<option value="732">ROGO</option>
				<option value="733">RONI</option>
				<option value="734">SABO-BIRNI</option>
				<option value="735">SABON-GARI</option>
				<option value="736">SABUWA</option>
				<option value="737">SAFANA</option>
				<option value="738">SAGAMU</option>
				<option value="739">SAGBAMA</option>
				<option value="740">SAKABA</option>
				<option value="741">SAKI-EAST</option>
				<option value="742">SAKI-WEST</option>
				<option value="743">SANDAMU</option>
				<option value="744">SANGA</option>
				<option value="745">SAPELE</option>
				<option value="746">SARDAUNA</option>
				<option value="747">SHAGAMU</option>
				<option value="748">SHAGARI</option>
				<option value="749">SHANGA</option>
				<option value="750">SHANI</option>
				<option value="751">SHANONO</option>
				<option value="752">SHELLENG</option>
				<option value="753">SHENDAM</option>
				<option value="754">SHINKAFI</option>
				<option value="755">SHIRA</option>
				<option value="756">SHIRORO</option>
				<option value="757">SHOMGOM</option>
				<option value="758">SHOMOLU</option>
				<option value="759">SILAME</option>
				<option value="760">SOBA</option>
				<option value="761">SOKOTO-NORTH</option>
				<option value="762">SOKOTO-SOUTH</option>
				<option value="763">SOMOLU</option>
				<option value="764">SONG</option>
				<option value="765">SOUTHERN-IJAW</option>
				<option value="766">SULE-TANKARKAR</option>
				<option value="767">SULEJA</option>
				<option value="768">SUMAILA</option>
				<option value="769">SURU-LERE</option>
				<option value="770">SURU</option>
				<option value="771">SURULERE</option>
				<option value="772">TAFA</option>
				<option value="773">TAFAWA-BALEWA</option>
				<option value="774">TAI</option>
				<option value="775">TAKAI</option>
				<option value="776">TAKUM</option>
				<option value="777">TALATA-MAFARA</option>
				<option value="778">TAMBUWAL</option>
				<option value="779">TANGAZA</option>
				<option value="780">TARAUNI</option>
				<option value="781">TARKA</option>
				<option value="782">TARMUA</option>
				<option value="783">TAURA</option>
				<option value="784">TOFA</option>
				<option value="785">TORO</option>
				<option value="786">TORU-ABUBO</option>
				<option value="787">TOUNGO</option>
				<option value="788">TSAFE</option>
				<option value="789">TSANYAWA</option>
				<option value="790">TUDUN-WADA/MAKERA</option>
				<option value="791">TUDUN-WADA</option>
				<option value="792">TURETA</option>
				<option value="793">UBULUIZOR IHIALA</option>
				<option value="794">UDENU</option>
				<option value="795">UDI</option>
				<option value="796">UDOKWA</option>
				<option value="797">UDU</option>
				<option value="798">UDUNG-UKO</option>
				<option value="799">UGEP-NORTH</option>
				<option value="800">UGHELLI-NORTH</option>
				<option value="801">UGHELLI-SOUTH</option>
				<option value="802">UGIRI-IKE IKEDURU</option>
				<option value="803">UGIRI-IKEDIKEDURU</option>
				<option value="804">UGWUNAGBO</option>
				<option value="805">UHUNMWONDE</option>
				<option value="806">UKABA</option>
				<option value="807">UKANEFUN</option>
				<option value="808">UKUM</option>
				<option value="809">UKWA-WEST</option>
				<option value="810">UKWU-EAST</option>
				<option value="811">UKWUANI</option>
				<option value="813">UMUAHIA-SOUTH</option>
				<option value="814">UMUAHIA-NORTH</option>
				<option value="815">UMUAHIA</option>
				<option value="816">UMUNNEOCHI</option>
				<option value="817">UNBANO</option>
				<option value="818">UNGOGO</option>
				<option value="819">UQUO IBENO</option>
				<option value="820">URAUN</option>
				<option value="821">URU OFFONG ORUKO</option>
				<option value="822">URUAN</option>
				<option value="823">URUK-ANAM</option>
				<option value="824">URWIE</option>
				<option value="825">USHONGO</option>
				<option value="826">USSA</option>
				<option value="827">UVIE</option>
				<option value="828">UVWEI</option>
				<option value="829">UVWIE</option>
				<option value="830">UWVIE</option>
				<option value="831">UYI</option>
				<option value="832">UYO</option>
				<option value="833">UZO-UWANI</option>
				<option value="834">VANDEIKYA</option>
				<option value="835">WAMAKKO</option>
				<option value="836">WAMBU</option>
				<option value="837">WARAWA</option>
				<option value="838">WARJI</option>
				<option value="839">WARRI-CENTRAL</option>
				<option value="840">WARRI-NORTH</option>
				<option value="841">WARRI-SOUTH</option>
				<option value="842">WASAGU</option>
				<option value="843">WASE</option>
				<option value="844">WUDIL</option>
				<option value="845">WUKARI</option>
				<option value="846">WURNO</option>
				<option value="847">WUSHISHI</option>
				<option value="848">YABO</option>
				<option value="849">YAGBA-EAST</option>
				<option value="850">YAGBA-WEST</option>
				<option value="851">YAKURR</option>
				<option value="852">YALA</option>
				<option value="853">YAMALTU/DEBA</option>
				<option value="854">YANKWASHI</option>
				<option value="855">YAURI</option>
				<option value="856">YENEGOA</option>
				<option value="857">YEWA-SOUTH</option>
				<option value="858">YEWA</option>
				<option value="859">YOLA</option>
				<option value="860">YORRO</option>
				<option value="861">YUNUSARI</option>
				<option value="862">YUSUFARI</option>
				<option value="863">ZAKI</option>
				<option value="864">ZANGO-KATAF</option>
				<option value="865">ZANGO</option>
				<option value="866">ZARIA</option>
				<option value="867">ZING</option>
				<option value="868">ZINIHITTE</option>
				<option value="869">ZURMI</option>
				<option value="870">ZURU</option>
				<option value="871">IFELODUN</option>
				<option value="872">IREPODUN</option>
				<option value="873">IPETUMODU</option>
				<option value="874">OYO-EAST</option>
				<option value="875">IFEDAYO</option>
				<option value="876">BASSA</option>
				<option value="877">OHAOZARA </option>
				<option value="878">OGO OLUWA</option>
				<option value="879">Atisbo</option>
				<option value="-1">please select</option>

			</select></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Mother Tongue:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtMotherTongue" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtMotherTongue" class="m_btsInput"></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <a id="m_dnn_ctr644_MyInfo_ctl23_lbSavePersonalData"  style="display:inline-block;width:58px" rel="noreferrer">Save</a></td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td class="m_lightback" colspan="2" align="left">
                            <strong><span>Contact Information</span></strong></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                <tbody><tr>
                                    <td style="width:50%" align="center">
                                        <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                            <tbody><tr>
                                                <td style="padding:5px" align="right">
                            Phone Number:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtPhoneNo" type="text" value="07059025507" id="m_dnn_ctr644_MyInfo_ctl23_txtPhoneNo" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Email Address:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtEmail" type="text" value="mustophaabdulwareeth3918@gmail.com" id="m_dnn_ctr644_MyInfo_ctl23_txtEmail" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                            Permanent Home Address:</td>
                                                <td style="padding:5px">
                            <textarea name="dnn$ctr644$MyInfo$ctl23$txtHomeAddress" rows="2" cols="20" id="m_dnn_ctr644_MyInfo_ctl23_txtHomeAddress" disabled="" class="m_aspNetDisabled m_btsInput">NO F.5 IJAGBO JUNCTION IJAGBO, KWARA STATE</textarea></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Address City:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtAddressCity" type="text" value="IJAGBO" id="m_dnn_ctr644_MyInfo_ctl23_txtAddressCity" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:5px" align="right">
                                                    Address State:</td>
                                                <td style="padding:5px">
                                                    <input name="dnn$ctr644$MyInfo$ctl23$txtAddressState" type="text" value="KWARA" id="m_dnn_ctr644_MyInfo_ctl23_txtAddressState" disabled="" class="m_aspNetDisabled m_btsInput"></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                    <td valign="top" align="center">
                                        <table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                                            <tbody><tr style="padding:5px">
                                                <td style="width:30%" align="right">
                                                    Postal Address:</td>
                                                <td>
                            <textarea name="dnn$ctr644$MyInfo$ctl23$txtPostalAddress" rows="2" cols="20" id="m_dnn_ctr644_MyInfo_ctl23_txtPostalAddress" class="m_btsInput"></textarea></td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                            </tbody></table>
                            <a id="m_dnn_ctr644_MyInfo_ctl23_lbSaveContactInfo" class="m_btn m_btn-warning m_noDec" style="display:inline-block;width:58px" rel="noreferrer">Save</a></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><table style="width:100%" cellspacing="0" cellpadding="3" border="0">
                            <tbody><tr>
                                <td style="width:50%" align="center">
                                    <table style="width:100%" class="m_lightlineubox" cellspacing="0" cellpadding="3" border="0">
                                        <tbody><tr>
                                            <td class="m_lightback" colspan="2" align="left">
                                                <strong><span>Next Of KIN Information</span></strong></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px" align="right">
                                                Firstname:</td>
                                            <td style="padding:5px">
                                                <input name="dnn$ctr644$MyInfo$ctl23$txtKinFirstName" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtKinFirstName" class="m_btsInput"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px" align="right">
                                                Lastname:</td>
                                            <td style="padding:5px">
                                                <input name="dnn$ctr644$MyInfo$ctl23$txtKinLastName" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtKinLastName" class="m_btsInput"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px" align="right">
                                                Relationship:</td>
                                            <td style="padding:5px">
                            <input name="dnn$ctr644$MyInfo$ctl23$txtKinRelationship" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtKinRelationship" class="m_btsInput"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding:5px" align="right">
                                                Address:</td>
                                            <td style="padding:5px">
                                                <textarea name="dnn$ctr644$MyInfo$ctl23$txtKinAddress" rows="2" cols="20" id="m_dnn_ctr644_MyInfo_ctl23_txtKinAddress" class="m_btsInput"></textarea></td>
                                        </tr>
                                    </tbody></table>
                                </td>
                                <td align="center"><table style="width:100%" class="m_lightlineubox" cellspacing="0" cellpadding="3" border="0">
                                    <tbody><tr>
                                        <td class="m_lightback" colspan="2" align="left">
                                            <strong><span>Sponsor Information</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%" align="right">
                                            Firstname:</td>
                                        <td>
                                            <input name="dnn$ctr644$MyInfo$ctl23$txtSponsorFirstName" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtSponsorFirstName" class="m_btsInput"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%" align="right">
                                            Lastname:</td>
                                        <td>
                                            <input name="dnn$ctr644$MyInfo$ctl23$txtSponsorLastName" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtSponsorLastName" class="m_btsInput"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%" align="right">
                                            Sponsorship:</td>
                                        <td>
                                            <input name="dnn$ctr644$MyInfo$ctl23$txtSponsorship" type="text" id="m_dnn_ctr644_MyInfo_ctl23_txtSponsorship" class="m_btsInput"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%" align="right">
                                            Address:</td>
                                        <td>
                                            <textarea name="dnn$ctr644$MyInfo$ctl23$txtSponsorAddress" rows="2" cols="20" id="m_dnn_ctr644_MyInfo_ctl23_txtSponsorAddress" class="m_btsInput"></textarea></td>
                                    </tr>
                                </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a id="m_dnn_ctr644_MyInfo_ctl23_lbSaveSponsor" class="m_btn m_btn-warning m_noDec" style="display:inline-block;width:58px" rel="noreferrer">Save</a></td>
                            </tr>
                        </tbody></table>









 </td>
                    </tr>
                    
			<tr>
				<td style="height:0px">
				<table style="width:100%;height:0px;font-size:0px" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="padding:0px 5px 0px 5px;white-space:nowrap" valign="middle">
						
						</td>
						<td style="padding:0px 5px 0px 0px;width:100%;white-space:nowrap" valign="middle">
						
						</td>
						<td style="padding:0px 5px 0px 0px;white-space:nowrap" valign="middle">
						
						</td>
						<td style="padding:0px 5px 0px 0px;white-space:nowrap" valign="middle">
						
						</td>
					</tr>
				</tbody></table>
				</td>
			</tr>
		</tbody></table>
		</td>
	</tr>
</tbody></table>
<div class="m_BottomGap_l001v11">
&nbsp;</div>

</div></td>

											<td id="m_dnn_RightPane" class="m_rightpane m_DNNEmptyPane">
											</td>

										</tr>
									</tbody></table>
									</td>
								</tr>
								<tr>
									<td id="m_dnn_MiddleTopPane" class="m_middletoppane m_DNNEmptyPane">
									</td>

								</tr>
								<tr>
									<td valign="top">
									<table class="m_FullWidth m_FullHeight" cellspacing="0" cellpadding="0" border="0">
										<tbody><tr>
											<td id="m_dnn_MiddlePane" class="m_middlepane m_DNNEmptyPane">
											</td>

											<td id="m_dnn_MiddleRightPane" class="m_middlerightpane m_DNNEmptyPane">
											</td>

										</tr>
									</tbody></table>
									</td>
								</tr>
								<tr>
									<td id="m_dnn_MiddleBottomPane" class="m_middlebottompane m_DNNEmptyPane">
									</td>

								</tr>
								<tr>
									<td valign="top">
									<table class="m_FullWidth m_FullHeight" cellspacing="0" cellpadding="0" border="0">
										<tbody><tr>
											<td id="m_dnn_BottomLeftPane" class="m_bottomleftpane m_DNNEmptyPane">
											</td>

											<td id="m_dnn_BottomCenterPane" class="m_bottomcenterpane m_DNNEmptyPane">
											</td>

											<td id="m_dnn_BottomRightPane" class="m_bottomrightpane m_DNNEmptyPane">
											</td>

										</tr>
									</tbody></table>
									</td>
								</tr>
								<tr>
									<td id="m_dnn_BottomPane" class="m_bottompane m_DNNEmptyPane">
									</td>

								</tr> 
							</tbody></table>
							</td>
						</tr>
					</tbody></table>
				</div>
				</td>
			</tr>
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