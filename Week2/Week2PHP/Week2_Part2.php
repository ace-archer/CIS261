<!-- 			<p>Enter Name: <input type="text" name="txtName"></p>
			<p>Enter Email: <input type="email" name="txtEmail"></p>
			<p>Enter Date: <input type="date" name="txtDate"></p>
			<p>Enter Color: <input type="color" name="txtColor"></p>
			<p>Enter Phone Number: <input type="tel" name="txtTel"></p> -->
<?php
$uname = $_POST["txtName"];
$uemail = $_POST["txtEmail"];
$uDate = $_POST["txtDate"];
$uColor = $_POST["txtColor"];
$uTel = $_POST["txtTel"];
$uWeeks = $_POST["radWeek"];
if ( isset($_POST["radSem"]))
	$uSem = $_POST["radSem"];
else
		$uSem = "Unset";

?>
<html>
	<body>
	<h2>Hola <?php echo $uname?></h2>
	<p>Email: <?php echo $uemail?></p>
	<p>Date: <?php echo $uDate?></p>
	<p>Color: <?php echo $uColor?></p>
	<p>Tel #: <?php echo $uTel?></p>
	<p>Weeks: <?php echo $uWeeks?></p>
	<p>Semester: <?php echo $uSem?></p>




	</body>
</html>
