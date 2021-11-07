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

      $sql = "SELECT * FROM sanpham WHERE maSP = '".$id."' ";
      $result = $db ->query($sql);
      $rs = $result ->fetch();

    if(isset($_POST['sua'])){
        $tenSP = $_POST['tenSP'];
        $soLuong = $_POST['soLuong'];
        $donGia = $_POST['donGia'];
        $maPhanLoai = $_POST['maPhanLoai'];
        $moTa = $_POST['moTa'];

        // Phần hình ảnh
        $hinhAnh = $_FILES['file']['name'];
        $linkup = "images/";
        move_uploaded_file($_FILES['file']['tmp_name'],$linkup.$hinhAnh);

        $sql = "UPDATE sanpham SET tenSP = '".$tenSP."', hinhAnh = '".$hinhAnh."', soLuong = '".$soLuong."', donGia = '".$donGia."', maPhanLoai = '".$maPhanLoai."', moTa = '".$moTa."' WHERE maSP = '".$id."' ";
        $result = $db ->exec($sql);

        header('location: view-product.php');
    }
    }
?>

<h1>Sửa thông tin sản phẩm</h1>
<p>Sửa thông tin sản phẩm mà bạn cần sửa:</p>

<div class="container">
  <form action="" method = "post" enctype="multipart/form-data">
    <input type="hidden" name = "id" value = "<?php echo $rs['maSP'] ?>">
    <label>Tên sản phẩm</label>
    <input type="text" name="tenSP" placeholder="Nhập tên sản phẩm ..." required value = "<?php echo $rs['tenSP'] ?>">

    <label>Hình ảnh</label>
    <input type="file" name = "file" required>
    <img src="images/<?php echo $rs['hinhAnh'] ?>" width = "100px"><br>

    <label>Số lượng</label>
    <input type="number" name="soLuong" placeholder="Số lượng ..." required value = "<?php echo $rs['soLuong'] ?>">

    <label>Đơn giá</label>
    <input type="number" name="donGia" placeholder="Đơn giá ..." required value = "<?php echo $rs['donGia'] ?>">

    <label>Mã phân loại</label>
    <input type="text" name = "maPhanLoai" placeholder = "Mã phân loại ..." required value = "<?php echo $rs['maPhanLoai'] ?>">

    <label>Mô tả</label>
    <textarea name="moTa" cols="30" rows="6" placeholder = "Mô tả ...">
    <?php echo$rs['moTa'] ?>
    </textarea>
  
    <input type="submit" name = "sua" value="Sửa">
  </form>
</div>
</body>
</html>