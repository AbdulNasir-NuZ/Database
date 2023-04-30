<?php 
include('connect.php');
echo "hello";
if($_SERVER['REQUEST_METHOD'] =='POST'){
	echo"hello";
	//require('Passenger.php');
	//if (isset($_POST['U_id'])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$U_id =$_POST['U_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$U_id); 
        $PNR= $_POST['PNR'];
        $FirstName = $_POST['FirstName'];
	    $LastName=$_POST['LastName'];
	    $Age=$_POST['Age'];
		$Gender=$_POST['Gender'];
	$No_of_seats=$_POST['No_of_seats'];
	//$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT INTO passenger(U_id,PNR,FirstName,LastName,Age,Gender,No_of_seats) VALUES('$U_id','$PNR','$FirstName','$LastName','$Age','$Gender','$No_of_seats')";
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
		<img src="railway.jpg" width="1200" height="180" alt="image1">
	</div>
	
	<div id="content">
	<!-- This is section 2 -->

	<h1> Railway Reservation</h1>
		<form action="Train.php" method="POST">
		<p> U_id : <input type="text" name="U_id" size="20" maxlength="40" /></p>
		<p> PNR : <input type="text" name="PNR" size="20" maxlength="40" /></p>
			<p> FirstName : <input type="text" name="FirstName" size="20" maxlength="40"  /></p>
			<p> LastName : <input type="text" name="LastName" size="20" maxlength="40" /></p>
			
			<p>  Age : <select name="age">
					<option value="0-10">Under 10</option>
					<option value="11-20">Between 11-20</option>
					<option value="21-30">Between 21-30</option>
					<option value="31-40">Between 31-40</option>
					<option value="41-50">Between 41-50</option>
					<option value="51-60">Between 51-60</option>
					<option value="61-70">Between 61-70</option>
					<option value="71-80">Between 71-80</option>
					<option value="81-90">Between 81-90</option>
					<option value="91-100">Between 91-100</option>
				</select> </p>
				<p>Gender :<select name="Gender"><option value="MALE">male</option>
			<option value="FEMALE">female</option></select></p>
			<p> No_of_seats : <input type="text" name="No_of_seats" size="20" maxlength="40" /></p>
			
			 <input type="submit" name="submit" value="submit" />
			
		</form>
	</div>


</div>
</body>
</html>




<