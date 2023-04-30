<?php
   session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    $usn=$_GET['U_id'];
   $work=$_GET['pssword'];

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$age=$_GET['age'];

   echo $usn;
   echo $work;
  

   mysql_select_db("railway management");

   $sql = "INSERT INTO user (U_id,Password ,First Name,Last Name,Age)VALUES ('$usn','$work','$fname','$lname','$age')";
   
   $retval = mysql_query( $sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   if(!isset($_SESSION['cToken']))
       $_SESSION['cToken'] = 1;
   else
      $_SESSION['cToken']++;

  // echo "Entered data successfully\n";
   
   mysql_close($conn);

   header('location:index.php');
?>