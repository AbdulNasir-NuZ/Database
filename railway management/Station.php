<?php 
include('connect.php');
echo "hello";
if($_SERVER['REQUEST_METHOD'] =='POST'){
	echo"hello";
	//require('Station.php');
	//if (isset($_POST[''])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$Station_id_id =$_POST['Station_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$Station_id); 
        $Starting_place= $_POST['Starting_place'];
        $Destination = $_POST['Destination'];
		$Timings = $_POST['Timings'];
	$Train_id=$_POST['Train_id'];
	//$Class= mysqli_real_escape_string($con,$Train_id);
        $query = "INSERT INTO station(Station_id,Starting_place,Destination,Timings,Train_id) VALUES('$Station_id','$Starting_place','$Destination','$Timings','$Train_id')";
        if(!mysqli_query($con,$query)){
			//echo"connect";
		echo mysqli_error($con);
		}
		
	}
	?>
<?php include('header.php'); ?>

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

	<h1>Train's Information</h1>
		<form action="Book.php" method="POST">
			<p> Station_id : <input type="text" name="Station_id" size="20" maxlength="40"  /></p>
			<p> Starting_place : <input type="text" name="Starting_place" size="20" maxlength="40" /></p>
			<p> Destination : <input type="text" name="destination" size="10" maxlength="40" /></p>
			<p> Timings : <input type="text" name="Timings" size="20" maxlength="40" /></p>
			<p> Train_id :<input type="text" name="Train_id" size="20" maxlength="40" /<></p>
			 <input type="submit" name="submit" value="submit" />
			
		</form>
	</div>


</div>
</body>
</html>
	