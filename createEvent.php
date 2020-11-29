<?php
include_once 'config.php';
$title = $_POST['title'];
$doe = $_POST['doe'];
$cap = $_POST['capacity'];
$eventbudget = $_POST['eventbudget'];
$location = $_POST['location'];

if($conn){
$sql = "INSERT INTO `event` (`title`,`doe`,`capacity`,`event_budget` , `Location`) VALUES ('$title','$doe','$cap','$eventbudget','$location')";
if($conn->query($sql)){
            echo "Addition Successful";
        }
        else{
            echo $conn->error;
        }
}
 mysqli_close($conn);
?>