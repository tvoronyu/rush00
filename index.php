<?php
session_start();
if ($_SESSION['user_login'] && !empty($_SESSION['user_login']) && isset($_SESSION['user_login'])) {
    header('Location: header.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        input{
            border: 2px solid #1e5799;
        }
        #btn:hover{
            background: #7db9e8;


        }
        .form_reg {
            float: right;
        }
    </style>
</head>
<body style="background: linear-gradient(to left, #55a7ff 30%, #d920ff 70%)">
<div class = "form_reg" >
    <form action="form.php" method="post">
        <table>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="name" name="name" id="name" required maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <input type="email" name="email" id="email" required maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password" id="password" required maxlength="50">
                </td>
            </tr>
        </table>
        <input type="submit" id="btn">
    </form>
</div>
</body>
</html>