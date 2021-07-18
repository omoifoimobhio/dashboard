<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productlist";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['reg_p'])) {
// receive all input values from the form
$pname = mysqli_real_escape_string($conn,$_POST['pname']);
$price = mysqli_real_escape_string($conn,$_POST['pirce']);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO products (product_name,product_price,)
VALUES ('$pname', '$price',)";
if ($conn->query($sql) === TRUE) {
echo "alert('New record created successfully')";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>