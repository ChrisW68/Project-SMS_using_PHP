<?php require '../includes/header.php'?>
<?php

    $client = new Services_Twilio($config['account_sid'], $config['auth_token']);
    $_SESSION['code'] = $code = uniqid();
    $con->query("INSERT_INTO verifications(code) VALUES('$code')");

    $client->account->messages->sendMessage($config['phone_number'],'5032172776',$code);
    echo "<h3 class='text-center bg-success'>Your code is sent</h3>";

?>


<?php require '../includes/footer.php'?>