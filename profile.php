<?php
session_start();
$conn = new mysqli('localhost','root','tor14299','projectMt');
?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
</head>
<body>
    <table class="table_head"><tr></tr></table>
    <table class="table_left">
        <!--    profile_page-->
        <tr>
            <td height="50">
                <form action="checkpath.php" method="post">
                    <button name="index" value="index" >INDEX</button>
                    <?php
                    if($_SESSION['THIS_ID']=='master')
                    {
                        echo "<button name='add_user' value='add_user'>ADD USER</button>";
                    }
                    ?>
                    <button name="checkin" value="checkin">CHECK IN</button>
                    <button name="store" value="store">STORE</button>
                    <button name="logout" value="logout">LOGOUT</button>
                </form>
            </td>
        </tr>
        <tr ></tr>

    </table>
    <table class="table_right_">
        <tr style="height: 50px">
            <td style="padding: 20px 20px 20px 20px" >
                <?php
                $type = '';
                switch ($_SESSION['THIS_TYPE']){
                    case 'v001':
                        $type = 'SYSTEM MANAGER';
                        break;
                    case 'v002':
                        $type = 'SYSTEM ASSISTANT';
                        break;
                    case 'v003':
                        $type ='USER';
                        break;
                    default:
                        break;
                }
                echo "USER : "."<b>'".strtoupper($_SESSION['THIS_ID'])."'</b>"
//                    ."<br><br>"."NAME : ".strtoupper($_SESSION['THIS_NAME'])
                    ."<br><br>"."TYPE : ".$type
                    ."<br><br>"."BIRTHDAY : ".$_SESSION['THIS_BIRTHDAY']
                    ."<br><br>"."ENTER DATE : ".$_SESSION['THIS_ENTER'];
                ?>
                <p>_____________________________________________________</p>
                <div>
                    <form action="profile.php" method="post">
                        <p>Password</p>
                        <input type="password" name="c_password">
                        <p>New Password</p>
                        <input type="password" name="n_password">
                        <p>Confirm Password</p>
                        <input type="password" name="conf_pass">
                        <br><br>
                        <input type="submit" name="submit" value="Change Password">
                    </form>
                </div>
            </td>
        </tr>
        <tr></tr>
    </table>
    <table class="table_footer"><tr><td><p><?php echo $_SESSION['CHANGE_PASS_MESSAGE'];?></p></td></tr></table>
</body>
</html>
<?php
$password = $_REQUEST['c_password'];
$n_password = $_REQUEST['n_password'];
$conf_pass = $_REQUEST['conf_pass'];
$check_pass = $_SESSION['THIS_PASSWORD'];
$_SESSION['CHANGE_PASS_MESSAGE'] = '';
    if($password!=''&&$n_password!=''&&$conf_pass!='')
    {

        if($check_pass==$password){
            if ($n_password==$conf_pass){
                $sql = "UPDATE USERDETAIL SET password='$n_password' WHERE password='$check_pass'";
                mysqli_query($conn,$sql);
                header('Location: index.php');
                echo $_SESSION['ERROR_LOGIN'] = '<div style="color: green">* Password had Changed !</div>';
            }
            else{
                header('Location: profile.php');
                echo $_SESSION['CHANGE_PASS_MESSAGE'] = '<div style="color: red">"Password" and "Confirm Password" not match !</div>';
            }
        }
        else{
            header('Location: profile.php');
            echo $_SESSION['CHANGE_PASS_MESSAGE'] = '<div style="color: red">Password incorrect !!</div>';
        }
    }


?>