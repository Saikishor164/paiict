<!DOCTYPE html>
<html>
<head>
    <title>Form</title>

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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Generate a unique user ID
        $user_id = uniqid();

        // Initialize variables to store form data
        $nameinst = $instadd = $instemail = $principal = $principalno = $teamname = $mentorname = $mentorno = $mentorquali = $stdfirstna = $stdagefirst = $stddivfirst = $stdsecna = $stdagesec = $stddivsec = $stdthridna = $stdagethrid = $stddivthrid = $stdfourtna = $stdagefourt = $stddivfourt = $stdfifthna = $stdagefifth = $stddivfifth = $amount = "";

        // Check if the keys exist before accessing them
        if (isset($_POST["nameinst"])) {
            $nameinst = $_POST["nameinst"];
        }
        if (isset($_POST["instadd"])) {
            $instadd = $_POST["instadd"];
        }
        if (isset($_POST["instemail"])) {
            $instemail = $_POST["instemail"];
        }
        if (isset($_POST["principal"])) {
            $principal = $_POST["principal"];
        }
        if (isset($_POST["principalno"])) {
            $principalno = $_POST["principalno"];
        }
        if (isset($_POST["teamname"])) {
            $teamname = $_POST["teamname"];
        }
        if (isset($_POST["mentorname"])) {
            $mentorname = $_POST["mentorname"];
        }
        if (isset($_POST["mentorno"])) {
            $mentorno = $_POST["mentorno"];
        }
        if (isset($_POST["mentorquali"])) {
            $mentorquali = $_POST["mentorquali"];
        }
        if (isset($_POST["stdfirstna"])) {
            $stdfirstna = $_POST["stdfirstna"];
        }
        if (isset($_POST["stdagefirst"])) {
            $stdagefirst = $_POST["stdagefirst"];
        }
        if (isset($_POST["stddivfirst"])) {
            $stddivfirst = $_POST["stddivfirst"];
        }
        if (isset($_POST["stdsecna"])) {
            $stdsecna = $_POST["stdsecna"];
        }
        if (isset($_POST["stdagesec"])) {
            $stdagesec = $_POST["stdagesec"];
        }
        if (isset($_POST["stddivsec"])) {
            $stddivsec = $_POST["stddivsec"];
        }
        if (isset($_POST["stdthridna"])) {
            $stdthridna = $_POST["stdthridna"];
        }
        if (isset($_POST["stdagethrid"])) {
            $stdagethrid = $_POST["stdagethrid"];
        }
        if (isset($_POST["stddivthrid"])) {
            $stddivthrid = $_POST["stddivthrid"];
        }
        if (isset($_POST["stdfourtna"])) {
            $stdfourtna = $_POST["stdfourtna"];
        }
        if (isset($_POST["stdagefourt"])) {
            $stdagefourt = $_POST["stdagefourt"];
        }
        if (isset($_POST["stddivfourt"])) {
            $stddivfourt = $_POST["stddivfourt"];
        }
        if (isset($_POST["stdfifthna"])) {
            $stdfifthna = $_POST["stdfifthna"];
        }
        if (isset($_POST["stdagefifth"])) {
            $stdagefifth = $_POST["stdagefifth"];
        }
        if (isset($_POST["stddivfifth"])) {
            $stddivfifth = $_POST["stddivfifth"];
        }
        if (isset($_POST["amount"])) {
            $amount = $_POST["amount"];
        }

        // Handle file uploads here
        $institution_folder = "uploads/" . $nameinst;
        if (!file_exists($institution_folder)) {
            mkdir($institution_folder, 0777, true);
        }

        // File uploads code starts here
    $mentoradhar_file = $institution_folder . "/" . $_FILES["mentoradhar"]["name"];
    move_uploaded_file($_FILES["mentoradhar"]["tmp_name"], $mentoradhar_file);

    $stdfirstph_file = $institution_folder . "/" . $_FILES["stdfirstph"]["name"];
    move_uploaded_file($_FILES["stdfirstph"]["tmp_name"], $stdfirstph_file);

    $stdsecph_file = $institution_folder . "/" . $_FILES["stdsecph"]["name"];
    move_uploaded_file($_FILES["stdsecph"]["tmp_name"], $stdsecph_file);

    $stdfourtph_file = $institution_folder . "/" . $_FILES["stdfourtph"]["name"];
    move_uploaded_file($_FILES["stdfourtph"]["tmp_name"], $stdfourtph_file);

    $stdfifthph_file = $institution_folder . "/" . $_FILES["stdfifthph"]["name"];
    move_uploaded_file($_FILES["stdfifthph"]["tmp_name"], $stdfifthph_file);

    // File uploads code ends here

    // $mentoradhar = $upload_dir . $_FILES["mentoradhar"]["name"];
    // move_uploaded_file($_FILES["mentoradhar"]["tmp_name"], $mentoradhar);

    // $stdfirstph = $upload_dir . $_FILES["stdfirstph"]["name"];
    // move_uploaded_file($_FILES["stdfirstph"]["tmp_name"], $stdfirstph);

    // $stdsecph = $upload_dir . $_FILES["stdsecph"]["name"];
    // move_uploaded_file($_FILES["stdsecph"]["tmp_name"], $stdsecph);

    // $stdfourtph= $upload_dir . $_FILES["stdfourtph"]["name"];
    // move_uploaded_file($_FILES["stdfourtph"]["tmp_name"], $stdfourtph);

    // $stdfifthph = $upload_dir . $_FILES["stdfifthph"]["name"];
    // move_uploaded_file($_FILES["stdfifthph"]["tmp_name"], $stdfifthph);


        // Database insertion code
        // Database insertion code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "paiict";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    

    $sql = "INSERT INTO `registration`(`id`, `nameinst`, `instadd`, `instemail`, `principal`, `principalno`, `teamname`, `mentorname`, `mentorno`, `mentorquali`, `mentoradhar`, `stdfirstna`, `stdfirstph`, `stdagefirst`, `stddivfirst`, `stdsecna`, `stdsecph`, `stdagesec`, `stddivsec`, `stdthridna`, `stdthridph`, `stdagethrid`, `stddivthrid`, `stdfourtna`, `stdfourtph`, `stdagefourt`, `stddivfourt`, `stdfifthna`, `stdfifthph`, `stdagefifth`, `stddivfifth`, `amount`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssssssssssssssssssssssssssssss", $id, $nameinst, $instadd, $instemail, $principal, $principalno, $teamname, $mentorname, $mentorno, $mentorquali, $mentoradhar, $stdfirstna, $stdfirstph, $stdagefirst, $stddivfirst, $stdsecna, $stdsecph, $stdagesec, $stddivsec, $stdthridna, $stdthridph, $stdagethrid, $stddivthrid, $stdfourtna, $stdfourtph, $stdagefourt, $stddivfourt, $stdfifthna, $stdfifthph, $stdagefifth, $stddivfifth, $amount);

        // $stmt->bind_param("sssssssssssssssssssssssssssssss", $nameinst, $instadd, $instemail, $principal, $principalno, $teamname, $mentorname, $mentorno, $mentorquali, $mentoradhar_file, $stdfirstna, $stdfirstph_file, $stdagefirst, $stddivfirst, $stdsecna, $stdsecph_file, $stdagesec, $stddivsec, $stdthridna, $stdthridph_file, $stdagethrid, $stddivthrid, $stdfourtna, $stdfourtph_file, $stdagefourt, $stddivfourt, $stdfifthna, $stdfifthph_file, $stdagefifth, $stddivfifth, $amount);

        // Display a success message or handle errors
        // ...
    

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }

    $conn->close();
}
    ?>
 
<br><br><br>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-sm-12 form-group">
    <form method="post" enctype="multipart/form-data">
        <!-- Your form fields here -->
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> <br><br>
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
          <input type="text" class="input" placeholder="Name of first Student" name="stdfirstdsecnastna" id="stdsecna" required > <br> <br>

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
    <button value="submit" name="submit" type="submit">Submit</button>
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
  </body>
</html>
