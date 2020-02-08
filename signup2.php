<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="container-login100 back1"> 
 
			<div class="form">

				<form class="login100-form validate-form" action="backend/signupBack1.php" method="POST">
					
				<select name="statesSignup"  id="ddlState" style="width:130px;">
						<option selected="selected" value="0">--Select--</option>
						<option value="AN">Andaman and Nicobar</option>
						<option value="AP">Andhra Pradesh</option>
						<option value="AR">Arunachal Pradesh</option>
						<option value="AS">Assam</option>
						<option value="BI">Bihar</option>
						<option value="CH">Chandigarh</option>
						<option value="CG">Chattisgarh</option>
						<option value="DN">Dadra and Nagar Haveli</option>
						<option value="DD">Daman and Diu</option>
						<option value="GO">Goa</option>
						<option value="GJ">Gujarat</option>
						<option value="HR">Haryana</option>
						<option value="HP">Himachal Pradesh</option>
						<option value="JK">Jammu and Kashmir</option>
						<option value="JR">Jharkhand</option>
						<option value="KK">Karnataka</option>
						<option value="KL">Kerala</option>
						<option value="LD">Lakshadweep</option>
						<option value="MP">Madhya Pradesh</option>
						<option value="MH">Maharashtra</option>
						<option value="MN">Manipur</option>
						<option value="MG">Meghalaya</option>
						<option value="MZ">Mizoram</option>
						<option value="NG">Nagaland</option>
						<option value="DL">NCT of Delhi</option>
						<option value="OR">Odisha</option>
						<option value="PC">Pondicherry</option>
						<option value="PB">Punjab</option>
						<option value="RJ">Rajasthan</option>
						<option value="SK">Sikkim</option>
						<option value="TN">Tamil Nadu</option>
						<option value="TL">Telangana</option>
						<option value="TR">Tripura</option>
						<option value="UP">Uttar Pradesh</option>
						<option value="UC">Uttrakhand</option>
						<option value="WB">West Bengal</option>
					</select>

					<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter phone number">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="password">
						<input class="input100" type="number" name="adhar">
						<span class="focus-input100" data-placeholder="Aadhar Number"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							Next
						</button>
					</div>
				</form>
			</div>
		</div>
		</div>
</body>
</html>