<?php

    if (isset($_POST['check_out'])) {

        // Database configuration  
        include_once "config.php";

        // Include Easebuss library 
        include_once('easebuzz-lib/easebuzz_payment_gateway.php');

        $MERCHANT_KEY = "2PBP7IABZ2";           // Marchant key
        $SALT = "DAH88E3UWQ";                   // Salt key
        $ENV = "test";                // set enviroment name

        $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
        
         // Use date default function to India time zore for save txns date
        date_default_timezone_set("Asia/Kolkata");

        // Generate txns Id by using mt_rand function
        $transactionId = substr(str_shuffle(md5(time())),0, 15);

        $customerName  = $_POST['full_name'];
        $customerEmail = $_POST['email'];
        $customerPhone = $_POST['mobile_number'];
        $description = $_POST['product_summary'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $amount = $_POST['amount'];
        $orderId  = "WC".mt_rand(11111, 99999);
        $currency = "INR";
        $txnsDate = date('Y-m-d H:i:s');
        $payment_status = "Pending";
        
        //Insert transaction data into the database 
        $query = "INSERT INTO payment_transaction (order_id, product_summary, full_name, mobile_number, email, amount, currency, status, txns_id, txns_date, address, pincode, city) 
        VALUES ('$orderId', '$description', '$customerName', '$customerPhone', '$customerEmail', '$amount', '$currency', '$payment_status', '$transactionId', '$txnsDate', '$address', '$pincode', '$city')";
        
        $con->query($query);
       
        $postData = array ( 
            "txnid" => $transactionId, 
            "amount" => $amount.".0", 
            "firstname" => $customerName, 
            "email" => $customerEmail, 
            "phone" => $customerPhone, 
            "productinfo" => $description, 
            "surl" => "http://localhost:8080/paiict/form/success.php", 
            "furl" => "http://localhost:8080/paiict/form/failed.php", 
            "udf1" => "aaaa", 
            "udf2" => "aaaa", 
            "udf3" => "aaaa", 
            "udf4" => "aaaa", 
            "udf5" => "aaaa", 
            "address1" => $address, 
            "address2" => "",
            "city" => $city, 
            "state" => $city, 
            "country" => "INDIA", 
            "zipcode" => $pincode
        );
        
        $easebuzzObj->initiatePaymentAPI($postData);
     
    }
?>