<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="setting.css" rel="stylesheet">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<table  class="table table-bordered">
<?php
// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli("localhost", "root", "", "zero waste");

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// กำหนดวันที่ที่ต้องการกรอง
$date = '2024-08-12'; // เปลี่ยนวันที่ตามต้องการ

// สร้าง SQL Query
$sql = "SELECT history.date, user.name, user.id, user.class, history.count 
        FROM history 
        INNER JOIN user ON history.id = user.id 
        WHERE DATE(history.date) = '$date' 
        ORDER BY history.date ASC";

$result = $conn->query($sql);

// แสดงข้อมูล
if ($result->num_rows > 0) {
    echo "
    <tr>
    <th>Date</th>
    <th>Name</th>
    <th>ID</th>
    <th>Class</th>
    <th>Count</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"] . "</td><td>" . $row["name"] . "</td><td>" . $row["id"] . "</td><td>" . $row["class"] . "</td><td>" . $row["count"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>
</body>
</html>