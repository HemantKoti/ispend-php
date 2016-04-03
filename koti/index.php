<html>
    <body>
        <?php
        $email = "kotihemant@gmail.com";
        $body = "Hello are nainaaaaaaaaaaaaaa";
         
		$headers = "From: kotihemant@gmail.com \r\n";
		$headers .= "Reply-To: kotihemant@gmail.com \r\n";
		$headers .= "Return-Path: kotihemant@gmail.com\r\n";
		$headers .= "X-Mailer: PHP \r\n";
	
        $retval = mail($email, "Ispend Email", $body, $headers);
        if ($retval == true) {
            echo nl2br("Email Sent Successfully to : koti \n");
        } else {
            echo nl2br("Email Not Sent\n");
        }
        ?>
    </body>
</html>