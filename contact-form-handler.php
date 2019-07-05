<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $mailto = "Crhilgers@mail.com";
    $headers = "From: ".$visitor_email;
    $txt = "You have Received an e-mail from ".$name.".\n\n".$message;

    mail($mailto, $txt, $headers);
    header("Locatoin: index.php?mailsend");
}

    // $email_from = 'jebusthedingus@gmail.com';

    // $email_subject = "New Form Sublission";

    // $email_body = "User Name: $name.\n".
    //                 "User Email: $visitor_email.\n".
    //                 "User Message: $message.\n".

    // $to = "cole5882@gmail.com";
    // $headers = "From: $email_from \r\n";
    // $headers .= "Reply-To: $visitor_email \r\n";
    // mail($to,$email_subject,$email_body,$headers);
    // header("Location: index.html");

?>