<?php
// -------------- retrieve form information ----------
$txtProductId = $_REQUEST ["txtProductId"];
$txtQuantity = $_REQUEST ["txtQuantity"];

// ----------- set up variables ---------
$productId_msg = "Product Id OK!"; // validate_formProductId($form_txtProductId);
$product_cost = 0;
$qty = 0;
$quantity_msg = "Quantity OK!"; // validate_Quantity($form_txtQuantity);
$total_cost = 0;
$input_valid = true;
$pattern_valid = false;

// ------- validate data-------

// ---------------------- validate quantity ------------
$valid_pattern = "/^\d+$/";
$quantity_msg = "Quantity OK!";
if (preg_match ( $valid_pattern, $txtQuantity ) == false) {
	$quantity_msg = "Invalid Quantity ";
	$input_valid = false;
}

// ---------- validate product id
if (strlen ( trim ( $txtProductId ) ) == 0) {
	$productId_msg = "Product Id cannot be blank!";
	$input_valid = false;
} else {
	
	if (preg_match("/^[GB]{2}-[4-8]{3}$/", trim($txtProductId))==1){
		$pattern_valid = True;
	}
	/*
	 * Create a pattern that validates the productId
	 * Check if the value in $txtProductId matches the valid pattern
	 * If it is valid, set the $pattern_valid variable to true.
	 *
	 * Rules for validation are as follows:
	 * product ID should be in this format XX-nnn, where
	 * X can be �"B" or "G"
	 * n is a number between 4 and 8
	 * For example, the following are valid product Ids:
	 * GB-745
	 * BG-467
	 *
	 * For example, the following are invalid product Ids:
	 * GB-123 (numeric digits must be 4-8)
	 * PQ-467 (alphabets must be B or G
	 * 1234 (Pattern not followed)
	 * ABSBSB (Pattern not followed)
	 *
	 * If the pattern is valid, complete code to
	 * determine cost of the transaction, based upon the
	 * value in the first 2 characters of the product Id sent in by the user
	 *
	 * Price per unit is based upon the first
	 * 2 characters of the product id and is as follows:
	 * BB : $2.20 per unit
	 * BG : $1.78 per unit
	 * GB : $4.56 per unit
	 * GG : $3.40 per unit
	 *
	 *
	 * Total product cost should be displayed with 2 places after the
	 * decimal point
	 */
	
	if ($pattern_valid == true) {
		$char2 = $txtProductId [0] . $txtProductId [1];
		switch ($char2) {
			case "BB" :
					$product_cost = 1.50;
				break;
			case "BG" :
					$product_cost = 1.78;
				break;
			case "GB" :
					$product_cost = 4.56;
				break;
			case "GG" :
					$product_cost = 3.40;
		}
	} else {
		$productId_msg = " Invalid Product Id ";
		$input_valid = false;
	}
}

?>
<!DOCTYPE html>
<html>

<body>

	<h3>Week 6 - Lab 3 (Part II)</h3>

	<hr>
	<p>You entered the following information :</p>
	<table border="1">
		<tr>
			<th>Form Field</th>
			<th>Value&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>Validation Status</th>
		</tr>
		<tr>
			<td>Product Id</td>
			<td><?php echo $txtProductId?></td>
			<td><?php echo $productId_msg?></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><?php echo $txtQuantity?></td>
			<td><?php echo $quantity_msg?></td>
		</tr>

	</table>
	<p></p>
	<strong>Prices</strong>
	<ul>
		<li>BB : $2.20 per unit</li>
		<li>BG : $1.78 per unit</li>
		<li>GB : $4.56 per unit</li>
		<li>GG : $3.40 per unit</li>
	</ul>
<?php
if ($input_valid == true) {
	$qty = $txtQuantity * 1;
	$total_cost = $qty * $product_cost;
	$total_cost = '$' . sprintf ( "%1.2f", $total_cost );
	echo "<h4>Total cost = $total_cost for $qty units @ \$$product_cost per unit</h4>";
}
?>

</body>
</html>