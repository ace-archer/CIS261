<?php
 
$semester = array(
	"f" => "Fall",
	"sp" => "Spring",
	"s3" => "Summer 3 Week Session",
	"s8" => "Summer 8 Week Session"
);
?>

<html>
	<body>
		<p>Select your starting semester to earn a free gift!</p>
		<form action="BH_Assignment3_Part2.php" method="post">
			<select name="1stSemester">
				<?php 
				foreach($semester as $key => $arrVal){
					echo "<option value='$key'>$arrVal</option>";
				}
				?>
			</select>
			<input type="submit" value="Send Data">
		</form>
	
	</body>
</html>