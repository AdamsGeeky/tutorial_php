<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>simple calculator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<marquee> welcome to simple calculetor</marquee>
	<center>
		<form  accept-charset="utf-8">
			<input type="number" name="num1" value="" placeholder="Enter first Number">
			<br><br>
			<input type="number" name="num2" value="" placeholder="Enter second Number">
			<br><br>
			<select name="operator">
				<option  >none</option>
				<option  >Add</option>
				<option  >multiply</option>
				<option  >divide</option>
				<option  >subtrac</option>
				<option  >modules</option>
			</select>
			<br><br>
			<button type="submit" name="submit">compute</button>			
		</form>
		<!-- here is the php logic code -->
		the Answer is : 
		<?php 

		if (isset($_GET['submit'])) {
			$num1 = $_GET['num1'];
			$num2 = $_GET['num1'];
			$operator = $_GET['operator'];
			switch ($operator) {
				case 'Add':
					echo $add = $num1 + $num2;
					break;
				case 'multiply':
					echo $multiply = $num1 * $num2;
					break;
				case 'divide':
					echo $divide = $num1 / $num2;
					break;
				case 'subtrac':
					echo  $subtac = $num1 - $num2 ;
					break;
				case 'modules':
					echo $mudul = $num1 % $num2;
					break;
				default:
					echo 'select the operator from the list';
					break;
			};
			
		};


		 ?>


	</center>
	
</body>
</html>
