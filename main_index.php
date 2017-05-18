<?php
session_start();
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
$sql = "SELECT feed_content,topic FROM feed ORDER BY p_key DESC ";
$query = mysqli_query($conn,$sql);
//echo $_SESSION['THIS_ID'];
?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
</head>
<body style="background-color: #cbf3ff">
<table class="table_head" style="width: 100%">
    <tr>
        <th>
            <img src="img/01.jpg" style="width: 100%;max-height: 300px" >
        </th>
    </tr>
</table>
<!--menu-->
<table class="table_left">
<!--    profile_page-->
    <tr>
        <td height="50">
            <form action="checkpath.php" method="post">
                    <button name="profile" value="profile" >PROFILE</button>
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
<table class="table_center" style="background-color: #d6ffd4">
    <?php
        if ($_SESSION['THIS_ID']=='master'){
            echo
            "<tr >
                <th align=\"left\" height=\"130\">
<!--                Enter something<br>-->
                <form action=\"feed.php\" method=\"post\">
                    <input type=\"text\" name=\"topic\"><b> Topic (20 word)</b>
                    <br>
                    <textarea name=\"content\" cols=\"50\" rows=\"5\"></textarea>
                    <br>
                    (150 word)
                    <input type=\"submit\" name=\"submit\" value=\"Post\">
                </form>
                </th>
            </tr>";
        }
    ?>
    <tr class="content">
        <td style="padding: 10px 0px 10px 10px">
            <?php
            while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
            ?><?php
            echo date('Y/m/d')
                ." : <b>"
                .$result["topic"]
                ."</b><br>["
                .$result["feed_content"]." ]";
            echo "<br><br>";
//            ?><!--</td>-->
        <!--        </tr>-->
        <?php
        }
        ?>
        </td>
    </tr>
    <tr></tr>
</table>
<table class="table_right">
    <tr>
        <td style="padding: 10px 10px 10px 10px" height="50">
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
                ."<br><br>"."NAME : ".strtoupper($_SESSION['THIS_NAME'])
                ."<br><br>"."TYPE : ".$type
                ."<br><br>"."BIRTHDAY : ".$_SESSION['THIS_BIRTHDAY']
                ."<br><br>"."ENTER DATE : ".$_SESSION['THIS_ENTER'];
            ?>
        </td>
    </tr>
    <tr></tr>
</table>
<table class="table_footer"><tr></tr></table>
</body>
</html>