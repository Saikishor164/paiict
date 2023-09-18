<?php
     include_once('easebuzz-lib\easebuzz_payment_gateway.php');
     if(isset($_POST['submit'])){
      $name = $_POST['instadd'];
      $email = $_POST['instemail'];
      $phone = $_POST['principalno'];
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
    <!--   meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <style>
    label {
      font-weight: 900;
    }
    
    label span{
      color:#ff5722 ;
      font-size: 12px;
      font-weight: lighter;
    }

    td span{
      color:#ff5722 ;
      font-size: 12px;
      font-weight: lighter;
    }
  </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<?php include 'header.php'; ?>


<br><br><br>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-sm-12 form-group">
  <form action="" method="post">
  <label for="name">Name of the Institute<span>*</span></label>
          <input class="input" type="text" placeholder="Name of the Institute" name="nameinst" id="nameinst"  ><br><br>

          <label for="instadd" class="label">Institute Address <span>*</span></label>
          <input class="input" type="text" placeholder="Institute Address" name="instadd" id="instadd"  ><br><br>

          <label for="instemail">Institute Email <span>*</span></label>
          <input class="input" type="email" placeholder="Institute Email" name="instemail" id="instemail"  ><br><br>

          <label for="principal">Principal Name<span>*</span></label>
          <input class="input" tyepe="text" placeholder="Principal Name" id="principal" name="principal"  ></input><br><br>

          <label for="principalno">Principal Contact Number <span>*</span></label>
          <input type="number" class="input" name="principalno" id="principalno" placeholder="Principal Contact Number"  ><br><br>

          <label for="teamname">Team Name <span>*</span></label>
          <input type="text" class="input" onkeypress="numonly(event)" placeholder="Phone No: " name="teamname" id="teamname"  ><br><br>

          <label for="mentorname">Mentor Name<span>*</span></label>
          <input type="text" class="input" placeholder="Mentor Name" name="mentorname" id="mentorname"  ><br><br>

          <label for="mentorno">Mentor Contact Number</label>
          <input type="number" class="input" placeholder="Mentor Contact Number" name="mentorno" id="mentorno"  > <br><br>

          <label for="mentorquali">Mentor Qualification</label>
          <input type="text" class="input" placeholder="Mentor Qualification" name="mentorquali" id="mentorquali"  > <br><br>

          <label for="mentoradhar">mentor Adhar (200kb File)</label>
          <input type="file" class="input" placeholder="mentor Adhar (200kb File)" name="mentoradhar" id="mentoradhar"  > <br><br>

          <label for="stdfirstna">Teammate Members Details <br> 1) </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstna" id="stdfirstna"  > <br><br>

          <label for="stdfirstph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdfirstph" id="stdfirstph"  > <br><br>

          <label for="stdagefirst"> Student Age</label>
          <input type="number" maxlength="2" minlength="1" class="input" placeholder="Student Age" name="stdagefirst" id="stdagefirst"  > <br> <br>

          <label for="stddivfirst"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfirst" id="stddivfirst"  > <br> <br>


          <label for="stdsecna">2) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstdsecnastna" id="stdsecna"  > <br> <br>

          <label for="stdsecph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdsecph" id="stdsecph"  > <br><br>

          <label for="stdagesec"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagesec" id="stdagesec"  > <br> <br>

          <label for="stddivsec"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivsec" id="stddivsec"  > <br> <br>

          <label for="stdthridna">3) <br> Name of the student </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdthridna" id="stdthridna"  > <br> <br>

          <label for="stdthridph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdthridph" id="stdthridph"  > <br> <br>

          <label for="stdagethrid"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagethrid" id="stdagethrid"  > <br> <br>

          <label for="stddivthrid"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivthrid" id="stddivthrid"  > <br> <br>


          <label for="stdfourtna">4) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfourtna" id="stdfourtna"  > <br> <br>

          <label for="stdfourtph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photo" name="stdfourtph" id="stdfourtph"  > <br> <br>

          <label for="stdagefourt"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefourt" id="stdagefourt"  > <br> <br>

          <label for="stddivfourt"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfourt" id="stddivfourt"  > <br> <br>

          <label for="stdfifthna">5) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfifthna" id="stdfifthna"  > <br> <br>

          <label for="stdfifthph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photo" name="stdfifthph" id="stdfifthph"  > <br> <br>

          <label for="stdagefifth"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefifth" id="stdagefifth"  > <br> <br>

          <label for="stddivfifth"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfifth" id="stddivfifth"  > <br> <br>

    <label for="amount">Amount:</label>
    <input class="input" type="number" name="amount" id="amount" value="2000" readonly>
    <br><br><br>
    <button value="submit" name="submit" type="submit">Submit</button>
    <!-- <input class="btn btn-success me-md-2" type="submit" value="submit" name="submit"> -->
    <input class="btn btn-primary me-md-2" type="reset" value="reset" name="reset">
    </form>


    </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>