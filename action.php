<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $subject = "FWPS - New Email From Reader";
        $mailTo = "4betterschools@comcast.net";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: subpage-six.html?mailsent");
    } 
?>
