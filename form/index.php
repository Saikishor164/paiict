<?php
     include_once('easebuzz-lib\easebuzz_payment_gateway.php');
     if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $amount = $_POST['amount'];

      $MERCHANT_KEY = "2PBP7IABZ2";  // S59212I6RX
      $SALT = "DAH88E3UWQ";
      $ENV = "test";   // set enviroment name

      // when successfully register done then get Merchant_key and SALT through email

      $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);
      $txnid = 'Test'.rand(1, 100);

      $postData = array ( 
        "txnid" => $txnid, 
        "amount" => $amount.'.0', 
        "firstname" => $name, 
        "email" => $email, 
        "phone" => $phone, 
        "productinfo" => " For Test", 
        "surl" => "http://localhost:8080/paiict/form/success.php", 
        "furl" => "http://localhost:8080/paiict/form/failed.php",
        "hash" => '46ed260db5a4cb33871f0b308aae3e899602cd7f20c6841677e4079d8b9e5ec3',
        "udf1" => '',
        "udf2" => '',
        "udf3" => '',
        "udf4" => '',
        "udf5" => '',
        "address" => '' 
    );

      $data = $easebuzzObj->initiatePaymentAPI($postData);
      print_r($data);    
     }



?>



<!doctype html>
<html lang="en">
  <head>
    <title>PAI ROBO CHAMP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="phone">Phone No:</label>
    <input type="tel" name="phone" id="phone">
    <br>
    <label for="amount">Amount:</label>
    <input type="number" name="amount" id="amount">
    <br>
    <input type="submit" value="submit" name="submit">
    <input type="reset" value="reset" name="reset">
    </form>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>





