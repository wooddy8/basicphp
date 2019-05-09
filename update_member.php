<?php
require "config/connect_mysql.php";
$msg = "";
if (!empty($_POST['submit']))
{

    $sql = "UPDATE members SET ";
    $sql .= "fullname = '" . $_POST["fullname"] . "' ";
    $sql .= ",email = '" . $_POST["email"] . "' ";
    $sql .= ",tel = '" . $_POST["tel"] . "' ";
    $sql .= ",password = '" . $_POST["password"] . "' ";
    $sql .= ",status = '" . $_POST["status"] . "' ";
    $sql .= "WHERE id = '" . $_GET["id"] . "' ";
    $query = mysqli_query($connect, $sql);

    if ($query)
    {
        $msg = "<div class='alert alert-success'>Edit member success</div>";
    }
    else
    {
        $msg = "<div class='alert alert-danger'>Edit member fail!!</div>";
    }

}

//รับค่าข้อมูลที่จะแก้ไข
$id = $_GET['id'];

//เรียกข้อมูล Member ตาม ID
$sql_read   = "SELECT * FROM members where id='$id'";
$query_read = mysqli_query($connect, $sql_read); // read data in
$data_read  = mysqli_fetch_assoc($query_read);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron bg-success text-white">
        <h1 class="display-5 text-center">Edit menber</h1>
    </div>
    <div class="container">
    <?=$msg;?>
        <form method="POST" action="update_member.php?id=<?php echo $data_read['id']; ?>">
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $data_read['fullname'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" value="<?php echo $data_read['email'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" value="<?php echo $data_read['tel'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" value="<?php echo $data_read['password'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" name="status" id="status" placeholder="" value="<?php echo $data_read['status'] ?>">
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
</body>
</html>
