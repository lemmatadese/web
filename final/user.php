<?php
// Set the database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userregisteration";


// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connect success";
}

    
    
    // Insert data into the table
    if (isset($_POST['login'])) {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['add'];
        $password = $_POST['passwor'];
    
        $sql = "INSERT INTO userreg (fname, mname, lname, dateob, email, gender, addres, passwor) VALUES ('$fname', '$mname', '$lname', '$date', '$email', '$gender', '$address', '$password')";
    
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    // Close the connection
    mysqli_close($conn);
  


?>

