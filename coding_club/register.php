<!-- HTML Form -->
<?php include "templates/header.php"; ?>

<form action="register_fn.php" method="post" name="user_details" id="user_form" autocomplete="off">
  <div class="container">
    <h2>Register User</h2>
    <hr>
    <!-- <input type="hidden" name="login_id" required value='<?php echo $_GET["login_id"];?>'/> -->
    <label for="firstname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>
    <label for="mobilenumber"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobilenumber" required>
    <label for="age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="age" required>
    <label for="batch"><b>Batch</b></label>
    <input type="text" placeholder="Batch(Eg:2016-2020)" name="batch" required>
    <label for="degree"><b>Degree</b></label>
    <input type="text" placeholder="Enter Degree" name="degree" required>
    
    <label for="collegename"><b>College Name</b></label>
    <input type="text" placeholder="Enter College Name" name="collegename" required>
    <label for="Registernumber"><b>Register Number</b></label>
    <input type="text" placeholder="Register number" name="register" required>
    <label for="companyname"><b>Company Name</b></label>
    <input type="text" placeholder="Company Name" name="companyname" required>
    <label for="designation"><b>Designation</b></label>
    <input type="text" placeholder="Designation" name="designation" required>
    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Location(Working place)" name="location" required>
    <label for="email"><b>Email</b></label>
	<input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="pass" id="password" required>
    <button type="submit" class="registerbtn" name="submit" value="submit">Login</button>
  </div>
</form>

<?php include "templates/footer.php"; ?>
