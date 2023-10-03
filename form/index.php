<!DOCTYPE html>
<html>
<head>
    <title>PAI ROBO CHAMP Form</title>

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
<!-- Page Content -->

  <div class="container">
    <div class="row jumbotron">
      <div class="col-sm-12 form-group">
    <form method="post" enctype="multipart/form-data">
        <!-- Your form fields here -->
        <input id="apiname" type ="" value="https://pay.easebuzz.in/payment/initiateLink" hidden>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
  <label for="name">Name of the Institute<span>*</span></label>
          <input class="input" type="text" placeholder="Name of the Institute" name="nameinst" id="nameinst" required ><br><br>

          <label for="instadd" class="label">Institute Address <span>*</span></label>
          <input class="input" type="text" placeholder="Institute Address" name="instadd" id="instadd" required ><br><br>

          <label for="instemail">Institute Email <span>*</span></label>
          <input class="input" type="email" placeholder="Institute Email" name="instemail" id="instemail" required ><br><br>

          <label for="principal">Principal Name<span>*</span></label>
          <input class="input" tyepe="text" placeholder="Principal Name" id="principal" name="principal" required ></input><br><br>

          <label for="principalno">Principal Contact Number <span>*</span></label>
          <input type="number" class="input" name="principalno" id="principalno" placeholder="Principal Contact Number"  required ><br><br>

          <label for="teamname">Team Name <span>*</span></label>
          <input type="text" class="input" onkeypress="numonly(event)" placeholder="Team Name:" name="teamname" id="teamname" required ><br><br>

          <label for="mentorname">Mentor Name<span>*</span></label>
          <input type="text" class="input" placeholder="Mentor Name" name="mentorname" id="mentorname"  required ><br><br>

          <label for="mentorno">Mentor Contact Number <span>*</span></label>
          <input type="number" class="input" placeholder="Mentor Contact Number" name="mentorno" id="mentorno"  required > <br><br>

          <label for="mentorquali">Mentor Qualification <span>*</span></label>
          <input type="text" class="input" placeholder="Mentor Qualification" name="mentorquali" id="mentorquali" required > <br><br>

          <label for="mentoradhar">mentor Adhar (200kb File) <span>*</span></label>
          <input type="file" class="input" placeholder="mentor Adhar (200kb File)" name="mentoradhar" id="mentoradhar" accept=".pdf" required > <br><br>

          <label for="stdfirstna">Teammate Members Details <br> 1) <span>*</span></label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstna" id="stdfirstna" required > <br><br>

          <label for="stdfirstph"> Student Photo (200kb File) <span>*</span></label>
          <input type="file" class="input" placeholder="student Photot" name="stdfirstph" id="stdfirstph" accept=".pdf" required > <br><br>

          <label for="stdagefirst"> Student Age <span>*</span> </label>
          <input type="number" maxlength="2" minlength="1" class="input" placeholder="Student Age" name="stdagefirst" id="stdagefirst" required > <br> <br>

          <label for="stddivfirst"> Student Class Division <span>*</span> </label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfirst" id="stddivfirst" required > <br> <br>

          <label for="stdsecna">2) <br> Name of the Student <span>*</span> </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdsecna" id="stdsecna" required > <br> <br>

          <label for="stdsecph"> Student Photo (200kb File) <span>*</span> </label>
          <input type="file" class="input" placeholder="student Photot" name="stdsecph" id="stdsecph" accept=".pdf" required > <br><br>

          <label for="stdagesec"> Student Age <span>*</span> </label>
          <input type="number" class="input" placeholder="Student Age" name="stdagesec" id="stdagesec" required > <br> <br>

          <label for="stddivsec"> Student Class Division <span>*</span></label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivsec" id="stddivsec" required > <br> <br>

          <label for="stdthridna">3) <br> Name of the student <span>*</span> </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdthridna" id="stdthridna" required > <br> <br>

          <label for="stdthridph"> Student Photo (200kb File) <span>*</span></label>
          <input type="file" class="input" placeholder="student Photot" name="stdthridph" id="stdthridph" accept=".pdf" required > <br> <br>

          <label for="stdagethrid"> Student Age <span>*</span></label>
          <input type="number" class="input" placeholder="Student Age" name="stdagethrid" id="stdagethrid" required  > <br> <br>

          <label for="stddivthrid"> Student Class Division <span>*</span></label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivthrid" id="stddivthrid" required > <br> <br>


          <label for="stdfourtna">4) <br> Name of the Student <span>*</span> </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfourtna" id="stdfourtna" required > <br> <br>

          <label for="stdfourtph"> Student Photo (200kb File) <span>*</span> </label>
          <input type="file" class="input" placeholder="student Photo" name="stdfourtph" id="stdfourtph" accept=".pdf" required > <br> <br>

          <label for="stdagefourt"> Student Age <span>*</span> </label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefourt" id="stdagefourt" required > <br> <br>

          <label for="stddivfourt"> Student Class Division <span>*</span></label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfourt" id="stddivfourt" required > <br> <br>

          <label for="stdfifthna">5) <br> Name of the Student <span>*</span> </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfifthna" id="stdfifthna" required > <br> <br>

          <label for="stdfifthph"> Student Photo (200kb File) <span>*</span> </label>
          <input type="file" class="input" placeholder="student Photo" name="stdfifthph" id="stdfifthph" accept=".pdf" required > <br> <br>

          <label for="stdagefifth"> Student Age <span>*</span> </label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefifth" id="stdagefifth" required > <br> <br>

          <label for="stddivfifth"> Student Class Division <span>*</span></label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfifth" id="stddivfifth" required > <br> <br>

    <label for="amount">Amount:<span>it is fixed amount</span></label>
    <input class="input" type="number" name="amount" id="amount" value="2000" readonly >
    <br><br><br>

    <!-- submit button -->
    <button value="submit" name="submit" type="submit" id="submit">Submit</button>
    <button value="reset" name="reset" type="reset">Reset</button>
        
    </form>
    </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      $(document).ready(function() {
        $("submit").click(function(event){
          event.preventDefault()

          var apiname = $('#apiname').val();
          var nameinst = $('#nameinst').val();
          var instadd = $('#instadd').val();
          var instemail = $('#instemail').val();
          var principal = $('#principal').val();
          var principalno = $('#principalno').val();
          var teamname = $('#teamname').val();
          var mentorname = $('#mentorname').val();
          var mentorno = $('#mentorno').val();
          var mentorquali = $('#mentorquali').val();
          var mentoradhar = $('#mentoradhar').val();
          var stdfirstna = $('#stdfirstna').val();
          var stdfirstph = $('#stdfirstph').val();
          var stdagefirst = $('#stdagefirst').val();
          var stddivfirst = $('#stddivfirst').val();
          var stdsecna = $('#stdsecna').val();
          var stdagesec = $('#stdagesec').val();
          var stddivsec = $('#stddivsec').val();
          var stdthridna = $('#stdthridna').val();
          var stdthridph = $('#stdthridph').val();
          var stdagethrid = $('#stdagethrid').val();
          var stddivthrid = $('#stddivthrid').val();
          var stdfourtna = $('#stdfourtna').val();
          var stdfourtph = $('#stdfourtph').val();
          var stdagefourt = $('#stdagefourt').val();
          var stddivfourt = $('#stddivfourt').val();
          var stdfifthna = $('#stdfifthna').val();
          var stdfifthph = $('#stdfifthph').val();
          var stdagefifth = $('#stdagefifth').val();
          var stddivfifth = $('#stddivfifth').val();
          var amount = $('#amount').val();


          $.ajax({

            type:"POST",
            url:"easebuzz.php",
            data:{
              apiname:apiname,
              nameinst:nameinst,
              instadd:instadd,
              instemail:instemail,
              principal:principal,
              principalno:principalno,
              teamname:teamname,
              mentorname:mentorname,
              mentorno:mentorno,
              mentorquali:mentorquali,
              mentoradhar:mentoradhar,
              stdfirstna:stdfirstna,
              stdfirstph:stdfirstph,
              stdagefirst:stdagefirst,
              stddivfirst:stddivfirst,
              stdsecna:stdsecna,
              stdagesec:stdagesec,
              stddivsec:stddivsec,
              stdthridna:stdthridna,
              stdthridph:stdthridph,
              stdagethrid:stdagethrid,
              stddivthrid:stddivthrid,
              stdfourtna:stdfourtna,
              stdfourtph:stdfourtph,
              stdagefourt:stdagefourt,
              stddivfourt:stddivfourt,
              stdfifthna:stdfifthna,
              stdfifthph:stdfifthph,
              stdagefifth:stdagefifth,
              stddivfifth:stddivfifth,
              amount:amount,
            },
            success:function(data) {
          console.log(data);
          response = JSON.parse(data);
          // alert(response);
         if (response.status == '1') {
                    window.location.href = response.data;//<- your url here
                }
         
        },
        error: function(data) {
        alert('error; ' + eval(error));

      }

  })
})
})

    </script>




  </body>
</html>
