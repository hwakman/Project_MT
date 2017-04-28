<?php
    require_once 'connectDB.php';
?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
</head>
<body>
<table class="table_head"><tr></tr></table>
<!--menu-->
<table class="table_left">
<!--    profile_page-->
    <tr>
        <td>
            <form action="checkpath.php" method="post">
                    <button name="profile" value="profile" >PROFILE</button>
                    <button name="checkin" value="checkin">CHECK IN</button>
                    <button name="store" value="store">STORE</button>
                    <button name="logout" value="logout">LOGOUT</button>
            </form>
        </td>
    </tr>
    <tr></tr>

</table>
<table class="table_center">
    <tr>
        <th class="feed">
            Enter something<br>
            <form action="feed.php" method="post">
                <textarea name="content" cols="60" rows="5"></textarea>
                <input type="submit" name="submit" value="Post">
            </form>
        </th>
    </tr>
    <br>
    <tr><td><?php $_REQUEST['content']?></td></tr>
</table>
<table class="table_right"><tr></tr></table>
<table class="table_footer"><tr></tr></table>
</body>
</html>