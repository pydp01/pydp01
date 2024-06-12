<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conn";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch photos from database
$sql = "SELECT * FROM photos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Moments</title>
<style>
    .gallery {
        display: border-box;
        align: center;
    }
    .gallery img {
    height: 350px;
    width: 300px;
    padding: 5px;
    background-color: white;
    border-radius: 5px;
    }
    #tl{
        color: white;
    }
</style>
</head>
<body>

<h2 id="tl">Your Moments</h2>

<div class="gallery">
    <?php
    // Display photos
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div>';
            echo '<img src="' . $row["path"] . '" alt="' . $row["name"] . '">';
            echo "<p><strong>" . $row["comment"] . "</strong></p>";
            echo '</div>';
        }
    } else {
        echo "No photos found.";
    }
    ?>
</div>

</body>
</html>

<?php
// Close connection
$conn->close();
?>
