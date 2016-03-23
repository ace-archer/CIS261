<?php
if (isset($_REQUEST["txtMPH"])){
	if (is_numeric($_REQUEST["txtMPH"])){
		if (($_REQUEST["txtMPH"]>=0)){
			$txtMPH=($_REQUEST["txtMPH"]);
			$errMSG="";
			$mphChecked = True;
		}
		else{
			$errMSG="Error! MPH is less than 0! </br>";
			$mphChecked = False;		
		}
	}
	else{
		$errMSG="Error! MPH Value must be numeric! </br>";
		$mphChecked = False;
	}
}
else{
	$errMSG="Error! MPH Must be set! </br>";
	$mphChecked = False;
}
if (isset($_REQUEST["txtHours"])){
	if (is_numeric($_REQUEST["txtHours"])){
		$txtHours=($_REQUEST["txtHours"]);
		if (is_int($txtHours+0)){
			$errMSG .="";
			$hoursChecked = True;
		}
		else{
			$errMSG .="Error! Hours must be an integer!";
			$hoursChecked = False;
		}
		
	}
	else{
		$errMSG .="Error! Hours Value must be numeric!";
		$hoursChecked = False;
	}
}
else{
	$errMSG .="Error! Hours Must be set!";
	$hoursChecked = False;
}

if ($hoursChecked && $mphChecked){
	$hoursCount=1;
	while ($hoursCount <= $txtHours){
		$milesGone = $hoursCount * $txtMPH;
		echo "Hours Travled: $hoursCount Distance Traveled: $milesGone miles </br>";
		$hoursCount +=1;
	}
}

if($errMSG != ""){
	echo $errMSG;
}