<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <!-- <h2>Ini adalah dashboard</h2> -->
    <table>
        <tr>
            <td><img src="img/icon/computer_2_cool-4.png" alt=""></td>
        </tr>
        <tr>
            <td><img src="img/icon/notepad-2.png" alt=""></td>
        </tr>
        <tr>
            <td><img src="img/icon/rename-2.png" alt=""></td>
        </tr>
    </table>
</body>

</html>