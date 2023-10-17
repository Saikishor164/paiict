<?php
// Database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paiict";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs to prevent SQL injection
    $nameinst = mysqli_real_escape_string($conn, $_POST['nameinst']);
    $instadd = mysqli_real_escape_string($conn, $_POST['instadd']);
    $instemail = mysqli_real_escape_string($conn, $_POST['instemail']);
    $principal = mysqli_real_escape_string($conn, $_POST['principal']);
    $principalno = mysqli_real_escape_string($conn, $_POST['principalno']);
    $teamname = mysqli_real_escape_string($conn, $_POST['teamname']);
    $mentorname = mysqli_real_escape_string($conn, $_POST['mentorname']);
    $mentorno = mysqli_real_escape_string($conn, $_POST['mentorno']);
    $mentorquali = mysqli_real_escape_string($conn, $_POST['mentorquali']);
    
    // Insert data into the main table
    $sql = "INSERT INTO maindata (nameinst, instadd, instemail, principal, principalno, teamname, mentorname, mentorno, mentorquali) VALUES ('$nameinst', '$instadd', '$instemail', '$principal', '$principalno', '$teamname', '$mentorname', '$mentorno', '$mentorquali')";
    
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;

        // Process and insert data for each student
for ($i = 1; $i <= 5; $i++) {
    $stdname_key = 'std'.$i.'na';
    $stdph_key = 'std'.$i.'ph';
    $stdage_key = 'std'.$i.'age';
    $stddiv_key = 'std'.$i.'div';

    // Check if keys are set before accessing them
    if (isset($_POST[$stdname_key]) && isset($_FILES[$stdph_key]) && isset($_POST[$stdage_key]) && isset($_POST[$stddiv_key])) {
        $stdname = mysqli_real_escape_string($conn, $_POST[$stdname_key]);

        // Define the path to the "uploads" folder
        $uploadsFolder = "uploads/";

        // Combine the folder path and the file name
        $stdphoto = $uploadsFolder . $_FILES[$stdph_key]['name'];

        // Check for file upload errors
        if ($_FILES[$stdph_key]['error'] !== UPLOAD_ERR_OK) {
            die("File upload error: " . $_FILES[$stdph_key]['error']);
        }

        // Move the uploaded file to the destination directory
        if (!move_uploaded_file($_FILES[$stdph_key]['tmp_name'], $stdphoto)) {
            die("Failed to move the uploaded file");
        }

        $stdage = mysqli_real_escape_string($conn, $_POST[$stdage_key]);
        $stddiv = mysqli_real_escape_string($conn, $_POST[$stddiv_key]);

        // Insert student data into a separate table
        $sql_student = "INSERT INTO studenttable (main_id, stdname, stdphoto, stdage, stddiv) VALUES ('$last_id', '$stdname', '$stdphoto', '$stdage', '$stddiv')";

        if (!$conn->query($sql_student)) {
            die("Error inserting student data: " . $conn->error);
        }
    }
}

        echo "Records inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

