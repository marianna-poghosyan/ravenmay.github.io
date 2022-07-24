<?php

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $to = "poghosyan.may@gmail.com";
    $subject = 'Email from poghosyan.me website';
    $body = <<<EMAIL

    Hi Dear Mk!
    
    You've got an message from your website.
    Sender name is $name.
    Sender email is $email.
    
    Here is the message text.
    ________________
    
    $message
    
    ________________
    
    Քեզ լավ նաի
    Kind Regards
EMAIL;

    if(mail($to, $subject, $body)){
        echo true;
    }else{
        echo false;
    }
}