<DOCTYPE html>
<?php include('insert.php') ?>
<html>

<head>
		<link rel="stylesheet" href="styles.css">
		<meta charset="UTF-8">
		<title> Sign up </title>
	</head>

  <style>
		body{
			background-image: url("merco1.jpg");
			}
		</style>

  <div class="container">

    <h1><p style="color:white">
    <font face="Calibri">Mercantile Corporation : Sign Up     <img src="2.png" alt="VPN" width="40" length="40"></font>
    </h1>
<body text="white">
    <div class="topnav">
			<a href="index.html">Home</a>
			<a class="active" href="form.html">Register</a>
			<a href="contact.php">Contact</a>
      <a href="about.php">About</a>
      <a href="Transactions.php">Transactions</a>
		  </div>


      <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
      <div class="dropdown">
  <span><p style="color:white">• Some reminders before you Register.</span>
  <div class="dropdown-content">
    <p><p style="color:black">✓ Make sure that you type in a Unique Account Name.<br>
                              ✓ Type atleast 6-8 characters for your password.<br>
                              ✓ Read the Terms and conditions before you Register.<br>
                              ✓ Lany Flores and Company will not be reliable for any information lost.<br></p>
  </div>
</div>

    <p><p style="color:white">Please fill in this form to create an account.
    <hr>

    <form action="insert.php" method="post">
    <?php echo display_error(); ?>

    <label for="user"><b><p style="color:white">First Name</b></label>
    <input type="text" placeholder="Enter First Name" input type="text" name="fname">

    <label for="user"><b><p style="color:white">Middle Name</b></label>
    <input type="text" placeholder="Enter Middle Name" input type="text" name="mname">

    <label for="user"><b><p style="color:white">Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" input type="text" name="lname">

    <label for="user"><b><p style="color:white">Account Name</b></label>
    <input type="text" placeholder="Enter Account Name" input type="text" name="user" required class="account">

    <label for="email"><b><p style="color:white">Email</b></label>
    <input type="text" placeholder="Enter Email" input type="text" name="email" required>
    
    <label for="psw"><b><p style="color:white">Password</b></label>
    <input type="password" placeholder="Enter Password" input type="text" name="psw" required>

    <label for="psw-repeat"><b><p style="color:white">Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" input type="text" name="psw-repeat" required>

    <label class="genderlabel">Gender:</label>
            <div class="container_gender">
            <input type='radio' id='male' value="Male" checked='checked' name='user_gender' if (isset($gender) && $gender="Male") echo "checked";? value="Male">
            <label for='male'>Male</label>
            <input type='radio' id='female' value="Female" name='user_gender' if (isset($gender) && $gender="Female") echo "checked";? value="Female">
            <label for='female'>Female</label>

    <label for="bday"><b><p style="color:white">Birthday</b></label>
    <input type="date" class="birthday" input type="date" name="birthday" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Remember me</label>

    <p><p style="color:white">By creating an account you agree to our <a href="termsnconditions.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">

    <button type="submit" class="signupbtn">Sign Up</button>
    </p>
    </div>
  </div>
</form>
</body>
<html>