<?php
session_start();
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
                <button name="store" value="store">USER LIST</button>
                <button name="logout" value="logout">LOGOUT</button>
            </form>
        </td>
    </tr>
    <tr></tr>

</table>
<table class="table_right_"><tr></tr></table>
<table class="table_footer"><tr></tr></table>
</body>
</html>