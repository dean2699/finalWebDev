<DOCTYPE html>
<html>

<head>
		<link rel="stylesheet" href="css/styles.css">
		<meta charset="UTF-8">
		<title> Sign up </title>
	</head>

  <style>
		body{
			background-image: url("wow.gif");
			}
		</style>

  <div class="container">

    <h1><p style="color:white">
    <font face="Calibri">Mercantile Corporation : Sign Up     <img src="download.png" alt="VPN" width="40" length="40"></font>
    </h1>
<body text="white">
<?php

    $con = mysqli_connect ('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not Connected to Server.';
    }

    if(!mysqli_select_db($con, 'database_practice'))
    {
        echo 'Database not selected.';
    }
    $fName = $_POST['fname'];
    $mName = $_POST['mname'];
    $lName = $_POST['lname'];
    $Name = $_POST['user'];
    $Email = $_POST['email'];
    $Password = $_POST['psw'];
    $RPassword = $_POST['psw-repeat'];  
    $Gender = $_POST['user_gender'];
    $Birthday = $_POST['birthday'];

    $sql = "INSERT INTO register (fName, mName, lName, accountName, eMail, passWord, rpassWord, gender, birthDay) VALUES ('$fName', '$mName', '$lName', '$Name', '$Email', '$Password', '$RPassword', '$Gender', '$Birthday')";

    if(!mysqli_query($con, $sql))
    {
        echo 'Data not Inserted.';
    }
    else
    {
        echo 'Data Inserted.';
    }

    header("refresh:2; url=main.php");
?>
</form>
</body>