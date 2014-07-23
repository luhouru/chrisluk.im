<?php

function send_email($name, $subject, $sender, $message) {
    $sender = $name."<".$sender.">";
    $headers = "From: ".$sender."\r\n";
    $message .= "\r\n"."\r\n"."Sincerely, "."\r\n".$name;
    mail("chriseluk@gmail.com", $subject, $message, $headers);
}

?>