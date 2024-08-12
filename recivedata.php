<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zero waste";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['student_id']) && isset($_GET['bottle_count'])) {
    $student_id = $_GET['student_id'];
    $bottle_count = intval($_GET['bottle_count']);
    
    // อัพเดทจำนวนขวดน้ำ
    //$sql = "UPDATE user SET bottle_count =    + $bottle_count, score = points + $bottle_count * 10 WHERE student_id = '$student_id'";
    $sql = "UPDATE user SET bottle_count =    + $bottle_count, WHERE student_id = '$student_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
