<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
</head>
<body>
    <table class="table_head">
        <tr>
            <th>
                <form action="checkLogin.php">
                    User : <input type="text" name="Textuser" id="Textuser"><br><br>
                    Pass : <input type="text" name="Textpass" id="Textpass"><br><br>
                    <input type="submit" value="Login" name="Submit">
                </form>
            </th>
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
session_start();
require 'connectDB.php';