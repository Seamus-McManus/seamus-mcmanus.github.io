<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ){
        $fname = $_POST["fname"];
        $fname = $_POST["lname"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = $_POST["subject"];

        $to = "contact@seamusmcmanus.net";
        $body = "Name: {$fname} {$lname}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
?>