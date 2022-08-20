<?php
include 'conn.php';
$record = mysqli_query($conn2, "SELECT * FROM biodata");
if ($record->num_rows > 0) {
    while($row = $record->fetch_assoc()) {
        
        }
            }
        ?>
<?php
if (isset($_POST['login_portal'])){
$username=$_POST['username'];
$password=$_POST['password'];
include 'conn.php';
$records = mysqli_query($conn2, "SELECT * FROM biodata WHERE apnum='$username'");
if ($records->num_rows > 0) {
    while($rows = $records->fetch_assoc()) {
        $id=$rows['id']; 
       $name= $rows['name'];
   $apnum= $rows['apnum']; 
    }
    if ($name==$password && $apnum==$username) {
      echo "<script>alert ('login successfully');window.location.href='../my - portal/';</script>";
$_SESSION["name"] = $apnum;
$_SESSION["password"] = $password;
}

    }


elseif ($name!=$password || $apnum!=$username) {
    echo '<div id="error-message" style="display:block;"> login was not successfully </div>' ;
  }
}
?>