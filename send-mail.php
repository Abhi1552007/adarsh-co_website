<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST["name"]);
    $phone   = htmlspecialchars($_POST["phone"]);
    $email   = htmlspecialchars($_POST["email"]);
    $city    = htmlspecialchars($_POST["city"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "caadarshrao@gmail.com";
    $subject = "New Contact Form Enquiry - Adarsh & Co.";

    $body = "
    You have received a new enquiry from your website:\n\n
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    City: $city\n\n
    Message:\n$message
    ";

    $headers = "From: Website Enquiry <no-reply@caadarsh.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "SUCCESS";
    } else {
        echo "ERROR";
    }
}
?>
