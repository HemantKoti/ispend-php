<html>
<body>
<?php
        require "../init.php";
		$pwd = $_POST['psd'];
		$sqlUsers = "SELECT Email FROM Users;";
        $email = "";
        $offers = "";
        $purchase = "";
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

        $resultUsers = mysqli_query($conn, $sqlUsers);
		if(!isset($_POST['submit'])){
			echo nl2br ("Click Submit first\n");
		}
        if (mysqli_num_rows($resultUsers) > 0) {
            while ($rowUsers = mysqli_fetch_assoc($resultUsers)) {
                if (filter_var($rowUsers["Email"], FILTER_VALIDATE_EMAIL)) {
                    $email = $rowUsers["Email"];
                    $sqlPurchase = "SELECT MAX(ItemPrice) AS HighestPrice, ItemCategory FROM Purchases WHERE Buyer = '$email';";
                    $resultPurchase = mysqli_query($conn, $sqlPurchase);
                    if (mysqli_num_rows($resultPurchase) > 0) {
                        $rowPurchase = mysqli_fetch_assoc($resultPurchase);
                        if ($rowPurchase["HighestPrice"] != 0) {
                            $purchase = $rowPurchase["ItemCategory"];
                            $sqlOffers = "SELECT Offer FROM Offers WHERE Category = '$purchase';";
                            $resultOffers = mysqli_query($conn, $sqlOffers);
                            $body = "";
                            if (mysqli_num_rows($resultOffers) > 0) {
                                while ($rowOffers = mysqli_fetch_assoc($resultOffers)) {
                                    $body .= $rowOffers["Offer"] . "\n";
                                }
                                $retval = mail($rowUsers["Email"], "Exciting Offers for you", $body,$headers);
								if($retval == true){
									echo nl2br ("Email Sent Successfully to : " . $rowUsers["Email"] . "\n");
								}else {
									echo nl2br ("Email Not Sent\n");
								}
                            } else {
                                echo nl2br ("No results in Offers Table\n");
                            }
                        } else {
                            echo nl2br ("Purchase Something\n");
                        }
                    } else {
                        echo nl2br ("No results in Purchase Table\n");
                    }
                } else {
                    echo nl2br ("Enter a Valid Email\n");
                }
            }
        } else {
            echo nl2br ("No results in Users Table\n");
        }
?>
</body>
</html>