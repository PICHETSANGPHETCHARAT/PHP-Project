<?php 
    session_start();
    $password   =   $_POST['password'];
    $confirmpassword    =   $_POST['confirmpassword'];
    $username   =   $_POST['username'];
    if(	$password !=  $confirmpassword){
        echo '<script>alert("password ไม่ตรงกัน")</script>';
        echo "<script>window.location = './index.html'</script>";
    }
    else{
        $_SESSION['username']    =   $_POST["username"];
        $_SESSION['password']    =   $_POST["password"];
		$_SESSION['confirmpassword']    =   $_POST["confirmpassword"];
        $_SESSION['fname']    =   $_POST["fname"];
        $_SESSION['lname']    =   $_POST["lname"];
        $_SESSION['tel']    = $_POST["tel"];
		$_SESSION['email']    = $_POST["email"];
        $_SESSION['date']    =   $_POST["date"];
        $_SESSION['radio']    =   $_POST["radio"];
		$_SESSION['study']    =   $_POST["study"];
		$_SESSION['address']    =   $_POST["address"];
    }
 	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Log IN</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="topnav">
        <a class="active" href="./index.html">Home</a>
        <div class="search-container">
          
            <input type="text" placeholder="Search.." name="search">
            
          
        </div>
      </div>
      <br>
      <br>
<br>
<br>
<br>
<br>
<br>
<br>
	<div class='container'>
	<div class="container" style="width: 55%">
	<center>
	<form method="post" action="data.php">
		<div class="form-group">
			<input type="text" name="login" placeholder="Login" required>
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="Password" required>
        </div>	
		<button method="post" action="login.php">เข้าสู่ระบบ</button>
	</form>
	<br>
	<?php echo "<b>Username ของคุณคือ </b>".$_SESSION["username"];?>
	<?php echo "<b>Password ของคุณคือ </b>".$_SESSION["password"];?>
	<center>
	</div>
	</div>
	
	
	
</body>
</html>
