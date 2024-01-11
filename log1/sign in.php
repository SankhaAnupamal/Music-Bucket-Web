<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="newbd">
	<div class="bgnewimg">
		<div>
     <form action="login.php" method="post">
     	<h2>LOGIN FORM</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

		 <div class="login"><h2>Or login with</h2></div>
        <div class="links">
          <div class="facebook"><a href="https://www.facebook.com/login"> <i class="fab fa-facebook-f">
			<span>Facebook</span></i></a>

          </div>
          <div class="instagram"><a href="https://www.instagram.com"><i class="fab fa-instagram">
			<span>Instagram</span></i></a>
            
          </div>
        </div>
		<br>

     	<button class="submit" type="submit">Login</button>
          Don't have account?<a href="signup.php" class="ca">Signup Now</a>
     </form>
	 </div>
	 </div>
</body>
</html>