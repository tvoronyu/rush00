<?php
session_start();
//include "ses_valid.php";

$email = $_POST['email'];
$password = md5($_POST['password']);
$name = $_POST['name'];

//echo $email . '</br>' . $password . '</br>' . $name;

$dbc = mysqli_connect('localhost', 'root', 'qwerty', 'shop') or die ('Not connect');



//if(isset($result))
//    echo '</br>' . 'SUCCESS' . '</br>';
$sql = "SELECT * FROM users";
$result = mysqli_query($dbc, $sql);
 while($row = mysqli_fetch_assoc($result)) {

     if ($row['user_login'] == $email) {
//         var_dump($row);
//         print $email.' '.$password;
         if ($row['user_password'] == $password){
             header('Location: header.php');
             $_SESSION['user_login'] = $_POST['email'];
             exit();
         }
//         break;
//         echo $row['email'] . "you ara registered. please enter new mail" . '<br/>';
     }
 }
// if (!empty($_POST['email']) && !empty($_POST['password'])) {
//     $query = "INSERT INTO users (user_name, user_login, user_password) VALUE ('$name', '$email', '$password')";
//     $result = mysqli_query($dbc, $query);
     header('Refresh: 1 ; url=index.php');
        print "You valerik!";
     exit();
// }
// }
//echo $row['user_login'] . '<br/>';
?>

