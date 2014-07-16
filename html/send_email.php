<?php

function send_email($name, $sender, $message) {
    $sender = $name."<".$sender.">";
    $headers = "From: ".$sender."\r\n";
    mail("chriseluk@gmail.com", $name, $message, $headers);
}

?>