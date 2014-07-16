<?php

function send_email($name, $sender, $message) {
    $sender = $name."<".$sender.">";
    $headers = "From: ".$sender."\r\n";
    mail("luk@chrisluk.im", $name, $message, $headers);
}

?>