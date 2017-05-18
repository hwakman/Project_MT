<?php
session_start();
$conn = new mysqli("localhost","root","tor14299","projectMt");

$_SESSION['ADD_USER_MESSAGE'] = '';

$id = $_REQUEST['user_id'];
$password = $_REQUEST['user_password'];
$name = $_REQUEST['name'];
$passwordconf = $_REQUEST['user_passwordconf'];
$date_format = explode('-',$_REQUEST['user_birthday']);
$date_format2 = explode('-',$_REQUEST['user_entering']);
$b_day = $date_format[0].'-'.$date_format[1].'-'.$date_format[2];
$enter_day = $date_format2[0].'-'.$date_format2[1].'-'.$date_format2[2];

$sql = "INSERT INTO USERDETAIL VALUES ('','$id','$password','$name','$b_day','v003','$enter_day','','')";
//$sql_check = "SELECT * FROM USERDETAIL";
//$check = $conn->query($sql_check);
//while ($row = $check->fetch_assoc()){
//    echo $row['id'].' '.'+'.$id.' ';
//    if ($row['id']==$id){
//        header('Location: add_user.php');
//        echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">user duplicate !</div>'.$sql;
//        break;
//    }
//}
if ($id!=''&&$password!=''&&$passwordconf!='')
{
    if ($password==$passwordconf){
        if ($b_day!='0000-00-00'){
            if ($enter_day!='0000-00-00'){
                if (mysqli_query($conn,$sql)){
                    $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: green">Created new user</div>'.'"'.strtoupper($id).'"';
                    header('Location: add_user.php');
                }
                else{
                    header('Location: add_user.php');
                    echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">User not allow to duplicate !</div>';
                }
            }
            else{
                header('Location: add_user.php');
                echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">Do not have Entry date !</div>';
            }
        }
        else{
            header('Location: add_user.php');
            echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">Do not have Birthday date !</div>';
        }
    }
    else{
        header('Location: add_user.php');
        echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">Password not match !</div>';
    }
}
else{
    header('Location: add_user.php');
    echo $_SESSION['ADD_USER_MESSAGE'] = '<div style="color: red">Can\'t accept empty value !</div>';
}
