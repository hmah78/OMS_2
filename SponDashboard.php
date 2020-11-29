<?php
    include 'config.php';
    $accountId = @$_GET['accountId'];
    $cnic = '';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sponsor Dashboard - OMS</title>
	<!-- <link rel = "stylesheet" type="text/css" href ="styling/style.css"> -->
</head>
<body>
    <table width="1000" border="5" align="center">
        <caption> My Sponsor Applications - Submitted</caption>
        <tr>
            <th>Application ID</th>
            <th>Email</th>
            <th>CNIC</th>
            <th>Contact</th>
            <th>Income</th>
            <th>Address</th>
            <th>Pref Student ID</th>
            <th>Status</th>
        </tr>
        <?php
            if($conn)
            {
                $sqlQuery = "SELECT * FROM `sponsor` WHERE `id` = '$accountId'";
                $execute = $conn->query($sqlQuery);
                if($execute)
                {
                    $data = mysqli_fetch_array($execute);
                    $cnic = $data['cnic'];
                    $sqlQuery2 = "SELECT * FROM `sponsor_application` WHERE `cnic` = '$cnic'";  
                    $execute2 = $conn->query($sqlQuery2);
                    while($dataRow = mysqli_fetch_array($execute2)){
                        $appId = $dataRow['sponAppID'];
                        $email = $dataRow['email'];
                        $cnic = $dataRow['cnic'];
                        $contact = $dataRow['contact'];
                        $income = $dataRow['income'];
                        $address = $dataRow['address'];
                        $prefStId = $dataRow['prefStID'];
                        $status = $dataRow['status'];
                        echo "<tr>";
                            echo "<td>$appId</td>";
                            echo "<td>$email</td>";
                            echo "<td>$cnic</td>";
                            echo "<td>$contact</td>";
                            echo "<td>$income</td>";
                            echo "<td>$address</td>";
                            echo "<td>$prefStId</td>";
                            echo "<td>$status</td>";
                        echo "</tr>";
                    }
                }
            }
        ?>
    </table>
</body>
</html>