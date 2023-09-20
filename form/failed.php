<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Easebuzz Payment Gateway Integration in PHP</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

<?php
    // Database configuration  
    require_once "config.php";

    $txnsId = $_POST["txnid"];

    /* update payment status by txnsId */
    $query = "UPDATE payment_transaction SET status='failed' WHERE txns_id = '$txnsId'";
    if($con->query($query)){
        echo "<h3 class='text-danger'>Your Transaction has been Failed</h3>";
    }
?>

</body>
</html>