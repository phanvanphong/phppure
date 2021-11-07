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
            $sql = "SELECT * FROM hoadon JOIN khachhang ON hoadon.maKH = khachhang.maKH";
            $result = $db -> query($sql);

            // Khi người dùng nhấn vào Edit để chuyển trạng thái từ chưa thanh toán sang đã thanh toán
            
        ?>

<h2>QUẢN LÝ ĐƠN HÀNG</h2>
<table>
    <tr>
        <th>Mã HĐ</th>
        <th>Khách hàng</th>
        <th>Ngày mua hàng</th>
        <th>Tổng tiền (VNĐ)</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
        <th>Tình Trạng</th>
        <th>Edit</th>
    </tr>
    <?php 
        $count = 0;
        while($rs = $result ->fetch()){
            $count++;
        ?>
        <tr>
            <td><?php echo $rs['maHD'] ?></td>
            <td><?php echo $rs['tenKH'] ?></td>
            <td><?php echo $rs['ngayMua'] ?></td>
            <td><?php echo number_format($rs['tongTien']) ?> đ</td>
            <td><?php echo $rs['diaChi'] ?></td>
            <td><?php echo $rs['ghichu']?></td>
            <td>
             <input type="submit" name ="submit" value ="<?php if(isset($rs['tinhTrang'])){
                   if($rs['tinhTrang'] == 0){
                       echo 'Chưa Thanh Toán';
                   }else{
                       echo 'Đã thanh Toán';
                   }
               } ?>">
            </td>
            <td><button><a href="edit-view-order.php?maHD=<?php echo $rs['maHD'] ?>">Edit</a></button></td>
        </tr>
        <?php } ?>
</table>

</body>
</html>
