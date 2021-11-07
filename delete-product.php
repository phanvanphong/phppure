<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            require_once ('connect.php');
            $sql = "DELETE FROM sanpham WHERE maSP = '".$id."'";
            $result = $db -> exec($sql);

            header('location: view-product.php');
            $result->close();
        }
    ?>
</body>
</html>