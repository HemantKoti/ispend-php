<html>
<body>
<?php
        require "../init.php";
		$sqlUsers = "SELECT Email FROM Users;";
        $email = "";
        $offers = "";
        $purchase = "";
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

        $resultUsers = mysqli_query($conn, $sqlUsers);
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
									echo "Email Sent Successfully";
								}else {
									echo "Email Not Sent";
								}
                            } else {
                                echo "No results in Offers Table";
                            }
                        } else {
                            echo "Purchase Something";
                        }
                    } else {
                        echo "No results in Purchase Table";
                    }
                } else {
                    echo "Enter a Valid Email";
                }
            }
        } else {
            echo "No results in Users Table";
        }
?>
</body>
</html>