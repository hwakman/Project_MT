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
$value_t = $_REQUEST['topic'];
echo $value_t;
if ($value!=''&&$value_t!=''){
    $sql = "INSERT INTO feed(feed_content,topic) VALUE ('". $conn->real_escape_string($value) ."','". $conn->real_escape_string($value_t) ."')";
    $query = mysqli_query($conn,$sql) ;
    if ($query){
        echo "record added";
        header('Location: main_index.php');
    }
    else
        echo "no value";
}
else
    header('Location: main_index.php');



mysqli_close($conn);