<DOCTYPE html>
<?php
session_start();
$_SESSION['balance'] = 1000.0;

    function deposit(){
        $_SESSION["deposit"] += $_POST["balance"];
    }
    function withdraw(){
        $_SESSION["withdraw"] -= $_POST["balance"];
    }
    
define("siteTitle", "ATM");
$_SESSION['site'] = siteTitle;
//define("siteIcon", "");
//$_SESSION['icon'] = siteIcon;

?>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<meta charset="UTF-8">
		<title> Free VPN </title>
	</head>

    <style>
		body{
			background-image: url("merco1.jpg");
			}
			</style>
<body>

<h1>
        <p style="color:white">
        <font face="Calibri">ATM Transactions     <img src="2.png" alt="VPN" width="40" length="40"></font>
        </p>
    </h1>

    <div class="topnav">
			<a href="index.html">Home</a>
			<a href="form.html">Register</a>
			<a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a class="active" href="Transactions.php">Transactions</a>
          </div>
          
          <p><p style="color:white">Kindly press any transaction you would like.</p>
    <hr>
    <p style="color:black">
            <p style="color:white">Your Balance is : $<?php echo $_SESSION['balance']; ?>
            </p>

    <label for="user"><b><p style="color:white">Deposit Amount</b></label>
    <input type="text" placeholder="Enter Amount to be Deposited" name="deposit" required class="deposit">

    <p style="color:white"><br>
    <button type="button" class="deposit" value="Deposit">Deposit</button>

    <label for="user"><b><p style="color:white">Withdraw Amount</b></label>
    <input type="text" placeholder="Enter Withdrawal Amount" name="withdraw" required class="withdraw">

    <p style="color:white"><br>
    <button type="button" class="withdraw" value="Withdraw">Withdraw</button>

    <a href="checkbalance.php" method="post">
    <button type="button" class="withdraw" >Check Balance</button>
    
    </body>

                </html>