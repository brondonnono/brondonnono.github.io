<?php
    if(isset($_POST['sendMail'])) {
        $name = $_POST['name'];
        $sender_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $receiver_email = 'brondonnono3@gmail.com';

        echo $name + ' ' + $sender_email + ' ' + $subject + ' ';
    } else {
        header('Location: ../index.html');
    }
?>