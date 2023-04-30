<?php 
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//require('railwayreg.php');
	//if (isset($_POST['U_id'])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$username =$_POST['U_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$U_id); 
        $Password = $_POST['Password'];
        $FirstName = $_POST['FirstName'];
	$age =$_POST['age'];
	//$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT INTO customer(U_id,Password,FirstName,LastName,Age) VALUES('$U_id','$Password','$FirstName','$LastName','s1')";
        if(!mysqli_query($con,$query)){
			//echo"connect";
		mysqli_error($con);
		}
		
	}
	?>
<html>
<?php include('header.php');?>
<title></title>
<body>
<div id="container">
	<div id="header">
		<h1>Retail Store  Management</h1>
	</div>
	<div id="storepic">
		<img src="retaillimg.jpg" width="1310" height="250" alt="image1">
	</div>
	<div id="content">
	<!-- This is section 2 -->

	<h1> Customer Registration form</h1>
		<form action="customerreg.php" method="post">
			<p> Username : <input type="text" name="Username" size="20" maxlength="40" required /></p>
			<p>  Contact : <input type="number" name="contact_no" size="20" maxlength="40" required /></p>
			<p>  Address : <input type="text" name="addr" size="20" maxlength="50" required /></p>
			<p>  Password: <input type="password" name="password" size="20" maxlength="50" required /></p>
			 <input type="submit" name="submit" value="submit" />
			
		</form>
	</div>
</div>
</body>
</html>