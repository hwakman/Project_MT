<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 14:39 น.
 */
session_start();
$username = $_POST['Textuser'];
$password = $_POST['Textpass'];
//echo $username."<br>".$password;

if (($username=="tor") && ($password=="1234")){
    header("Location: main_index.php");
}
else
    echo "false";