<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 14:39 น.
 */
session_start();
if(isset($_POST['Summit']))
    echo "it's work!!";
else
    echo "no value pass in";