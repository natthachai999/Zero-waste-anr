
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zero waste";







// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// เตรียม SQL เพื่อค้นหาข้อมูลผู้ใช้
$sql = "SELECT * FROM `user` WHERE 1"


?>
