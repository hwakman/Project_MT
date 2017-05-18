<?php
$conn = new mysqli('localhost', 'root', 'tor14299','projectMt');
$sql = 'SELECT * FROM USERDETAIL';
$query = mysqli_query($conn,$sql);
session_start();
?>
<html>
<head>
    <link href="Template/css/base.css" rel="stylesheet" type="text/css">
    <style>
        button{
            background-color: #555555;
            color: white;
            border: 2px solid #555555;
        }
        button:hover{
            background-color: white;
            color: black;
        }
        body{
            background-color: #555555;
        }
    </style>
</head>
<body>
<table class="table_head" style="width: 100%">
    <tr>
        <th>
            <img src="img/01.jpg" style="width: 100%;max-height: 300px" >
        </th>
    </tr>
</table>
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
<table class="table_right_" style="background-color: rgba(255,255,255,0.51);text-align: center;">
    <tr>
        <th>[NO.]</th>
        <th>[Name.]</th>
        <th>[ID.]</th>
    </tr>
    <?php
    $i=1;
    while ($row = $query->fetch_assoc()){
        echo '<tr><td>'.$i.'</td><td>'.$row['name'].'</td><td>'.$row['id'].'</td></tr>';
        $i++;
    }
    ?>
</table>
<table class="table_footer"><tr></tr></table>
</body>
</html>