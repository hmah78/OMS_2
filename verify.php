<?php
 include_once 'config.php';
$uID =(isset($_GET['ID']) ? $_GET['ID'] : '');

$upass =(isset($_GET['Password']) ? $_GET['Password'] : '');
$uname = "";

if($conn){
    $sql = "SELECT `employee_id`, `First_name` FROM `employee` WHERE `Email` ='$uID' AND `Password`='$upass'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    $uname = $row["First_name"];
    if (mysqli_num_rows($result)==0)
    {
        echo "Wrong Username and Password";
    }
    else
    {
        session_start();
        $_SESSION["uname"]=$uname;
        header("Location: http://localhost/OMS/adminDashboard.php", true, 301);
        exit();
    }
}
else
{
    echo 'Error in connection';
}




?>