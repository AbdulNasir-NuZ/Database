<?php 
include('connect.php');
echo "hello";
if($_SERVER['REQUEST_METHOD'] =='POST'){
	echo"hello";
	//require('Train.php');
	//if (isset($_POST['Train_id'])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$Train_id =$_POST['Train_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$U_id); 
        $Train_name= $_POST['Train_name'];
        $Avail_seats = $_POST['Avail_seats'];
	$Class=$_POST['Class'];
	//$Class= mysqli_real_escape_string($con,$Class);
        $query = "INSERT INTO train(Train_id,Train_name,Avail_seats,Class) VALUES('$Train_id','$Train_name','$Avail_seats','$Class')";
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

	<h1>Train's Information</h1>
		<form action="Station.php" method="POST">
			<p> Train_id: <input type="text" name="Train_id" size="20" maxlength="40"  /></p>
			<p>  Train_name : <select name="Train_name">
					<option value="Rajdhani_express">Rajdhani_express</option>
					<option value="malabar_express">malabar_express</option>
					<option value="shatabdi_express">shatabdi_express</option>
				</select> </p>
			<p> Avail_seats: <input type="text" name="Avail_seats" size="20" maxlength="40" /></p>
			<p>Class :<select name="Class"><option value="A/C">ac</option>
			<option value="NON-A/C">non_ac</option></select></p>
			 <input type="submit" name="submit" value="submit" />
			
		</form>
	</div>


</div>
</body>
</html>