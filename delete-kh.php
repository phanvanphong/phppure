<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once ('connect.php');
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM khachhang WHERE maKH = '".$id."'";
            $result = $db ->exec($sql);

            header('location: view-kh.php');
            $result->close();
        }
    
    ?>
</body>
</html>