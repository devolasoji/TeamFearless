<?php
/**
 * Created by PhpStorm.
 * User: Ebullient Ebuka
 * Date: 9/20/2019
 * Time: 7:00 AM
 */


if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['user_name'])
&& isset($_POST['password']) && isset($POST['repeat_password'])) {


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];


    if(!empty($first_name) && !empty($last_name) && !empty($user_name)
        && !empty($password) && !empty($repeat_password)) {
        if(strlen($first_name)>25 || strlen($last_name)>25 || strlen($user_name)>25 || strlen($password)>25 || strlen($repeat_password)>25) {
            echo 'Sorry, maximum length for some field has been exceeded.';
        }else {
            echo 'OK';
        }



    } else {
        echo 'All fields are required.';
}

}

?>

<br>

<a href="sign_up.html">Home</a>