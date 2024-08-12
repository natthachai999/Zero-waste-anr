<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anukoolnaree Zero waste</title>
    <link href="setting.css" rel="stylesheet">
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




</head>





<body>
    
<div class="c_">
    <div class="container mt-3">
        <h1>Log in</h1>
        <form  method="POST">
          <div class="mb-3 mt-3">
            <label for="number">ID:</label>
            <input type="number" class="form-control" id="user" placeholder="Enter ID" name="user">
          </div>
          <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


<div class="add">
    <a href="###">for addmin</a>
</div>

    </div>

    <footer>

    </footer>
</body>




<?php
// ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zero waste";

// สร้าง connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม
$id = $_POST['user'];
$password = $_POST['pwd'];

// เตรียม SQL เพื่อค้นหาข้อมูลผู้ใช้
$sql = "SELECT * FROM user WHERE id ='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // หากพบข้อมูลผู้ใช้ ให้สร้าง session และ redirect
    session_start();
    $_SESSION['id'] = $id;
   // echo "<script>alert('welcome');</script>";

    //header("Location: insert.php");
} else {
    // หากไม่พบข้อมูล ให้แสดงข้อความ error
    //echo <script>var message = 'ข้อมูลไม่ถูกต้อง';</script>;
    echo "Username or password incorrect";
}

$conn->close();
?>

</html>

