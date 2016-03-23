<?php
$selection = $_REQUEST["1stSemester"];
$semester = array(
		"f" => "Fall",
		"sp" => "Spring",
		"s3" => "Summer 3 Week Session",
		"s8" => "Summer 8 Week Session"
);
$semesterIMG = array(
		"f" => "fall.gif",
		"sp" => "spring.gif",
		"s3" => "summer3.gif",
		"s8" => "summer8.gif"
);
$fGift = array("Sweatshirt", "Backpack", "Gift Card", "Planner");
$wonGift = $fGift[rand(0,3)];
?>

<html>
	<body>
		<table>
			<tr>			
				<td>
					Welcome to the <?php echo $semester[$selection]?> semester!
				</td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo $semesterIMG[$selection] ?>" />
				</td>
			</tr>
			<tr>
				<td>
						You've Won a <?php echo $wonGift?> !
				</td>
			</tr>
		</table>
	</body>
</html>