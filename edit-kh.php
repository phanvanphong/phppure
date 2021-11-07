<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/add-product.css" />
</head>
<body>
    <?php
        require_once ('connect.php');
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM khachhang WHERE maKH = '".$id."' ";
            $result = $db -> query($sql);
            $rs = $result -> fetch();

        if(isset($_POST['sua'])){
            $tenKH = $_POST['tenKH'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $soDT = $_POST['soDT'];
            $email = $_POST['email'];
            $diaChi = $_POST['diaChi'];
            $role = $_POST['role'];

            $sql = "UPDATE khachhang SET tenKH = '".$tenKH."', username = '".$username."', password = '".$password."', soDT = '".$soDT."', email = '".$email."', diaChi = '".$diaChi."', role = '".$role."' WHERE maKH = '".$id."' ";
            $result = $db -> exec($sql);

            header('location: view-kh.php');
        }

        }
    ?>

<h1>Sửa thông tin khách hàng</h1>
<p>Chỉnh sửa thông tin khách hàng theo các mục dưới đây:</p>

<div class="container">
  <form action="" method = "post" enctype="multipart/form-data">
    <input type="hidden" name = "id" value = '<?php echo $rs['maKH'] ?>' >

    <label>Tên khách hàng</label>
    <input type="text" name="tenKH" placeholder="Nhập tên khách hàng ..." value = "<?php echo $rs['tenKH'] ?>" required>

    <label>Tài khoản</label>
    <input type="text" name="username" placeholder="Nhập tên khách hàng ..." value = "<?php echo $rs['username'] ?>" required>

    <label>Mật khẩu</label>
    <input type="text" name="password" placeholder="Nhập số điện thoại ..." value = "<?php echo $rs['password'] ?>" required>

    <label>Số điện thoại</label>
    <input type="text" name="soDT" placeholder="Nhập số điện thoại ..." value = "<?php echo $rs['soDT'] ?>" required>

    <label>Email</label>
    <input type="text" name="email" placeholder="Nhập email ..." value = '<?php echo $rs['email'] ?>' required>

    <label>Địa chỉ</label>
    <input type="text" name = "diaChi" placeholder = "Nhập địa chỉ ..." value = '<?php echo $rs['diaChi'] ?>' required>

    <label>Role</label>
    <input type="text" name = "role" placeholder = "Nhập địa chỉ ..." value = '<?php echo $rs['role'] ?>' required>

    <input type="submit" name = "sua" value="Sửa">
  </form>
</body>
</html>