<?php 

$conn=new mysqli("localhost","root","","adminlogin");

/*if($conn->connect_error)
{
    die("connection failed");
}
else{
    echo "connect success";
}
$sql = "CREATE TABLE admin(
    
    password VARCHAR(30) ,
    email VARCHAR(50)
    )";
if($conn->query($sql) == TRUE){
    echo "Table created successfully";
}
else{
    echo "Error creating table: " . $conn->error;

}*/

/*$sqli="insert into admin(email,password) values ('lemmatadese303@gmail.com','lemalema')";
if (mysqli_query($conn, $sqli)) {
} else {
    echo "Error creating record: " . mysqli_error($conn);
}*/
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

// check if user exists
if (mysqli_num_rows($result) == 1) {
    // user is authenticated, redirect to dashboard or home page
    header("Location: home.html.php");
    exit();
} else {
    // user is not authenticated, display error message
    echo "Invalid email or password";
}
mysqli_close($conn);
?>