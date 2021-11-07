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
            session_start();
            require_once ('connect.php');
            $sql = "SELECT * FROM hoadonchitiet JOIN sanpham ON hoadonchitiet.maSP = sanpham.maSP";
            $result = $db -> query($sql);

            // Khi người dùng nhấn vào Edit để chuyển trạng thái từ chưa thanh toán sang đã thanh toán
            
        ?>

<h2>CHI TIẾT HÓA ĐƠN</h2>
<table>
    <tr>
        <th>Mã HĐ</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
    </tr>
    <?php 
        $count = 0;
        while($rs = $result ->fetch()){
            $count++;
        ?>
        <tr>
            <td><?php echo $rs['maHD'] ?></td>
            <td><?php echo $rs['maSP'] ?></td>
            <td><?php echo $rs['tenSP'] ?></td>
            <td><?php echo $rs['donGia']/$rs['donGia'] ?></td>
            <td><?php echo $rs['donGia']?></td>
        </tr>
        <?php } ?>
</table>

</body>
</html>
