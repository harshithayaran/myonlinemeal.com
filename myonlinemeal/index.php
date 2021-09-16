<?php

try {

$db = new mysqli("localhost","root","number","my_dummy_db");


} catch (Exception $exc) {
    echo $exc->getTraceAsString;
}

if(isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['number'])) && (isset($_POST['passward'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $passward = $_POST['passward'];

    $toEmail = ""

}

?>