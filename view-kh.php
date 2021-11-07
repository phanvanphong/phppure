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
</style>
</head>
<body>
<?php
  require_once ('connect.php');
  $sql = "SELECT * FROM khachhang";
  $result = $db ->query($sql);
?>
       
<h2>DANH SÁCH KHÁCH HÀNG</h2>
<p>Thêm khách hàng mới tại đây: <a href="add-kh.php"> + THÊM KHÁCH HÀNG</a></p>

<table>
    <tr>
      <th>Mã khách hàng</th>
      <th>Tài khoản</th>
      <th>Mật khẩu</th>
      <th>Tên khách hàng</th>
      <th>Số điện thoại</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Role</th>
      <th>Sửa</th>
      <th>Xóa</th>
    </tr>
    <?php 
        $dem = 0;
        while($rs = $result ->fetch()){
          $dem++;
    ?>
    <tr>
          <td><?php echo $rs['maKH'] ?></td>
          <td><?php echo $rs['tenKH'] ?></td>
          <td><?php echo $rs['username'] ?></td>
          <td><?php echo $rs['password'] ?></td>
          <td><?php echo $rs['soDT'] ?></td>
          <td><?php echo $rs['email'] ?></td>
          <td><?php echo $rs['diaChi'] ?></td>
          <td><?php echo $rs['role'] ?></td>
          <td><button><a href="edit-kh.php?id=<?php echo $rs['maKH'] ?>">Sửa</a></button></td>
          <td><button><a onclick = "return confirm('Bạn có chắc chắn muốn xóa ?')" href="delete-kh.php?id=<?php echo $rs['maKH'] ?>">Xóa</a></button></td>
    </tr>
        <?php } ?>
</table>

</body>
</html>
