<?php 
  //creating connection to database
  $hostName = "sql108.epizy.com";
$userName = "epiz_31662234";
$password = "iW2oIzFdTbi";
$databaseName = "epiz_32418068_message";
 $con = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  //check whether submit button is pressed or not

$subject = ($_REQUEST['subject']);
        $subject = mysqli_real_escape_string($con, $subject);
     
        $name    = ($_REQUEST['name']);
        $name   = mysqli_real_escape_string($con, $name);
        $email = ($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
         $phone = ($_REQUEST['phone']);
        $phone  = mysqli_real_escape_string($con,$phone );
         $message = ($_REQUEST['message']);
        $message  = mysqli_real_escape_string($con,$message );
  //query to insert the variable data into the database
$sql="INSERT INTO `messages`(name, email, phone,subject, message) VALUES ('$name','$email','$phone','$subject','$message')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
	echo die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";


?>