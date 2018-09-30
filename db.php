<?php
/**
 * Created by PhpStorm.
 * User: vrusanov
 * Date: 9/27/18
 * Time: 6:57 PM
 */

function db()
{
    $dbc = mysqli_connect('localhost', 'root', '88888888', 'shop') or die ('Not connect');

    //if(isset($result))
    //    echo '</br>' . 'SUCCESS' . '</br>';
    $sql = "SELECT email FROM user";
    $result = mysqli_query($dbc, $sql);
//    return $result;
}
?>