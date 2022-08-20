<?php 
if (isset($_POST['register'])) {
					$name=$_POST['name'];
					$surname=$_POST['surname'];
					$middlename=$_POST['middlename'];
					$email=$_POST['email'];
					$mstatus=$_POST['mstatus'];
						$gender=$_POST['gender'];
						$state=$_POST['state'];
						$local=$_POST['local'];
						$phone=$_POST['phone'];
						$address=$_POST['address'];
				$dob=$_POST['dob'];
				$exam=$_POST['exam'];
				$jambreg=$_POST['jambreg'];
				$jambscore=$_POST['jambscore'];
							$s1=$_POST['s1'];
							$g1=$_POST['g1'];
							$s2=$_POST['s2'];
								$g2=$_POST['g2'];
								$s3=$_POST['s3'];
								$g3=$_POST['g3'];
							$s4=$_POST['s4'];
							$g4=$_POST['g4'];
									$s5=$_POST['s5'];
									$g5=$_POST['g5'];
									$s6=$_POST['s6'];
									$g6=$_POST['g6'];
									$s7=$_POST['s7'];
								$g7=$_POST['g7'];
							$s8=$_POST['s8'];
									$g8=$_POST['g8'];
									$s9=$_POST['s9'];
								$g9=$_POST['g9'];
								$rand= rand(1,9999);
							$program=$_POST['program'];
							$course=$_POST['course'];
							$adstatus=0;
					$gpo="GPO/";
					$appn="APPN/";
					$date= date("y");
					$dates= "20";
					$apnum=$appn.$gpo.$date.$dates.$rand;

					$UploadDirectory  ='portal/images_upload/';
			$File_Name          = strtolower($_FILES['passport']['name']);
  				$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
 				 $Random_Number      = rand(0, 9999999999); //Random number to be added to name.
 					 $NewFileName    = $Random_Number.$File_Ext; //new file name
  
  				if(move_uploaded_file($_FILES['passport']['tmp_name'], $UploadDirectory.$NewFileName ))
  	   {
  	   	include 'config.php';
  	   	if($conn1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($conn2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($conn3 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
  	   	  	   	include 'config.php';
 
  	   	$image_insert="INSERT INTO profile_images (imgname,apnum) VALUES('$NewFileName','$apnum')";
  	   	  	   	include 'config.php';
  	   		$biodata="INSERT INTO biodata (name,surname,middlename,email,mstatus,gender,state,local,phone,address,dob,exam,course,adstatus,apnum) VALUES('$name','$surname','$middlename','$email','$mstatus','$gender','$state','$local','$phone','$address','$dob','$exam','$course','$adstatus','$apnum')";
  	   	  	   	include 'config.php';

$examination="INSERT INTO examination(exam,jambreg,jambscore,s1,g1,s2,g2,s3,g3,s4,g4,s5,g5,s6,g6,s7,g7,s8,g8,s9,g9,program,course,adstatus,apnum) VALUES('$exam','$jambreg','$jambscore','$s1','$g1','$s2','$g2','$s3','$g3','$s4','$g4','s5','g5','$s6','$g6','$s7','$g7','$s8','$g8','$s9','$g9','$program','$course','$adstatus','$apnum')";

 	$akque= $conn1 ->query ($biodata);
  	   	$akuery= $conn2 ->query ($image_insert);
  	   	$akquery2= $conn1 ->query ($examination);
  	   		echo "<script> alert('Application Submited Successfully'); window.location.href='success.php';</script>";
  	   	// echo"<script> Swal.fire('Submited Successfully',' Dear $surname $name Kindly Click Ok to Proceed','success');</script>";
  	   	// sleep(10);
  	   	// echo"<script>window.location.href='success.php';</script>";
  	   	
  	   	$_SESSION['appid'] = $apnum;
  	   	$_SESSION['surname'] = $surname;
		$_SESSION['name'] = $name;	 
  }else{
    die('error uploading File!' );
    echo "<script> alert('this is not working')</script>";
  }
  
}
?>