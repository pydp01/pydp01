<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload</title>
<link rel="icon" type="image/x-icon" href="img\logo.png">
<style>
body{
    background-color: rgb(220, 189, 252);
}
.n1{
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    color: blueviolet;
}
nav ul{
    text-align: center;
    margin-left: 530px;
}
nav ul li{
    font-size: 20px;
    font-family: 'Courier New', Courier, monospace;
    margin-left: 30px;
    display: inline;
    font-weight: bolder;
}
nav ul li a{
    color: black;
    text-decoration: none;
}
nav ul li a:hover{
    color: blueviolet;
}
h2{
    text-align: center;    
    color: blueviolet;
}
form{
    text-align: center;
    margin-top: 50px;
}
form input{
    text-align: center;
    margin-left: 100px;
    color: blueviolet;
}
button{
    padding: 4px;
    color: white;
    background: blueviolet;
}
</style>
</head>
<body>
    <?php
        include "head.php";
    ?>
    <h1 class="n1">Your Moments </h1>
    <br>
    <nav class="n1">
		<ul type="none">
			<li><a href="socialmedia.php"><ion-icon name="home"></ion-icon></a></li>
			<li><a href="forplus.php"><ion-icon name="add-circle"></ion-icon></a></li>
		</ul>
	</nav>
    <br>
    <br>
	
<h2>Upload Photo</h2>
<form action="forplus.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" accept="image/*" required>
    <br>
    <label for="comment">Comment:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
    <br><br>
    <button type="submit" name="submit">Upload</button>
</form>

</body>
</html>




<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $targetDir = "";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, Photo already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size (max 5MB)
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "Sorry, your Photo Size is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your Photo was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            echo "The Photo ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";

            // Insert photo information into database
            $photoName = $_FILES["photo"]["name"];
            $photoPath = $targetFile;
            $comment = $_POST["comment"];
            $sql = "INSERT INTO photos (name, path, comment) VALUES ('$photoName', '$photoPath','$comment')";      
            if ($conn->query($sql) == TRUE) {
                echo "You can check your photo.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an problem uploading your photo.";
        }
    }
}

// Close connection
$conn->close();
?>

