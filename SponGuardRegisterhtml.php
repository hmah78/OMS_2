<?php
	include 'config.php';
	$successMessage = "";
	$error = False;
    $fNameError = "";
    $sNameError = "";
    $emailError = "";
    $cnicError = "";
    $contactError = "";
    $incomeError = "";
	$prefStError = "";
	$firstname = "";
	$lastName = "";
	$email = "";
	$cnic = "";
	$contact = "";
	$income = "";
	$address = "";
	$pref_st = "";
    if(isset($_POST['Register'])){
        if(empty($_POST['firstName'])){
			$fNameError = 'First Name is required';
			$error = True;
        }
        else{
			if(!preg_match("/^[A-Za-z\. ]*$/",$_POST['firstName'])){
				$fNameError="Only Letters and white space are allowed";
				$error = True;
			}
			else{
				$firstname = $_POST['firstName'];
			}
        }
        if(empty($_POST['lastName'])){
			$sNameError = 'Second Name is required';
			$error = True;
        }
        else{
			if(!preg_match("/^[A-Za-z\. ]*$/",$_POST['lastName'])){
				$sNameError="Only Letters and white sapace are allowed";
				$error = True;
			}
			else{
				$lastName = $_POST['lastName'];
			}
        }
        if(empty($_POST['email'])){
			$emailError = 'Email is required';
			$error = True;
        }
        else{
			if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$_POST['email']))
			{
				$emailError="Invalid Email Format";
				$error = True;
			}
			else{
				$email = $_POST['email'];
			}
        }
        if(empty($_POST['CNIC'])){
			$cnicError = "Please provide CNIC";
			$error = True;
        }
        else{
			if(!preg_match("/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/",$_POST['CNIC']))
			{
				$cnicError="Invalid CNIC Format";
				$error = True;
			}
			else{
	            $cnic = $_POST['CNIC'];
			}
		}
        if(empty($_POST['Contact'])){
			$contactError = "Please provide Contact";
			$error = True;
        }
        else{
			if(!preg_match("/^[0-9]{4} [0-9]{7}$/",$_POST['Contact']))
			{
				$contactError="Invalid Contact Format";
				$error = True;
			}
			else{
				$contact = $_POST['Contact'];
			}
        }
        if(empty($_POST['Income'])){
			$incomeError = "Income is required";
			$error = True;
        }
        else{
			if(!preg_match("/^[0-9]{1,}$/",$_POST['Income']))
			{
				$incomeError="Enter correct Income";
				$error = True;
			}
			else{
				$income = $_POST['Income'];
			}
        }
        $address = $_POST['Address'];
        if(empty($_POST['PSID'])){
            $prefStError = "Please provide pref st ID to Sponsor/Adopt";
			$error = True;
		}
        else{
			if($_POST['PSID'] < 0){
				$prefStError = 'Enter Valid ID (>0)';
				$error = True;
			}
			else{
				$pref_st = $_POST['PSID'];
			}
        }
		$typeApp = $_POST['type'];
		if($error == False){
			if($conn){
				if($typeApp == 'sponsor'){
					$sql = "INSERT INTO `sponsor_application` (`firstname`,  `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `prefStID`) VALUES('$firstname',  '$lastName', '$email', '$cnic', '$contact', '$income', '$address', '$pref_st')";
				}
				if($typeApp == 'guardian'){
					$sql = "INSERT INTO `guardian_application` (`firstname`,  `lastname`, `email`, `cnic`, `contact`, `income`, `address`, `prefStID`) VALUES('$firstname',  '$lastName', '$email', '$cnic', '$contact', '$income', '$address', '$pref_st')";
				}
				if($conn->query($sql)){
					$successMessage = 'Application Submitted Successfully';
				}
				else{
					echo $conn->error;
				}
			}
			//mysqli_close($conn);
		}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - OMS</title>
	<link rel = "stylesheet" type="text/css" href ="styling/sponsorGuardianRegistration-style.css">
</head>
<body>
	
	<!--Form-->
	<div class = "loginarea">
		<img src="styling/images/avicon.jpg" class="icon">
		<h1 class="logintext">Application</h1>

		<form action = "SponGuardRegisterhtml.php" method="POST">

			<div class="userdata">
				<label><strong>First Name</strong></label>
				<input type="text" name="firstName" placeholder="John"><br>
				<?php echo $fNameError; ?><br>

				<label><strong>Last Name</strong></label>
				<input type="text" name="lastName" placeholder="Doe"><br>
				<?php echo $sNameError; ?><br>

				<label><strong>Email</strong></label>
				<input type="email" name="email" placeholder="johndoe@email.com"><br>
				<?php echo $emailError; ?><br>

				<label><strong>CNIC</strong></label>
				<input type="text" name="CNIC" placeholder="XXXXX-XXXXXX-X"><br>
				<?php echo $cnicError; ?><br>

				<label><strong>Contact</strong></label>
				<input type="text" name="Contact" placeholder="+92 3XX XXXXXXX"><br>
				<?php echo $contactError; ?><br>

				<label><strong>Monthly Income</strong></label>
				<input type="number" name="Income" placeholder="40000"><br>
				<?php echo $incomeError; ?><br>

				<label><strong>Address</strong></label>
				<input type="text" name="Address" placeholder="House No. 422, Apartment 32, ZOF Housing, Lahore, Punjab, Pakistan">

				<label><strong>Prefered Student ID</strong></label>
				<input type="number" name="PSID" placeholder="122-321"><br>
				<?php echo $prefStError; ?><br><br>

			</div>
			<div class="rad">
				<input type="radio" name="type" checked value="sponsor"> Sponsorship
				<input type="radio" name="type" value="guardian"> Adoption
			</div>

				<input type="submit" name="Register" value="Register"><br>
				<?php echo $successMessage; ?>
			<div class="registerlink">
				<p ID="already">Already have an account?</p>
				<a href="index.html">Login Here</a>
			</div>
		</form>
	</div>
	

	<div style = "margin-top: 500px"></div> 
</body>
</html>