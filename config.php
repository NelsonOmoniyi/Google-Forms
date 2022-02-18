<?php
            // for getting user inp
      if(isset($_POST["Submit"])){
            $firstname = $_POST["firstName"];
            $lastname = $_POST["lastName"];
            $email = $_POST["email"];
            $mobile = $_POST["mNumber"];
            $title = $_POST["title"];
            $picture = isset($_POST["picture"]);
            
    
    
}
// picture file details
    $name = isset($_FILES["picture"]["name"]);
    $type = isset($_FILES["file"]["type"]);
    $size = isset($_FILES["file"]["size"]);
    $ParmanentDest = "Uploads/" . isset($_FILES["file"]["name"]);
    $fileError = isset($_FILES["file"]["error"]);
    $tempName = isset($_FILES["file"]["tmp_name"]);
            // connect to database
            //{ mysqli_connect('host', 'username', 'password', 'dbname');
            $conn = new mysqli('localhost', 'nelsonom_form-data', 'Wshadow2000...', 'nelsonom_form-data');

            if ($conn->connect_errno > 0) {
                die("Connection Failed". $conn->connect_error);
            }else {
                // echo "<p style='color:green; font-size:10px;'><strong>CONGRATULATIONS!!!! </strong>Connection Successfull</p>";
            }

// error messages to display
$noFileToUpload = "<p><strong>Please Uplaod a picture. </strong></p>";
$FileAlreadyExists = "<p><strong>This file already exists. </strong></p>";
$wrongFormat = "<p><strong>Sorry you can only upload PNG and JPEG files. </strong></p>";
 $FileTOOLarge = "<p><strong>Sorry you can only upload file lesser than 20MB. </strong></p>";

            //  Hold error message
            $missingfirstName = '<p style="color: red; font-size: 10px;"><strong>Please enter your First Name</strong></p>';
            $missinglastName = '<p style="color: red; font-size: 10px;"><strong>Please enter your Last Name</strong></p>';
            $missingEmail = '<p style="color: red; font-size: 10px;"><strong>Please enter your Email Address</strong></p>';
            $invalidEmail = '<p style="color: red; font-size: 10px;"><strong>Please enter a valid Email Address</strong></p>';
            $missingMobileNumber = '<p style="color: red; font-size: 10px;"><strong>Please enter your Mobile Number</strong></p>';
            $missingtitle = '<p style="color: red; font-size: 10px;"><strong>Please enter a title</strong></p>';
            $missingpicture = '<p style="color: red; font-size: 10px;"><strong>Please upload a picture</strong></p>';

// Allowed format to be uploaded
$allowedFormat = array("PNG" => "application/PNG", "JPG" => "application/JPG", "JPEG" => "application/JPEG");
$errors = "";
if($fileError ==4){
    $errors .=$noFileToUpload;
}else{
     if(!in_array($type, $allowedFormat)){
         $errors .= $wrongFormat;
     }
     if (file_exists($ParmanentDest)) {
         $errors .= $FileAlreadyExists;
     }
     if($size > 20*1024*1024){
         $errors .=$FileTOOLarge;
     }
}
 
//  if ($errors) {
//      $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
//  echo($resultMessage);
//  }else{
//      if (move_uploaded_file($tempName, $ParmanentDest)) {
//          $resultMessage = '<div class="alert alert-success">File Uploaded Successfuly.</div>';
//          header("Location: ThanksForYourFile.php");
//      }else {
//          $resultMessage = '<div class="alert alert-warning">Unable to Upload file, Please try again later.</div>';
//          echo($resultMessage);
//      }
//  }
  

            // check for errors
            if (isset($_POST["Submit"])) {

                //send data to database

            $sql="INSERT INTO form (ID, firstName, lastName, email, mNumber, title, picture) VALUES (NULL, '$firstname', '$lastname', '$email', '$mobile', '$title', '$picture')";


                if (mysqli_query($conn, $sql)) {
                    // echo "<p style='background-color:green; font-size:10px;'><strong>CONGRATULATIONS!!!! </strong>Submission Successfull</p>";
                    echo '<script type="text/javascript"> alert("Your Data Have Been Submitted Successfuly"); </script>';
                }else{
                    echo '<script type="text/javascript"> alert("Error: Submission Failed"); </script>';
                    echo mysqli_error($conn);
                }
                
                mysqli_close($conn);
            }
?>