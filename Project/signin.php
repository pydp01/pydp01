<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, in-itial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img\logo.png">
        <title>
          Sign in
        </title>
        <link rel="stylesheet" type="text/css" href="css/sign.css">
	    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<link rel="icon" type="image/x-icon" href="img\logo.png">
    </head>
<body id="bg">
<form action="signin.php" method="POST">
<div class="form">
    <div>
        <h1>
                 Sign In
        </h1>
    </div>
    <div>
            First Name
            <input type="text" id="i1" name="first"required>
            <br>
            Last Name
            <input type="text" id="i2" name="last" required>
            <br>
            E-mail
            <input type="e-mail" id="i3" name="email" required>
            <br>
            D.O.B
            <input type="date" id="i4" name="dob" required>
            <br>
            User ID
            <input type="text" id="i7" name="userid" required>
            <br>
            Password
            <br>
            <input type="password" id="i5" name="pass" required>
            <br>
            Confirm Password
            <br>
            <input type="password" id="i6" name="cpass" required>
            <br>
            <button class="bts" name="sign">Signin</button>
            <button class="bts" name="cancel">Cancel</button>
        <br>
</div>
</div>
</form>
</body>
</html>





<?php

include "db.php";

if(isset($_POST['sign']))
{
    $FIRST=$_POST['first'];
    $LAST=$_POST['last'];
    $MAIL=$_POST['email'];
    $DATE=$_POST['dob'];
    $USER=$_POST['userid'];
    $PASS=$_POST['pass'];
    $CONFIRM=$_POST['cpass'];
    $errors=0;
    $password = $PASS;//encrypt the password before saving in the database
    $conpass= $CONFIRM;  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
     if ($PASS != $CONFIRM) 
     {
	    echo'<script>alert("The two passwords do not match")</script>';
      ++$errors;
     }


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "select * from data where UserID='$USER' OR Email='$MAIL' LIMIT 1";
  $res = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($res);
  switch ($user) {
  
    case '$user["UserID"]==$USER':
      echo'<script>alert("User already exists")</script>';
      ++$errors;
      break;
    
    case '$user["Email"]==$MAIL':
      echo'<script>alert("Email already exists")</script>';
      ++$errors;
      break;

  }
if ($errors == 0) 
  {
    
    $insertquery="insert into data(FirstName,LastName,Email,DOB,UserID,Password,ConfirmPassword) values('$FIRST','$LAST','$MAIL','$DATE','$USER','$password','$conpass')";
    $result=mysqli_query($conn,$insertquery);

    if($result)
    {
        echo'<script>alert("Data Inserted")</script>';
        echo "<script>window.location.assign('socialmedia.php');</script>"; 
    }
    else
    {
        echo'<script>alert("Data is not inserted becuase: '.mysqli_error($conn).'")</script>';
    }
}
}
?>