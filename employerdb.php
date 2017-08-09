<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rekroot";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<?php
if(isset($_POST['insert'])) {
     $email = $_POST['email'];
     $location = $_POST['location']; 
     $job_title = $_POST['job_title'];
     $job_type = $_POST['job_type'];
     $salary = $_POST['salary'];
     $job_description = $_POST['job_description'];
     $company_name = $_POST['company_name'];
     $company_website = $_POST['company_website'];
     $tagline = $_POST['tagline'];
     $application_email = $_POST['application_email'];
     $company_description = $_POST['company_description'];
    
          

     $sql = mysql_query('INSERT INTO employers VALUES("$email","$location","$job_title",
     "$job_type","$salary","$job_description","$application_email","$company_name","$company_website","$tagline","company_description")');


?>

   <?php } ?>