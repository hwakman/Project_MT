<?php
/**
 * Created by PhpStorm.
 * User: internship
 * Date: 27/4/2560
 * Time: 16:09 น.
 */
if ($_REQUEST['profile'])
    header('Location: profile.php');
elseif ($_REQUEST['index'])
    header('Location: main_index.php');
elseif ($_REQUEST['checkin'])
    header('Location: checkin.php');
elseif ($_REQUEST['store'])
    header('Location: store.php');
elseif ($_REQUEST['logout'])
    header('Location: index.php');
elseif ($_REQUEST['add_user'])
    header('Location: add_user.php');
else
    echo "no value";