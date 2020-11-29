<?php
include_once 'config.php';
$fname = $_POST['firstName'];
$sname = $_POST['lastName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$cnic = $_POST['CNIC'];
$place_birth = $_POST['pob'];

    if($conn){
$sql = "INSERT INTO `student` (`First_name`,`Last_name`,`DOB`,`Gender` , `Cnic`, `Place_birth`) VALUES ('$fname','$sname','$dob','$gender','$cnic','$place_birth')";
if($conn->query($sql)){
            echo "Addition Successful";
        }
        else{
            echo $conn->error;
        }
}
 mysqli_close($conn);
?>