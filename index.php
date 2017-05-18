<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
    <style>
        .AutoSlide {display: none;}
    </style>
</head>
<body style="background-color: #c2ff95">
    <table style="float: right">
        <tr >
            <th>
                <form action="checkLogin.php" method="post">
                    <br>Username :
                    <input type="text" name="Textuser" id="Textuser" value="<?php echo $_SESSION['THIS_ID'];?>">
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
        <th>
            <div style="margin: auto">
                <img src="img/02.jpg" style="width: 100%" class="AutoSlide">
                <img src="img/04.jpg" style="width: 100%" class="AutoSlide">
                <img src="img/05.jpg" style="width: 100%" class="AutoSlide">
                <img src="img/09.jpg" style="width: 100%" class="AutoSlide">
            </div>
        </th>
        <script>
            var myIndex = 0;
            slideShow();
            function slideShow() {
                var i;
                var x = document.getElementsByClassName("AutoSlide");
                for(i=0;i<x.length;i++){
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length){myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(slideShow,5000);
            }
        </script>
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
