<?php

require('config.php');
session_start();

if (isset($_POST['register'])) {
	$user_exist_query = "SELECT * FROM `cust_tbl` WHERE `email`='$_POST[email]' OR `phoneno`='$_POST[phoneno]'";
	$result = mysqli_query($conn, $user_exist_query);

	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			$result_fetch = mysqli_fetch_assoc($result);
			if ($result_fetch['email'] == $_POST['email']) {
				$error[] = 'Email already register';
			} else {
				$error[] = 'Number already register';
			}
		} else {
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$query = "INSERT INTO `cust_tbl`(`cust_name`, `address`, `country`, `state`,`city`, `phoneno`, `email`, `pincode`, `password`) VALUES('$_POST[name]','$_POST[address]','$_POST[country]','$_POST[state]','$_POST[city]','$_POST[phoneno]','$_POST[email]','$_POST[pincode]','$password')";
			if (mysqli_query($conn, $query)) {
				echo "
                <script>
                    alert('registration successfull');
                    window.location.href='login.php';
                </script>
                ";
			} else {
				echo "
                <script>
                    alert('can not return query');
                    window.location.href='regi.php';
                </script>
                ";
			}
		}
	} else {
		echo "
            <script>
                alert('can not return query');
                window.location.href='regi.php';
            </script>
        ";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<style>
		.div .address_country{
			width: 100%;
			padding: 10px;
			padding-left: 23px;
			margin-top: 2px;
			margin-left: 0px;
			border-left:  0px ;
			border-right: 0px;
			border-top: 0px solid #d9d9d9;
			border-bottom: 2px solid #d9d9d9;
			color: #212529;
			
		}
		.div select option{
			color: #212529;
			font-weight: bold;
			
		}
		

	</style>
	<img class="wave" src="images/Picture1.png">
	<div class="container">
		<div class="img">
			<img src="images/messages.svg">
		</div>
		<div class="login-content row">
			<form action="regi.php" method="POST">
				<?php
				if (isset($error)) {
					foreach ($error as $error) {
						echo '<span class="error-msg">' . $error . '</span>';
					};
				};
				?>
				<h2 class="title">Registered Now</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Full Name</h5>
						<input type="text" class="input" name="name" required>
					</div>
				</div>
				<div class="input-div">
					<div class="i">
						<i class="fas fa-location-arrow"></i>
					</div>
					<div class="div">
						<h5>Address</h5>
						<input type="text" class="input" name="address" required>
					</div>
				</div>
				<!-- <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-map-marker"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>City</h5>
                        <input type="text" class="input" name="city" required>
           		   </div>
           		</div>
                <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-globe"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>State</h5>
                        <input type="text" class="input" name="state" required>
           		   </div>
           		</div> -->
				<div class="div">
				
				
					<select name="country" class="countries form-control address_country" id="countryId">
						<option value="" >Select Country</option>
					</select>

				</div>
				<div class="div">
					
					<select name="state" class="states form-control address_country" id="stateId">
						<option value="">Select State</option>
					</select>
				</div>
				<div class="div">
						
					<select name="city" class="cities form-control address_country" id="cityId">
						<option value="">Select City</option>
						</div>
						
					</select>
					<div class="input-div one">
						<div class="i" style="padding-top:20px;">
							<i class="fas fa-phone"></i>
						</div>
						<div class="div" style="padding-top: 30px;" >
							<h5 style="padding-top: 20px;">Phoneno</h5>
							<input type="text" class="input mob" name="phoneno" required="required" pattern="[0-9]{10}" title="please enter numbers 10 for phoneno">
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="div">
							<h5>Email</h5>
							<input type="email" class="input" name="email" required>
						</div>
					</div>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-map-pin"></i>
						</div>
						<div class="div">
							<h5>Pincode</h5>
							<input type="text" class="input" name="pincode" required="required" pattern="[0-9]{6}" title="please enter 6 numbers for pincode">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i">
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input" name="password" required="required" pattern="[a-zA-Z0-9]{8,12}" title="enter characters or numbers between 8 to 12 for password">
						</div>
					</div>
					<input type="submit" name="register" class="btn" value="Registartion">
					<p>Already have an account?</p> <a href="login.php">Login</a>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="//geodata.solutions/includes/countrystatecity.js"></script>
</script>
</body>
</html>