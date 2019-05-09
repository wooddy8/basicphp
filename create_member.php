<?php
require "config/connect_mysql.php";
$msg = "";
//ตรวจสอบการ Submit form
if (!empty($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $tel      = $_POST['tel'];
    $password = $_POST['password'];
    $status   = $_POST['status'];

    $sql = "INSERT INTO members(fullname,email,tel,password,status) values
('$fullname','$email','$tel','$password','$status')";

    $query = mysqli_query($connect, $sql);

    if ($query)
    {
        $msg = "<div class='alert alert-success'>Add member success</div>";
    }
    else
    {
        $msg = "<div class='alert alert-danger'>Add member fail!!</div>";
    }

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="jumbotron bg-success text-white">
        <h1 class="display-5 text-center">Add New menber</h1>
    </div>
    <div class="container">
    <?=$msg;?>
        <form method="POST" action="create_member.php">
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="status" id="status" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" class="btn btn-primary" name="submit" value="submit">
                </div>
            </div>
        </form>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
