<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Link to file on server: http://webclass.waubonsee.edu/~cis261600_03/week02/lab1.php -->

<?php
	define("COLLEGE_NAME", "Waubonsee Community College");
	
	/*
	 * Change the following 3 lines of PHP code to
	 * contain the names of 3 of your friends.
	 * Make sure to retain the double quotes!
	 */
	
	$friend1 = "Chris";
	$friend2 = "Matt";
	$friend3 = "Miles";
	$sem_hours = 12;
?>

	<body>
	  <h3>Lab 1</h3>
	  <div id='allowMargins'>
		<p>My name is Ben Hawks!</p>
		<p><span class ="explanation">The purpose of this lab is to set up names of 3 of my
		friends in PHP variables and echo them back 
		as HTML text.</span></p>
	
		<p>My friends here at the college are:</p>
		<ol>
			<li id="big_text"> <?php echo $friend1?>
			</li>
			<li id="big_text"> <?php echo $friend2?>
			</li>
			<li id="big_text"> <?php echo $friend3?>
			</li>
		</ol>
		<p>
			I am taking <?php echo $sem_hours?> hours.
		</p>
	
		</div>
	</body>
</html>