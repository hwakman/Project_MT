<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "tor14299";
$dbname = "projectMt";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
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
    <tr></tr>

</table>
<table class="table_right_">
    <tr style="height: 50px">
        <td>
            <div style="padding: 20px 20px 20px 20px">
                <form action="create_user.php" method="post">
                    Name :
                    <input type="text" name="name">
                    <br><br>
                    User ID :
                    <input type="text" name="user_id">
                    <p>___________________________________________________________________________________</p>
                    Password :
                    <input type="password" name="user_password">
                    <br><br>
                    Confirm password :
                    <input type="password" name="user_passwordconf">
                    <p>___________________________________________________________________________________</p>
                    Birth day :
                    <input type="date" name="user_birthday" >
                    <p>___________________________________________________________________________________</p>
                    Enter date :
                    <input type="date" name="user_entering" >
                    <p>___________________________________________________________________________________</p>
                    <input type="submit" name="Submit" value="add user">
                </form>
            </div>
        </td>
    </tr>
    <tr></tr>
</table>
<table class="table_footer"><tr><td><p><?php echo $_SESSION['ADD_USER_MESSAGE'];?></p></td></tr></table>
</body>
</html>
