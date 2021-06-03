<?php

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "train schedule";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
?>

<div id="popup" >

		<div class="mainpopup">
			<h6 style="color: red; font-weight: bold; display: inline-block; font-size: 14px;padding: 0px;margin: 0;"> LOG IN </h6>
			<i class="fa fa-close" style="float:right; color:white; " onclick="facclose()"></i>
			<div class="subpopup">
			<!-- <form >
			
				
				
					USERNAME:
					  <input type="text" name="username"  ><br><br>
					PASSWORD:
					  <input type="password" name="password"><br><br>
					  <hr>
					  
					  <input type="submit" value="Login">					  
					  
			</form> -->
			
			<form style="text-align: center; padding: 10px;" action=""  method="post">
				Phone No: <input type="text" name="phone" value="" required /></br><br>
				Password: <input type="password" name="pass" value="" required /></br><br>
				
				<input type="checkbox" name="rem"> Remember ME</br>
				<input type="submit" name="login" value="Login"></br>
				
				
			</form>
			

			


		</div>

	</div>

	
</div>
<div id="popupS" >
	<style type="text/css">
					
					.mainpopupS table {
						width:100%;
					}
					.mainpopupS  th{
						background-color: #b3e6ff;
					}
					.mainpopupS input{
						text-align: center;
						width: 280px;
						height: 30px;
					}
				</style>
		<div class="mainpopupS">
			<h6 style="color: white; font-weight: bold; display: inline-block; font-size: 14px;padding: 0px;margin: 0;"> SIGN UP </h6>
			<i class="fa fa-close" style="float:right; color:white;display: inline-block; " onclick="faccloseS()"></i>
			<div class="subpopupS">

			<form style="text-align: center; padding: 10px;" action="login.php" method="post" enctype="multipart/form-data">
				
				
				
					<table>
					<tr>
						<td>
							<input type="text" name="name" placeholder="Name">
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="phone" placeholder="Phone"required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="address" placeholder="Address"required="">
						</td>
					</tr>
					<tr>
						<td>
							<input type="email" name="email" placeholder="Email"required="">
						</td>
					</tr>
						
					<tr>
						<td>
							<input type="password" name="password" placeholder="Password"required="">
						</td>
						
					</tr>
					<tr>
						<td>
							<input type="password" name="iird" placeholder="Confirm Password"required="">
						</td>
						
					</tr>

						
					<tr >							
							<td>
						<input type="submit" value="SignUp" name="signupcheck" class="buttom"> 
						</td>
					</tr>
					
				</table>
					  

			</form>
		</div>

	</div>

	
</div>