<!DOCTYPE html>
<html>


<body>


	<h3>Week 6 - Lab 3 (Part I)</h3>

	<p>Please enter the following information:</p>

	<hr>
	<form action="BH_Lab3_Part2.php" method="post">
		<table border="1">
			<tr>
				<td><strong>Enter product Id. </strong> <br />This should be in this
					format XX-nnn, where
					<ul>
						<li>X can be "B" or "G"</li>
						<li>n is a number between 4 and 8</li>
					</ul> For example, the following are valid product Ids:
					<ul>
						<li>GB-745</li>
						<li>BG-467</li>
					</ul> The following are invalid product Ids:
					<ul>
						<li>GB-123 (numeric digits must be 4-8)</li>
						<li>PQ-467 (alphabets must be B or G</li>
						<li>1234 (Pattern not followed)</li>
						<li>ABSBSB (Pattern not followed)</li>

					</ul>Use a Regex to validate this field</td>
				<td><input type="text" name="txtProductId" /></td>
			</tr>
			<tr>
				<td><strong>Enter Quantity</strong><br /> Must be an integer > 0</td>
				<td><input type="text" name="txtQuantity" /></td>
			</tr>
		</table>
		<p>
			<input type="submit" />
		</p>
	</form>


</body>

</html>