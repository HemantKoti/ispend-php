<html>
    <body>
        <?php
        $email = "hemantkoti@ymail.com";
        $body = "Hello are nainaaaaaaaaaaaaaa";
         $header = "From:someone@somedomain.com \r\n";
         $header .= "Cc:someone@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

        $retval = mail($email, "Ispend Email", $body, $headers);
        if ($retval == true) {
            echo nl2br("Email Sent Successfully to : koti \n");
        } else {
            echo nl2br("Email Not Sent\n");
        }
        ?>
    </body>
</html>