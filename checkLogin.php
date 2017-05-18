<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 14:39 น.
 */
session_start();
$_SESSION['BACK_INDEX'] = header('Location: index.php');
$_SESSION['ERROR_LOGIN'] = '';

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
$sql = "SELECT * FROM USERDETAIL";
$result = $conn->query($sql);
//echo $row['p_key'].$row['id'].$row['password'];
$username = $_POST['Textuser'];
$password = $_POST['Textpass'];
$find_use = false;
$back = $_SESSION['BACK_INDEX'];
$unupper = strtoupper($username);
if ($username!=''){
    if($password!=''){
        while ($row = $result->fetch_assoc()){
            if ($row['id']==$username){
                $find_use=true;
                $this_pass = $row['password'];
                break;
            }
        }
        if ($find_use){
            if($password==$this_pass)
                echo header('Location: main_index.php');
            else{
                $_SESSION['ERROR_LOGIN'] = '* Wrong password !!';
                echo $back;
            }
        }
        else{
            $_SESSION['ERROR_LOGIN'] = "* No username '".$unupper."'";
            echo $back;
        }
    }
    else{
        $_SESSION['ERROR_LOGIN'] = '* Password is empty !';
        echo $back;
    }
}
else{
    $_SESSION['ERROR_LOGIN'] = '* Username is empty !';
    echo $back;
}
$_SESSION['THIS_ID'] = $row['id'];
$_SESSION['THIS_TYPE'] = $row['type'];
$_SESSION['THIS_NAME'] = $row['name'];
$_SESSION['THIS_BIRTHDAY'] = $row['b_day'];
if ($_SESSION['THIS_BIRTHDAY']=='0000-00-00'){
    $_SESSION['THIS_BIRTHDAY'] = '<a style="color: red">NO DATA</a>';
}
$_SESSION['THIS_ENTER'] = $row['entering'];
if ($_SESSION['THIS_ENTER']=='0000-00-00'){
    $_SESSION['THIS_ENTER'] = '<a style="color: red">NO DATA</a>';
}
$_SESSION['THIS_PASSWORD'] = $row['password'];
$_SESSION['THIS_CHECK'] = $row['check_date'];
