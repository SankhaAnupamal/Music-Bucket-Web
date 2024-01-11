<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <button class="contbtn"><a class="logouta" href="index.php">Continue</a></button>
</body>
</html>

<?php 
}else{
     header("Location: sign in.php");
     exit();
}
 ?>