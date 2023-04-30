<?php include('header.php');
include('connect.php');

 ?>

<body>
<div id="container">
	<div id="header">
		<h1>Railway  Management</h1>
	</div>
	<div id="trainpic">
		<img src="railway.jpg" width="1310" height="250" alt="image1">
	</div>
	<div id="navigation">
		<ul>
			<li><a href="about.php" class="active">About</a></li>
			<li><a href="railwayreg.php">Railway Registration</a></li>
		</ul>
	</div>
	
	<div id="content">
	<h2> LOGIN</h2>
		<form action="Passenger.php" method="">
			<p> U_id : <input type="text" name="u_id" size="20" maxlength="40" /></p>
			<p> Password : <input type="password" name="password" size="20" maxlength="40" /></p>
			<input type="submit" name="submit" value="login" />
			
		</form>
	</div>
	
	


</div>
</body>
</html>