<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>input and output</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="get" accept-charset="utf-8">
		<input type="text" name="person"  placeholder="your name hare">
		<button type="submit">Submit</button>
		
	</form>


	<?php 

   // POST and GET would do same thing but 4 security reason POST work Best
   // Cuz GET display the date input in the URL holder
  

      $name = $_GET['person'];

      echo $name.' welcome to php world';


     
	 ?>
	
</body>
</html>