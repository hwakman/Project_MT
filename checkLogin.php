<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 14:39 น.
 */
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
//else
//    echo "it's all right !!!";
$sql = "SELECT * FROM USERDETAIL WHERE p_key=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//echo $row['p_key'].$row['id'].$row['password'];

$username = $_POST['Textuser'];
$password = $_POST['Textpass'];

//echo $row['id']."<br>".$row['password']."<br>".$username."<br>".$password;
$id_check = $username==$row['id'];
$pass_check = $password==$row['password'];

if ($id_check){
    if ($pass_check){
        echo "hear you go !!";
    }
    else
        echo "missing password !!";
}
else
    echo "wrong id !!";