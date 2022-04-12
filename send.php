<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];




/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("192.168.0.21", "christian_main", "christ2183", "education");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution




$sql = "INSERT INTO test (firstName, lastName, email, subject, message) VALUES ('$fname', '$lname', '$email','$subject','$message')";

try {
    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
catch (mysqli_sql_exception $e)
{
    #echo('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    echo ($e);
}
// Close connection
mysqli_close($link);
?>
