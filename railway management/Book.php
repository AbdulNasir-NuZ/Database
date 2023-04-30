<?php 
include('connect.php');
echo "hello";
if($_SERVER['REQUEST_METHOD'] =='POST'){
	echo"hello";
	//require('Book.php');
	//if (isset($_POST[''])){
        // removes backslashes
		//echo"connect";
		include('connect.php');
	$U_id =$_POST['U_id'];
        //escapes special characters in a string
	//$U_id = mysqli_real_escape_string($con,$U_id); 
        $PNR= $_POST['PNR'];
        $Train_id = $_POST['Train_id'];
	$Dates=$_POST['Dates'];
	//$Class= mysqli_real_escape_string($con,$Dates);
        $query = "INSERT INTO book(U_id,PNR,Train_id,Dates) VALUES('$U_id','$PNR','$Train_id','$Dates')";
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

	<h1>Train Booking</h1>
		<form action="thankyou.php" method="POST">
			<p> U_id: <input type="text" name="U_id" size="20" maxlength="40"  /></p>
			<p> PNR: <input type="text" name="PNR" size="20" maxlength="40" /></p>
			<p> Train_id : <input type="text" name="Train_id" size="20" maxlength="40" /></p>
			<p> Dates: <input type ="text" name = "Dates" size="20" maxlength="40" /></p>
			 <input type="submit" name="submit" value="book" />
			
		</form>
	</div>


</div>
</body>
</html>