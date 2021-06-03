<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin">
	<title>RESERVATION</title>
	<link rel="stylesheet" href="style1.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
		<?php 
			include("login.php");
		?>




		<div class="background">
			<?php 
				include("head.php");
			?>
			<div class="aboutusbody">
					<form style="text-align: center; padding: 10px;">
					Name:
					<input type="text" name="username"  ><br><br>
					Age:
					<input type="text" name="password"><br><br>

					Departure From:
					<select name="places">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					</select>
					<br><br>
					Departure To:
					<select name="places">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					</select>
					<br><br>
					Class :
					<input type="radio" name="1" value="1" checked> First class Chair
					<input type="radio" name="gender" value="female"> Shovon chair
					<input type="radio" name="gender" value="other">Shovon <br> <br>
					Date of journey: <input type="text" name="23"><br><br>
					<input type="submit" name="book" value="Book Your Ticket">
					</form>
							
			</div>
		<footer class="footer">
			<p align="center">Bangladesh Railway website is optimized for Reservation and information. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 2019 by Refsnes Data. All Rights Reserved.
			Powered by Sadia Akter Afrin.<br>Copyright © all reserved here</p>
			
		</footer>
	
	</body>

</html>

