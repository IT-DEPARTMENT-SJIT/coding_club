<?php include "templates/header.php"; ?>

<form method="post" action="login_fn.php">
	<div class="container">
		<h1>Coding Club Forum Login</h1>
		<hr>
		<label for="email"><b>Email</b></label>
	<input type="text" placeholder="Enter Email" name="email" id="email" required>
    	<label for="password"><b>Password</b></label>
    <input class="password" type="password" placeholder="Password" name="pass"  required>
    <button type="submit" class="registerbtn" name="submit" value="submit">Login</button>
  </div>
	<div class="container signin">
		<p> New User? <a href="register.php">Sign Up</a>.</p>
	</div>
</form>

<?php include "templates/footer.php"; ?>
