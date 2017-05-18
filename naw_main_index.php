<?php
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<table name="menu">
    <tr>
        <th>
            <div style="display: none" id="mySlideMenu">
                <form>
                    <button onclick="close_menu()">Close&times;</button>
                    <a href="profile.php">Profile</a>
                    <a href="checkin.php">Check in</a>
                    <a href="index.php">Logout</a>
                </form>
            </div>
        </th>
    </tr>
</table>
<script>
    function open_menu() {
        document.getElementById("mySlideMenu").style.display = "block";
    }
    function close_menu() {
        document.getElementById("mySlideMenu").style.display = "none";
    }
</script>
</body>
</html>