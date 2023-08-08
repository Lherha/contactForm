<?php
if(!isset($_POST['submit'])){
    //let's get all form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    echo "wrong";
}else{
    echo "Thank you for your message!";
}
?>