<div class="head">
				<h1 class="title">Bangladesh Railway</h1>
			</div>
			<div class="subheader">
			<ul>
				<li><a href="page1.php">HOME</a></li>||
				<li><a href="page2.php">TRAIN SCHEDULE</a></li>||
				<li><a href="page3.php">RESERVATION</a></li> ||
				<li><a href="page4.php">BOOKING HISTORY</a></li>||
				<!-- <li style="float: right; border: 1px solid gray; border-radius: 10px;"><a href="page5.php"> LOGIN </a></li> -->
				
				

				<li style="float: right; border: 1px solid gray; border-radius: 5px; padding:1px;  cursor: pointer;color: white; background-color: #00b3b3;" onclick="fac()">LOGIN</li>


				<li style="float: right; border: 1px solid gray; border-radius: 5px; padding:1px;  cursor: pointer;color: white; background-color: #00b3b3;" onclick="facSign()">SIGNUP</li>
				<li><a href="aboutus.php">ABOUT US</a></li>||



				<script type="text/javascript">
							
					function fac()
					{								
						document.getElementById('popup').style.display='block';	
					}
					function facclose(){
						document.getElementById('popup').style.display='none';
					}
					function facSign(){
						document.getElementById('popup').style.display='none';
						document.getElementById('popupS').style.display='block';	
					}
					function faccloseS(){
						document.getElementById('popupS').style.display='none';
					}

				</script>

			</ul>
			</div>