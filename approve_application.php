<!-- <!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="styling/createEvent-style.css"> 
</head>
<body>
	<header>

		<div class="lefttop">
			<img src="styling/icons/oms-white.png" class="omsimg">
		</div>
		<div class="rightop">
			<a href="#" class="logoutoption">
				Logout
			</a>
		</div>
	</header>

	<div class="menu">
		
		<a href="addStudent.html"><img src="styling/icons/045-monitor.png" class="menuicons">Add Student</a>
		<a href="#"><img src="styling/icons/approve.png" class="menuicons"><span>Approve Applications</span></a>
		<a href="createEvent.html"><img src="styling/icons/036-calendar.png" class="menuicons"><span>Add Event</span></a>
	</div> -->


	<!-- <div class = "eventform">
		<h1 class= "formtitle">Event Details</h1>
		<form action = "createEvent.php" method="POST">

			<div class="eventdetails">
				<label><strong>Title</strong></label>
				<input type="text" name="title" placeholder="Annual Children's Day Party">

				<label><strong>Date of Event</strong></label>
				<input type="date" name="doe" placeholder="mm-dd-yyyy">

				<label><strong>Capacity</strong></label>
				<input type="int" name="capacity" placeholder="80"> 

				<label><strong>Event Budget</strong></label>
				<input type="int" name="eventbudget" placeholder="150,000">

				<label><strong>Location</strong></label>
				<input type="text" name="location" placeholder="Islamabad, Pakistan">

			</div >
				<input type="submit" name="" value="Create">
			</div>
		</form>
	</div> -->
	
	<!-- <div>
		


	</div>
	<div> -->
		<?php
		include_once 'config.php';
		$temp = 'Pending';
		if($conn){
    $sql = "SELECT * FROM `sponsor_application` WHERE `status`='$temp'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==0)
    {
        echo "No Pending Application";
    }
    else
    {
        while($row = $result->fetch_assoc()) {
    	echo "First Name: ". " " . $row["firstname"] . " "." Last Name: " . $row["lastname"]. " " . $row["lastname"]. " ". "Email". " " .$row['email'] . " "."CNIC:". " " .$row["cnic"]. " " ."Contact:". " " .$row['contact'] . " "."Pref Student ID: ". " " .$row['prefStID']. " " ."Application Status:" . " "  .$row['status']  ."<br>";
  }
    }
}
	else
	{
    	echo 'Error in connection';
	}
	
?>
	<!-- </div>
</body>
</html> -->