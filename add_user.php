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
    <style>
        button{
            background-color: #555555;
            color: white;
            border: 2px solid #555555;
        }
        button:hover{
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
<table class="table_head" style="width: 100%">
    <tr>
        <th>
            <img src="img/01.jpg" style="width: 100%;max-height: 300px" >
        </th>
    </tr>
</table>
<table class="table_left" style="background-color: #555555">
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
                <button name="store" value="store">USER LIST</button>
                <button name="logout" value="logout">LOGOUT</button>
            </form>
        </td>
    </tr>
    <tr></tr>

</table>
<table class="table_right_" style="background-color: #747474;color: white">
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
