<?php
ob_start();
/*

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="clad1"; // Database name 
$tbl_name="user"; // Table name 
*/
$host="127.0.0.1"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="pattake"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 
//check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['admin_id']; 
$mypassword=$_POST['admin_password']; 

// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_name WHERE user_id='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:clad\admin_home.php");
session_start();
$_SESSION['login_user']=$myusername;
}
else {
header('Location: index.php');
session_start();
$_SESSION['views']=1;
}
?>
