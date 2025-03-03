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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="icon">
            <table>
                <tr>
                    <td>
                        <a href="" onclick="loadApp('app/absen.php')"><img
                                src="img/icon/computer_2_cool-4.png"
                                title="Absen"
                                alt="Absen" /></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="" onclick="loadApp('app/notes.php')"><img src="img/icon/notepad-2.png" title="Notes" alt="Notes" /></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="" onclick="loadApp('app/money.php')"><img src="img/icon/rename-2.png" title="Money" alt="Money" /></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="content" id="app-container">
            <h2>
                welcome
                <?php echo $_SESSION['username']; ?>
            </h2>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>