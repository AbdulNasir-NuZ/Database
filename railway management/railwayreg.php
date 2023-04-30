<?php 
include('connect.php');
if($_SERVER['REQUEST_METHOD'] =='POST'){
	echo"hello";
	//require('railwayreg.php');
	//if (isset($_POST['U_id'])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$username =$_POST['U_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$U_id); 
        $Password = $_POST['password'];
        $FirstName = $_POST['FirstName'];
	$age =$_POST['Age'];
	$U_id=$_POST['U_id'];
	$LastName=$_POST['LastName'];
	//$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT INTO user(U_id,Password,FirstName,LastName,Age) VALUES('$U_id','$Password','$FirstName','$LastName','$age')";
        if(!mysqli_query($con,$query)){
			//echo"connect";
		echo mysqli_error($con);
		}
		
	}
	?>
<HTML>
<?php include('header.php');?>
<body>
<div id="container">
	<div id="header">
		<h1>Railway  Management</h1>
	</div>
	<div id="trainpic">
		<img src="railway.jpg" width="1310" height="250" alt="image1">
	</div>
	
	<div id="content">
	<!-- This is section 2 -->

	<h1> User Registration form</h1>
		<form action="railwayreg.php" method="POST">
		    <P>U_id: <input type="text" name="U_id" size="20" maxlength="20" required /></p>
			<p> Password: <input type="password" name="password" size="20" maxlength="50" /></p>
			<p> First Name : <input type="text" name="FirstName" size="20" maxlength="40" required /></p>
			<p> Last Name : <input type="text" name="LastName" size="20" maxlength="40" required /></p>
			<p> Age : <input type="text" name="Age" size="20" maxlength="40" required /></p>
			
				</select> </p>
				
			 <input type="submit" name="submit" value="submit" />
			
		</form>
	</div>


</div>
</body>
</html>
