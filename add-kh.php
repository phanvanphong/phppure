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

        if(isset($_POST['them'])){
          $tenKH = $_POST['tenKH'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $soDT = $_POST['soDT'];
          $email = $_POST['email'];
          $diaChi = $_POST['diaChi'];

          $sql = "INSERT INTO khachhang VALUES ('','".$tenKH."','".$username."','".$password."','".$soDT."','".$email."','".$diaChi."','')";
          $result = $db ->exec($sql);

          header('location: login.php');
        }
    ?>

<h1>Đăng ký thành viên</h1>
<p>Điền tất cả thông tin khách hàng cần thêm theo mẫu dưới đây:</p>

<div class="container">
  <form action="" method = "post" enctype="multipart/form-data">
    <label>Tên khách hàng</label>
    <input type="text" name="tenKH" placeholder="Nhập tên khách hàng ..." required>

    <label>Tài khoản</label>
    <input type="text" name="username" placeholder="Nhập tài khoản ..." required>

    <label>Mật khẩu</label>
    <input type="text" name="password" placeholder="Nhập mật khẩu ..." required>

    <label>Số điện thoại</label>
    <input type="text" name="soDT" placeholder="Nhập số điện thoại ..." required>

    <label>Email</label>
    <input type="text" name="email" placeholder="Nhập email ..." required>

    <label>Địa chỉ</label>
    <input type="text" name = "diaChi" placeholder = "Nhập địa chỉ ..." required>

    <input type="submit" name = "them" value="Đăng ký">
  </form>
</body>
</html>