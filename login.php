<?php
/**
 * Created by PhpStorm.
 * User: Ebullient Ebuka
 * Date: 9/20/2019
 * Time: 7:00 AM
 */


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
        if(strlen($email)>25 || strlen($password)>25) {
            echo 'Sorry, maximum length for some field has been exceeded.';
        }else {
            echo 'OK';
        }
    }


} else {
    echo 'All fields are required.';
}

?>

<br>

<a href="index.html">Home</a>
