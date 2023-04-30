<?php
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $con = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $con) {
      die('Could not connect: ' . mysql_error());
   }
    $usn=$_POST['U_id'];
   $work=$_POST['password'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];

   
  

   mysql_select_db("railway management");

   $sql ="INSERT INTO user (U_id,Password,FirstName,LastName,Age)VALUES ('$usn','$work','$fname','$lname','$age')";
   
   $retval = mysql_query($sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   if(!isset($_SESSION['cToken']))
       $_SESSION['cToken'] = 1;
   else
      $_SESSION['cToken']++;

   echo "Entered data successfully\n";
   
   mysql_close($con);

   header('location:User.php');
?>