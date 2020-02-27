<!DOCTYPE html>
<?php include('functions.php') ?>
<html>

<head>
    <link rel="stylesheet" href="register.css">
	<meta charset="UTF-8">
	<title>Merco Register</title>
</head>

<div class="container">

    <h1><p style="color:white">
    <font face="Calibri">Mercantile Corporation : Sign Up     <img src="2.png" alt="VPN" width="40" length="40"></font>
    </h1>
    
    <div class="topnav">
		<a href="index.html">Home</a>
		<a class="active" href="form.html">Register</a>
		<a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="Transactions.php">Transactions</a>
        </div>
          
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="Enter Email Address" value="<?php echo $email; ?>"required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" placeholder="Enter Password" value="<?php echo $password_1; ?>" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" placeholder="Repeat Password" value="<?php echo $password_2; ?>" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>