<?php

    include_once('server.php'); 
?>	


	<!DOCTYPE html>
	<html>
	<head>
		<title>Registration_Form</title>
		  <link rel="stylesheet" type="text/css" href="./style.css">

		  <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
	   
	      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h2> Registraion Form </h2>
		<form style="padding-left: 30px;">
			
			<input type="text" name="user_name" placeholder="User Name" required><br><br>
			
			<input type="email" name="email" placeholder="Email" required><br><br>
			
			<input type="Password" name="Password" placeholder="Password" required>
			
			<input type="Password" name="C_Password" placeholder="Password" required>
			<h2>Personal Details</h2>
			
			<input type="text" name="First_Name" placeholder="First Name" required>
			
			<input type="text" name="Last_Name" placeholder="Last Name"required><br><br>

		    <input type="number" name="Ph_Number" size="10" placeholder="Phone_Number" required><br><br><br>

		   	<input id="datepicker" width="276" / placeholder="Birth_Date" required>
	   			 <script>
	        		$('#datepicker').datepicker({
	            		
	        	    });
	             </script>
		   
		    <br><br>
		   
		    
		    <textarea placeholder="Address" required></textarea><br><br>

            <label>Gender</label>
            <div style="display:inline;">
	            <input type="radio" name="Gender" value="Male">Male
	            <input type="radio" name="Gender" value="Female">Female
	            <input type="radio" name="Gender" value="Other">Other
            </div><br><br>
		   <label>Status</label>
		   <div style="display:inline;">
			   <input type="radio" name="Status" value="Married">Married
			   <input type="radio" name="Status" value="Unmarried">Unmarried
		   </div>

			<select required><option>Country</option><option>India</option><option>Other</option></select><br><br><br>
			
			<label>Skill</label>
			 <div style="display: inline;">
				<input type="checkbox" value="">HTML
				<input type="checkbox" value="">CSS
				<input type="checkbox" value="">PHP 
				<input type="checkbox" value="">JS
				<input type="checkbox" value="">MySql
				<input type="checkbox" value="">Bootstrap<br><br>
			 </div>
			
			<input type="text" name="Describe" placeholder="Describe yourself in ONE word" required>
			
			<input type="text" name="Hobby" placeholder="Hobby"><br><br>

			<textarea placeholder="Tell About Your Self"></textarea>

            <textarea placeholder="What you think you can do as a programmer" required></textarea><br><br>

			<input type="checkbox" value="" required>terms and condition<br><br>

			<button  type="submit" name="save" >Save</button>
		</form>

	</body>
	</html>