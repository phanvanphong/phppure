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
        $tenSP = $_POST['tenSP'];
        $soLuong = $_POST['soLuong'];
        $donGia = $_POST['donGia'];
        $maPhanLoai = $_POST['maPhanLoai'];
        $moTa = $_POST['moTa'];

        // Phần hình ảnh
        $hinhAnh = $_FILES['file']['name'];
        $linkup = "images/";
        move_uploaded_file($_FILES['file']['tmp_name'],$linkup.$hinhAnh);

        $sql = "INSERT INTO sanpham VALUES ('','".$tenSP."','".$hinhAnh."','".$soLuong."','".$donGia."','".$maPhanLoai."','".$moTa."')";
        $result = $db ->exec($sql);

        echo '<script language="javascript">';
        echo 'alert( "Thêm thành công" )';
        echo '</script>';  

        header('location: view-product.php');
    }
?>

<h1>Thêm sản phẩm</h1>
<p>Điền tất cả thông tin sản phẩm cần thêm theo mẫu dưới đây:</p>

<div class="container">
  <form action="" method = "post" enctype="multipart/form-data">
    <label>Tên sản phẩm</label>
    <input type="text" name="tenSP" placeholder="Nhập tên sản phẩm ..." required>

    <label>Hình ảnh</label>
    <input type="file" name = "file">

    <label>Số lượng</label>
    <input type="number" name="soLuong" placeholder="Số lượng ..." required>

    <label>Đơn giá</label>
    <input type="number" name="donGia" placeholder="Đơn giá ..." required>

    <label>Mã phân loại:</label>
    <input type="text" name = "maPhanLoai" placeholder = "Mã phân loại ...." required>

    <label>Mô tả</label>
    <textarea name="moTa" cols="30" rows="6" placeholder = "Mô tả ..." ></textarea>
  
    <input type="submit" name = "them" value="Thêm">
  </form>
</div>
</body>
</html>