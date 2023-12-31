<?php 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "paiict";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
     $stmt = $conn->prepare("INSERT INTO registration (nameinst, instadd, instemail, principal, principalno, teamname, mentorname, mentorno, mentorquali, mentoradhar, stdfirstna, stdfirstph, stdagefirst, stddivfirst, stdsecna, stdsecph, stdagesec, stddivsec, stdthridna, stdthridph, stdagethrid, stddivthrid, stdfourtna, stdfourtph, stdagefourt, stddivfourt, stdfifthna, stdfifthph, stdagefifth, stddivfifth, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssssssssssssssssssssssss", $nameinst, $instadd, $instemail, $principal, $principalno, $teamname, $mentorname, $mentorno, $mentorquali, $mentoradhar, $stdfirstna, $stdfirstph, $stdagefirst, $stddivfirst, $stdsecna, $stdsecph, $stdagesec, $stddivsec, $stdthridna, $stdthridph, $stdagethrid, $stddivthrid, $stdfourtna, $stdfourtph, $stdagefourt, $stddivfourt, $stdfifthna, $stdfifthph, $stdagefifth, $stddivfifth, $amount);

    // Set parameters from the form
    $nameinst = $_POST["nameinst"];
    $instadd = $_POST["instadd"];
    $instemail = $_POST["instemail"];
    $principal = $_POST["principal"];
    $principalno = $_POST["principalno"];
    $teamname = $_POST["teamname"];
    $mentorname = $_POST["mentorname"];
    $mentorno = $_POST["mentorno"];
    $mentorquali = $_POST["mentorquali"];
    $mentoradhar = $_FILES["mentoradhar"]["name"];
    $stdfirstna = $_POST["stdfirstna"];
    $stdfirstph = $_FILES["stdfirstph"]["name"];
    $stdagefirst = $_POST["stdagefirst"];
    $stddivfirst = $_POST["stddivfirst"];
    $stdsecna = $_POST["stdsecna"];
    $stdsecph = $_FILES["stdsecph"]["name"];
    $stdagesec = $_POST["stdagesec"];
    $stddivsec = $_POST["stddivsec"];
    $stdthridna = $_POST["stdthridna"];
    $stdthridph = $_FILES["stdthridph"]["name"];
    $stdagethrid = $_POST["stdagethrid"];
    $stddivthrid = $_POST["stddivthrid"];
    $stdfourtna = $_POST["stdfourtna"];
    $stdfourtph = $_FILES["stdfourtph"]["name"];
    $stdagefourt = $_POST["stdagefourt"];
    $stddivfourt = $_POST["stddivfourt"];
    $stdfifthna = $_POST["stdfifthna"];
    $stdfifthph = $_FILES["stdfifthph"]["name"];
    $stdagefifth = $_POST["stdagefifth"];
    $stddivfifth = $_POST["stddivfifth"];
    $amount = $_POST["amount"];

    // Move uploaded files to a folder (adjust the path as needed)
    $target_dir = "uploads/";
    move_uploaded_file($_FILES["mentoradhar"]["tmp_name"], $target_dir . $mentoradhar);
    move_uploaded_file($_FILES["stdfirstph"]["tmp_name"], $target_dir . $stdfirstph);
    move_uploaded_file($_FILES["stdsecph"]["tmp_name"], $target_dir . $stdsecph);
    move_uploaded_file($_FILES["stdthridph"]["tmp_name"], $target_dir . $stdthridph);
    move_uploaded_file($_FILES["stdfourtph"]["tmp_name"], $target_dir . $stdfourtph);
    move_uploaded_file($_FILES["stdfifthph"]["tmp_name"], $target_dir . $stdfifthph);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
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
          <input type="text" class="input" onkeypress="numonly(event)" placeholder="Phone No: " name="teamname" id="teamname" required ><br><br>

          <label for="mentorname">Mentor Name<span>*</span></label>
          <input type="text" class="input" placeholder="Mentor Name" name="mentorname" id="mentorname"  required ><br><br>

          <label for="mentorno">Mentor Contact Number</label>
          <input type="number" class="input" placeholder="Mentor Contact Number" name="mentorno" id="mentorno"  required > <br><br>

          <label for="mentorquali">Mentor Qualification</label>
          <input type="text" class="input" placeholder="Mentor Qualification" name="mentorquali" id="mentorquali" required > <br><br>

          <label for="mentoradhar">mentor Adhar (200kb File)</label>
          <input type="file" class="input" placeholder="mentor Adhar (200kb File)" name="mentoradhar" id="mentoradhar" required > <br><br>

          <label for="stdfirstna">Teammate Members Details <br> 1) </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstna" id="stdfirstna" required > <br><br>

          <label for="stdfirstph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdfirstph" id="stdfirstph" required > <br><br>

          <label for="stdagefirst"> Student Age</label>
          <input type="number" maxlength="2" minlength="1" class="input" placeholder="Student Age" name="stdagefirst" id="stdagefirst" required > <br> <br>

          <label for="stddivfirst"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfirst" id="stddivfirst" required > <br> <br>

          <label for="stdsecna">2) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstdsecnastna" id="stdsecna" required > <br> <br>

          <label for="stdsecph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdsecph" id="stdsecph" required > <br><br>

          <label for="stdagesec"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagesec" id="stdagesec" required > <br> <br>

          <label for="stddivsec"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivsec" id="stddivsec" required > <br> <br>

          <label for="stdthridna">3) <br> Name of the student </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdthridna" id="stdthridna" required > <br> <br>

          <label for="stdthridph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photot" name="stdthridph" id="stdthridph" required > <br> <br>

          <label for="stdagethrid"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagethrid" id="stdagethrid" required  > <br> <br>

          <label for="stddivthrid"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivthrid" id="stddivthrid" required > <br> <br>


          <label for="stdfourtna">4) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfourtna" id="stdfourtna" required > <br> <br>

          <label for="stdfourtph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photo" name="stdfourtph" id="stdfourtph" required > <br> <br>

          <label for="stdagefourt"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefourt" id="stdagefourt" required > <br> <br>

          <label for="stddivfourt"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfourt" id="stddivfourt" required > <br> <br>

          <label for="stdfifthna">5) <br> Name of the Student  </label>
          <input type="text" class="input" placeholder="Name of first Student" name="stdfifthna" id="stdfifthna" required > <br> <br>

          <label for="stdfifthph"> Student Photo (200kb File)</label>
          <input type="file" class="input" placeholder="student Photo" name="stdfifthph" id="stdfifthph" required > <br> <br>

          <label for="stdagefifth"> Student Age</label>
          <input type="number" class="input" placeholder="Student Age" name="stdagefifth" id="stdagefifth" required > <br> <br>] 

          <label for="stddivfifth"> Student Class Division</label>
          <input type="text" class="input" placeholder="Student Class Division" name="stddivfifth" id="stddivfifth" required > <br> <br>

    <label for="amount">Amount:</label>
    <input class="input" type="number" name="amount" id="amount" value="2000" readonly >
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