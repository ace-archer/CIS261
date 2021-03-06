<!DOCTYPE html>
<html>

<!--  php to include html code+link + script tags -->

<body>
	<h3>Week 4 - Lab 2 (Part I)</h3>
	<div id='allowMargins'>
		<hr>
		<h4>Enter information about the class.</h4>
		<p><span class = "explanation">The PHP script that collects and displays this form's data
		performs validation and displays back error messages if it is not
		valid. This incomplete lab does not validate the lab-ratio field.</span></p>
		<form action="lab2_part2.php" method="post">
			<table>
				<tr>
					<td><p>Enter Course Name</p></td>
					<td><input name="txt_cname" width="6"></td>
				</tr>
				
				<tr>
					<td><p>Enter Credit Hours (Must be an integer)</p></td>
					<td><input name="txt_hours"></td>
				</tr>

				<tr>
					<td><p>Select Lab Ratio. Must be between 0.0 and 1.0, and can be a
							fraction</p></td>
					<td><input name="txt_lab_ratio"></td>
				</tr>
				
				<tr>
					<td>Are you a Faculty member?</td>
					<td><input type="checkbox" name="chk_fac_member" value="Yes" /></td>
				</tr>
				
			</table>
			<input type="submit" value="Send to Server!">
		</form>
		<hr>
		<p>Once data has been processed by the server, it will be sent back
			for your review.</p>

	</div>
</body>

</html>