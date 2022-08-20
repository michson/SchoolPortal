<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = $fname = $mname = $lname = $address = $phoneno = $maritalstatus = $gname = $goccupation = $gmaritalstatus = $gphoneeon = $passport = $document1 = $document2 = $document3 = "";
$username_err = $email_err = $password_err = $confirm_password_err = $fname_err = $mname_err = $lname_err = $address_err = $phoneno_err = $maritalstatus_err = $gname_err = $goccupation_err = $gmaritalstatus_err = $gphoneeon_err = $passport_err = $document1_err = $document2_err = $document3_err  = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate phone
    if(empty(trim($_POST["phoneno"]))){
        $phoneno_err = "Please enter a phone number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE phoneno = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phoneno);
            
            // Set parameters
            $param_phoneno = trim($_POST["phoneno"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $phoneno_err = "This phone have been used.";
                } else{
                    $phoneno = trim($_POST["phoneno"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    

    // Validate phone
    if(empty(trim($_POST["fname"]))){
        $fname_err = "Please enter your First Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE fname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fname);
            
            // Set parameters
            $param_fname = trim($_POST["fname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate phone
    if(empty(trim($_POST["mname"]))){
        $mname_err = "Please enter your Middle Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE mname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_mname);
            
            // Set parameters
            $param_mname = trim($_POST["mname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    

    // Validate phone
    if(empty(trim($_POST["fname"]))){
        $fname_err = "Please enter your First Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE fname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fname);
            
            // Set parameters
            $param_fname = trim($_POST["fname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    

    // Validate phone
    if(empty(trim($_POST["lname"]))){
        $lname_err = "Please enter your Last Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE lname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lname);
            
            // Set parameters
            $param_lname = trim($_POST[";lname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    

    // Validate phone
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE address = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_address);
            
            // Set parameters
            $param_address = trim($_POST["address"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    

    // Validate phone
    if(empty(trim($_POST["maritalstatus"]))){
        $maritalstatus_err = "Please enter your First Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE maritalstatus = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_maritalstatus);
            
            // Set parameters
            $param_maritalstatus = trim($_POST["maritalstatus"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    
    

    // Validate phone
    if(empty(trim($_POST["gname"]))){
        $gname_err = "Please enter your Garantor Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE gname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_gname);
            
            // Set parameters
            $param_gname = trim($_POST["gname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }



    // Validate phone
    if(empty(trim($_POST["goccupation"]))){
        $fname_err = "Please enter your Garantor Occupation .";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE goccupation = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_goccupation);
            
            // Set parameters
            $param_goccupation = trim($_POST["goccupation"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate phone
    if(empty(trim($_POST["gmaritalstatus"]))){
        $gmaritalstatus_err = "Please enter your Garantor marital status.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE gmaritalstatus = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_gmaritalstatus);
            
            // Set parameters
            $param_gmaritalstatus = trim($_POST["gmaritalstatus"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate phone
    if(empty(trim($_POST["gphoneeon"]))){
        $gphoneeon_err = "Please enter your Garantor Phone number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE gphoneeon = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_gphoneeon);
            
            // Set parameters
            $param_gphoneeon = trim($_POST["gphoneeon"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate phone
    if(empty(trim($_POST["passport"]))){
        $passport_err = "Upload your passport befor you can subit.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE passport = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $passport);
            
            // Set parameters
            $param_passport = trim($_POST["passport"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate phone
    if(empty(trim($_POST["document1"]))){
        $document1_err = "Upload your document.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE document1 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_document1);
            
            // Set parameters
            $param_document1 = trim($_POST["document1"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }




    // Validate phone
    if(empty(trim($_POST["document2"]))){
        $document2_err = "Upload your document.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE document2 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_document2);
            
            // Set parameters
            $param_document2 = trim($_POST["document2"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }





    // Validate phone
    if(empty(trim($_POST["document3"]))){
        $document3_err = "Upload your document.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE document3 = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_document3);
            
            // Set parameters
            $param_document3 = trim($_POST["document3"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $fname_err = "This phone have been used.";
                // } else{
                //     $phone = trim($_POST["phone"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err) empty($fname_err) && empty($mname_err) && empty($lname_err) && empty($address_err) && empty($phoneno_err) && empty($maritalstatus_err) && empty($gname_err) && empty($goccupation_err) && empty($gmaritalstatus_err) && empty($gphoneeon_err) && empty($passport_err) && empty($document1_err) && empty($document2_err) && empty($document3_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO s_reg (username, password, fname, mname, lname, address, phoneno, maritalstatus, gname, goccupation, gmaritalstatus, gphoneeon, passport, document1, document2, document3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_phone, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fname = $fname;
            $param_mname = $mname;
            $param_lname = $lname;
            $param_address = $address;
            $param_phoneno = $phoneno;
            $param_maritalstatus = $maritalstatus;
            $param_gname = $gname;
            $param_goccupation = $goccupation;
            $param_gmaritalstatus = $gmaritalstatus;
            $param_gphoneeon = $gphoneeon;
            $param_passport = $passport;
            $param_document1 = $document1;
            $param_document2 = $document2;
            $param_document3 = $document3; 
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
<body class="host_version" style="background-image: url(images/img-04.jpg); background-repeat: no-repeat; background-size: cover;">


<div class="row">
    <div class="col-xl-6 col-md-12 col-sm-12" style="padding-left: 200px; margin-top: 100px; margin-left: 200px; margin-right: 500px">
    <div class="contact_form" style="background-color: lightgreen; opacity: 70%;">
    <div id="message"></div> 
        <h1 style="text-align: center; font-weight: bolder; color: darkgreen">Sign Up</h1>
        <br>
        <p>Please fill this form to create an account.</p>
        <form id="contactform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">        
            <hr color="yellowgreen" style="height: 2px; width: 250px">

                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <label>E-mail</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                <label>Phone Number</label>
                <input type="number" name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone; ?>">
                <span class="invalid-feedback"><?php echo $phone_err; ?></span>
                
                            <hr color="yellowgreen" style="height: 2px; width: 250px">

                <center><input type="submit" class="btn btn-primary" value="Submit"> </center>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
    </div>
    </div>
    <br>
    <p>
        <br><br><br>
    </p>  

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>  
</body>
</html>