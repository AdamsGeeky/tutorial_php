<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>funtion</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- funtion(method): is the collection of statement that perform pre defined action 
	         its used to automate a repeated action in programming. usually is of two type
	         1. pre defind(build in) funtion
	         2. User defind funtion
 -->
 <?php 
   //pre defind funtion: is a group of instruction that perform a specfic action
   //its build by the language create to eazy some comman task in programming
   $sentance = "programing is really fun to do it improve your problem solving skill";
    // example of some String build in function manifulating 
    echo " is used to cont the number of charecter in the varible sentence  ".strlen($sentance); 
    echo '<br> <br>';
    echo 'is also used to count the number of word in the varible sentance  '.str_word_count($sentance);
    echo '<br> <br>';
    echo 'is used to reverse the sentence varible '.strrev($sentance);
    echo '<br> <br>';
    echo  'print the varible : '.$sentance;
    echo '<br> <br>';
    echo 'to find the position of the word in '.strpos($sentance,"m",);
    echo '<br> <br>';
    echo 'this is the original sentence '.$sentance;
    echo '<br> <br>';
    echo  " to replace Fun with enjoying ".str_replace("fun", "enjoying", $sentance);


  ?>

	
</body>
</html>