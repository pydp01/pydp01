<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
	<link rel="icon" type="image/x-icon" href="img\logo.png">
        <link rel="stylesheet" type="text/css" href="css/login.css">
	    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<link rel="icon" type="image/x-icon" href="img\logo.png">
    </head>
<body id="bg">
<div class="form">
    <div>
        <h1>
                 Login Here 
        </h1>
    </div>
    <div>
    <form action="login.php" method="POST">
            User Id <br>
            <input type="text" id="i1" name="user" required>
            <br>
            Password 
            <br><input type="password" id="i2" name="pass" required>
            <br>
            <button class="bts" name="login">Login</button>
            <button class="bts" name="cancel">Cancel</button>
    </form>
        <br>
        <p id="lg">
          OR
        </p> 
    <div>
        <a href="signin.php" id="signin">   Sign In  </a>	
		<p class="lg">Login With</p>				
		<div class="icons">
			<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
			<a href="https://www.instagram.com/accounts/login/"><ion-icon name="logo-instagram"></ion-icon></a>
			<a href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
			<a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon></a>
			<a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=151&ct=1715431987&rver=7.5.2156.0&wp=MBI_SSL&wreply=https%3A%2F%2Flw.skype.com%2Flogin%2Foauth%2Fproxy%3Fclient_id%3D360605%26redirect_uri%3Dhttps%253A%252F%252Fsecure.skype.com%252Fportal%252Flogin%253Freturn_url%253Dhttps%25253A%25252F%25252Fsecure.skype.com%25252Fportal%25252Foverview%26response_type%3Dpostgrant%26state%3D246d6e2bc22eeb42a278add7&lc=1033&id=293290&mkt=en-US&psi=skype&lw=1&cobrandid=2befc4b5-19e3-46e8-8347-77317a16a5a5&client_flight=ReservedFlight33%2CReservedFlight67"><ion-icon name="logo-skype"></ion-icon></a>
		</div>
    </div>
</div>
</html>



<?php     
	session_start(); 
    include('db.php'); 
	if(isset($_POST['login']))
{ 
    $email= $_POST['user'];  
    $password= $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM data WHERE UserID = '$email' AND Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
			$_SESSION['email9']=$email;
            $_SESSION['passwordf']=$password;
            echo "<script>alert('Login Successfull');</script>";  
			echo "<script>window.location.assign('socialmedia.php');</script>"; 
        }  
        else{  
            echo "<script>alert('Invalid Email or Password');</script>";   
        }
}     
?>  