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
            <input type="submit">

          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
<div class="add">
    <a href="###">for addmin</a>
</div>

    </div>

 


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

// เตรียม SQL เพื่อค้นหาข้อมูลผู้ใช้
$sql = "SELECT * FROM Customers
WHERE PostalCode LIKE 'S-958 22';"





?>





    <footer>

    </footer>
</body>