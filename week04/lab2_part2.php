<?php
//----------- Variables retrieved from form ---------
$txt_cname = $_REQUEST ["txt_cname"];
$txt_hours = $_REQUEST ["txt_hours"];
$txt_lab_ratio = $_REQUEST ["txt_lab_ratio"];

if (isset($_REQUEST["chk_fac_member"]))
{
	$fac_member = true;
}
else
{
	$fac_member = false;
}

//------------- declaring variables that will be used in the program --------
$hours = 0;
$lab_lec_ratio = 0;
$err_msg = "";
$errors_in_input = false;
$fac_member_msg="";

//---------------- decisions on data that is returned from form ------

//--------------- validate course name ------------------
if ($txt_cname == "")
{
	$errors_in_input = true;
	$err_msg .= "Course Name cannot be blank.<br/>";
}


//--------------- validate credit hours --------------

if ($txt_hours == "")
{
	$errors_in_input = true;
	$err_msg .= "Credit Hours cannot be blank.<br/>";
}
else 
{
	if (is_numeric($txt_hours) == false)
	{
		$errors_in_input = true;
		$err_msg .= "Credit Hours must be numeric.<br/>";
	}
	else
	{
		$hours = $txt_hours * 1;
		if (is_int($hours) == false)
		{
			$errors_in_input = true;
			$err_msg .= "Credit Hours must be an integer.<br/>";
		}
		else
		{
			if ($hours < 0)
			{
				$errors_in_input = true;
				$err_msg .= "Credit Hours cannot be negative.<br/>";
			}
		}
	}
}


//----------- validate lab-lecture ratio ----------------

/*
* place code here to ensure that $txt_lab_ratio is:
*	- non-blank
*	- numeric
*	- between 0 and 1
*	display appropriate error messages for each error condition
* similar to the error messages displayed for Credit hours
*/

if ($txt_lab_ratio != ""){
	if (is_numeric($txt_lab_ratio)){
		if ($txt_lab_ratio < 1 && $txt_lab_ratio > 0){
			
		}
		else{
			$errors_in_input = true;
			$err_msg .= "Lab ratio must be Between 1 and 0! </br>";	
		}
	}
	else{
		$errors_in_input = true;
		$err_msg .= "Lab Ratio must be numeric! </br>";
	}
}
else{
	$errors_in_input = true;
	$err_msg .= "Lab Ratio must not be blank! </br>";
}			
if ($fac_member)
	$fac_member_msg = "Faculty member";
else
	$fac_member_msg = "Not a Faculty member";


?>


<!DOCTYPE html>
<html>
<body>
	<h3>Week 4 - Lab 2 (Part II)</h3>
	<div id='allowMargins'>
	<hr>
	
		<h4>You sent in this information:</h4>
		<table class="general_table">
			<tr>
				<td><p>Course Name </p></td>
				<td><?php echo "$txt_cname"; ?></td>
			</tr>
			<tr>
				<td><p>Credit Hours</p></td>
				<td><?php echo "$txt_hours"; ?></td>
			</tr>
			<tr>
				<td><p>Lab-Lecture Ratio</p></td>
				<td><?php echo "$txt_lab_ratio" ;?></td>
			</tr>
			<tr>
				<td><p>Status</p></td>
				<td><?php echo "$fac_member_msg"; ?></td>
			</tr>

		</table>

		<?php 

		if ($errors_in_input == true)
			echo '<p class = "error_msg">' . $err_msg . '</p>';
		
		?>
	</div>
</body>

</html>