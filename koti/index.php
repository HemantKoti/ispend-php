<html>
    <body>
        <?php
        $email = "kotihemant@gmail.com";
        $body = "Hello are nainaaaaaaaaaaaaaa";
        $headers = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        $retval = mail($email, "Exciting Offers for you", $body, $headers);
        if ($retval == true) {
            echo nl2br("Email Sent Successfully to : koti \n");
        } else {
            echo nl2br("Email Not Sent\n");
        }
        ?>
    </body>
</html>