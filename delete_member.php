<?php
require "config/connect_mysql.php";
$msg = "";

echo $id = $_GET['id'];
$sql     = " DELETE FROM members";
$sql .= " WHERE id = '$id ' ";
$query = mysqli_query($connect, $sql);

if ($query)
{
    echo $msg = "<div class='alert alert-success'>Delete member success</div>";
}
else
{
    echo $msg = "<div class='alert alert-danger'>Delete member fail!!</div>";
}
