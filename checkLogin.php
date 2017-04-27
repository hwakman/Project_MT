<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 14:39 น.
 */
session_start();
if (isset($_POST['Submit'])){
    if (strcmp($_POST['Textuser'],"tor") && strcmp($_POST['Textpass'],"1234")){
        echo "seikai!!";
    }
}

else
    echo "false";