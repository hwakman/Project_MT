<?php
$servername = "localhost";
$username = "root";
$password = "tor14299";
$dbname = "projectMt";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
    echo "it's all right !!!";
echo "<br>";
$value = $_REQUEST['content'];
$sql = "INSERT INTO 'feed'(feed_content,p_key) VALUE ($value,'')";
$query = mysqli_query($conn,$sql) ;
if ($query)
    echo "record added";
else
    echo "no value";
mysqli_close($conn);