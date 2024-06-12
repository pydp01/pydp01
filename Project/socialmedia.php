<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, in-itial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img\logo.png">
	<title>Proud Moments</title>
	<link rel="stylesheet" type="text/css" href="img/socialmedia.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
	<?php
		include "head.php";
	?>
		<h1 class="n1">Your Social Media </h1>
		<br>
	<nav class="n1">
		<ul type="none">
			<li><a href="socialmedia.php"><ion-icon name="home"></ion-icon></a></li>
			<li><a href="forplus.php"><ion-icon name="add-circle"></ion-icon></a></li>
			</ul>
	</nav>
	<br>
	<br>
	<main>
		<h2>Latest updates from the World</h2>
		<!-- display updates here -->
		<form id="update-form">
		<?php
			include "upload.php";
		?>	
	</form>
	</main>
	<script src="script.js"></script>
	<?php
		include "footer.php";
	?>
</body>
</html>




<?php

include "db.php";

if(isset($_POST['post']))
{
    $txt=$_POST['text'];
    $Img=$_POST['Image'];

    $insertquery="insert into social(comment,img) values('$txt','$Img')";

    $result=mysqli_query($conn,$insertquery);

    if($result)
    {
        echo'<script>alert("Data Inserted")</script>';
    }
    else
    {
        echo'<script>alert("Data is not inserted becuase: '.mysqli_error($conn).'")</script>';
    }
}

?>