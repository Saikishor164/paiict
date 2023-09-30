<?php

 include_once('easebuzz-lib/easebuzz_payment_gateway.php');
            $nameinst = $_POST['nameinst'];
              $instadd = $_POST['instadd'];
              $instemail = $_POST['instemail'];
              $principal = $_POST['principal'];
              $principalno = $_POST['principalno'];
              $teamname = $_POST['teamname'];
              $mentorname = $_POST['mentorname'];
              $mentorno = $_POST['mentorno'];
              $mentorquali = $_POST['mentorquali'];
              $mentoradhar = $_POST['mentoradhar'];
              $stdfirstna = $_post['stdfirstna'];
              $stdfirstph = $_post['stdfirstph'];
              $stdagefirst = $_post['stdagefirst'];
              $stddivfirst = $_post['stddivfirst'];
              $stdsecna = $_post['stdsecna'];
              $stdagesec = $_post['stdagesec'];
              $stddivsec = $_post['stddivsec'];
              $stdthridna = $_post['stdthridna'];
              $stdthridph = $_post['stdthridph'];
              $stdagethrid = $_post['stdagethrid'];
              $stddivthrid = $_post['stddivthrid'];
              $stdfourtna = $_post['stdfourtna'];
              $stdfourtph = $_post['stdfourtph'];
              $stdagefourt = $_post['stdagefourt'];
              $stddivfourt = $_post['stddivfourt'];
              $stdfifthna = $_post['stdfifthna'];
              $stdfifthph = $_post['stdfifthph'];
              $stdagefifth = $_post['stdagefifth'];
              $stddivfifth = $_post['stddivfifth'];
              $amount = $_post['amount'];


              
/*
    * Create object for call easepay payment gate API and Pass required data into constructor.
    * Get API response.
    *  
    * param string $_GET['apiname'] - holds the API name.
    * param  string $MERCHANT_KEY - holds the merchant key.
    * param  string $SALT - holds the merchant salt key.
    * param  string $ENV - holds the env(enviroment).
    * param  string $_POST - holds the form data.
    *
    * ##Return values
    *   
    * - return array ApiResponse['status']== 1 successful.
    * - return array ApiResponse['status']== 0 error.
    *
    * @param string $_GET['apiname'] - holds the API name.
    * @param  string $MERCHANT_KEY - holds the merchant key.
    * @param  string $SALT - holds the merchant salt key.
    * @param  string $ENV - holds the env(enviroment).
    * @param  string $_POST - holds the form data.
    *
    * @return array ApiResponse['status']== 1 successful. 
    * @return array ApiResponse['status']== 0 error. 
    *
    */
    if(!empty($_POST) && (sizeof($_POST) > 0)){
     
        /*
        * There are three approch to call easebuzz API.
        *
        * 1. using hidden api_name which is $_POST from form.
        * 2. using pass api_name into URL.
        * 3. using extract html file name then based on file name call API.
        *
        */

        // first way
        $apiname = "https://pay.easebuzz.in/payment/initiateLink";
        // echo $apiname;
        // exit;
        // second way
        // $apiname = trim(htmlentities($_GET['api_name'], ENT_QUOTES));

        // third way
        // $url_link = $_SERVER['HTTP_REFERER'];
        // $apiname = explode('.', ( end( explode( '/',$url_link) ) ) )[0];
        // $apiname = trim(htmlentities($apiname, ENT_QUOTES));

        /*
        * Based on API call change the Merchant key and salt key for testing(initiate payment).
        */
        $MERCHANT_KEY = "Y7HVU4H9A7";
        $SALT = "XCNXI936I6";
       // $ENV = "test";    // setup test enviroment (testpay.easebuzz.in).
        $ENV = "prod";   // setup production enviroment (pay.easebuzz.in).
       
        $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
       
        if($apiname === "https://pay.easebuzz.in/payment/initiateLink"){
  
            $postData = array (
                           

                "txnid" => $txnid,
                "amount" =>$amount,
                "firstname" => $nameinst,
                "email" => $instemail,
                "phone" => $principalno,
                "productinfo" => $middleName,
                "surl" => "http://localhost/payment_updated/response.php",
                "furl" => "http://localhost/payment_updated/response.php",
                "udf1" => $college,
                "udf2" => $lastName,
                "udf3" => $courseName,
                "udf4" => "",
                "udf5" => "",
                "udf6" => "",
                "udf7" => "",
                "address1" => $address,
                "address2" => $address_two,
                "city" => "",
                "state" => $state,
                "country" => $country,
                "zipcode" => $zip,
                "sub_merchant_id" => $sub_merchant_id
                ); 

                $result = $easebuzzObj->initiatePaymentAPI($postData);
            
            easebuzzAPIResponse($result);

        }else if($apiname === "transaction"){ 
            $result = $easebuzzObj->transactionAPI($_POST);

            easebuzzAPIResponse($result);
     
        }else if($apiname === "transaction_date" || $apiname === "transaction_date_api"){ 
            $result = $easebuzzObj->transactionDateAPI($_POST);

            easebuzzAPIResponse($result);
                       
        }else if($apiname === "refund"){

            $result = $easebuzzObj->refundAPI($_POST);

            easebuzzAPIResponse($result);
                       
        }else if($apiname === "payout"){

            $result = $easebuzzObj->payoutAPI($_POST);

            easebuzzAPIResponse($result);
                       
        }else{

            echo '<h1>You called wrong API, Pleae try again</h1>';
        }

    }else{
        echo '<h1>Please fill all mandatory fields.</h1>';
    }

    function easebuzzAPIResponse($data){
        print_r($data);
    }



              ?>