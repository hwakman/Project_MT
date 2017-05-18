<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 16:09 น.
 */
session_start();
if ($_REQUEST['profile'])
    header('Location: profile.php');
elseif ($_REQUEST['index'])
    header('Location: main_index.php');
elseif ($_REQUEST['checkin']){
    $user_id = $_SESSION['THIS_ID'];
    $conn = new mysqli("localhost","root","tor14299","projectMt");
    $sql = "UPDATE USERDETAIL SET check_date = check_date+1 WHERE id = '$user_id'";
    mysqli_query($conn,$sql);
    header('Location: main_index.php');
}
elseif ($_REQUEST['store'])
    header('Location: store.php');
elseif ($_REQUEST['logout'])
    header('Location: index.php');
elseif ($_REQUEST['add_user'])
    header('Location: add_user.php');
else
    echo "no value";