<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
h2{
  padding: 15px;
  border: 1px solid #252525;
  background-color: #252525;
  color: #fff;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;

}
a {
  text-decoration: none;
}
</style>
</head>
<body>
        <?php
            require_once ('connect.php');
            $sql = "SELECT * FROM sanpham";
            $result = $db -> query($sql);
        ?>

<h2>DANH SÁCH SẢN PHẨM</h2>
<p>Thêm sản phẩm mới tại đây: <a href="add-product.php"> + THÊM SẢN PHẨM</a></p>

<table>
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Mã phân loại</th>
        <th>Mô tả</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php 
        $dem = 0;
        while($rs = $result ->fetch()){
            $dem++;
        ?>
        <tr>
        <td><?php echo $rs['maSP'] ?></td>
        <td><?php echo $rs['tenSP'] ?></td>
        <td><img src="images/<?php echo $rs['hinhAnh'] ?>" width = "100px" ></td>
        <td><?php echo $rs['soLuong'] ?></td>
        <td><?php echo $rs['donGia'] ?></td>
        <td><?php echo $rs['maPhanLoai'] ?></td>
        <td><?php echo $rs['moTa'] ?></td>
        <td><button><a href="edit-product.php?id=<?php echo $rs['maSP'] ?>">Sửa</a></button></td>
        <td><button><a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="delete-product.php?id=<?php echo $rs['maSP'] ?>" >Xóa</a></button></td>
        </tr>
        <?php } ?>
</table>

</body>
</html>
