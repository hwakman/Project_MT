<?php
session_start();
?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
</head>
<body>
    <table style="float: right">
        <tr >
            <th>
                <form action="checkLogin.php" method="post">
                    <br>Username :
                    <input type="text" name="Textuser" id="Textuser">
                    Password :
                    <input type="password" name="Textpass" id="Textpass">
                    <input type="submit"  class="login_but" value="Login" name="Submit">
                </form>
                <div style="float: left;">
                    <?php
                    echo "<a style=\"color: red\">".$_SESSION['ERROR_LOGIN']."</a>";
                    ?>
                </div>
            </th>
        </tr>
    </table>
    <div style="clear: right"></div>
<table width="100%" style="height: 500px" >
    <tr>
    </tr>
</table>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 12:38 น.
 */
