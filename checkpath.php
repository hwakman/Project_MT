<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 16:09 น.
 */
if ($_POST['profile'])
    header('Location: profile.php');
elseif ($_POST['checkin'])
    header('Location: checkin.php');
elseif ($_POST['store'])
    header('Location: store.php');
elseif ($_POST['logout'])
    header('Location: index.php');
else
    echo "no value";