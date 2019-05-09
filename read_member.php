<?php
require "config/connect_mysql.php";

$sql   = "SELECT * FROM members";
$query = mysqli_query($connect, $sql); // read data in

//นับจำนวนแถวที่พบในตาราง
$row = mysqli_num_rows($query);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="jumbotron">
        <h1 class="display-4">Member Data</h1>
    </div>
    <div class="container-fluid">
    <?php
echo "<h3 class='mb-4'>พบข้อมูลทั้งหมด ", $row, " รายการ</h3>";
echo "<p><a href='create_member.php' class='btn btn-primary'>เพิ่มสมาชิก</a></p>";

//ทำการ loop ข้อมูลมาแสดง
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Fullname</th>";
echo "<th>Email</th>";
echo "<th>Tel</th>";
echo "<th>Password</th>";
echo "<th>Status</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

while ($data = mysqli_fetch_assoc($query))
{
    echo "<tr>";
    echo "<td>", $data["id"], "</td>";
    echo "<td>", $data["fullname"], "</td>";
    echo "<td>", $data["email"], "</td>";
    echo "<td>", $data["tel"], "</td>";
    echo "<td>", $data["password"], "</td>";
    echo "<td>", $data["status"], "</td>";
    echo "<td>", '<a href="update_member.php?id=' . $data['id'] . '" class="btn btn-warning">แก้ไข</a>', '  ', '<a href="delete_member.php?id=' . $data['id'] . '" class="btn btn-danger">ลบ</a>', "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
</div>
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>