<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userregisteration";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the table
if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['add'];
    $password = $_POST['passwor'];

    $sql = "UPDATE userreg SET fname='$fname', mname='$mname', lname='$lname', dateob='$date', email='$email', gender='$gender', 
    addres='$address',passwor='$password' WHERE passwor=$password";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }}
// Close the connection
mysqli_close($conn);
?>





