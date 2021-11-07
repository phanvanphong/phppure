<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">        
        <link rel="stylesheet" href="CSS/admin.css">
    </head>
    <body>
        <?php
            session_start();
            require_once('connect.php');
            if(!isset($_SESSION['username'])){
                header('location: login.php');
            }
        ?>
        <div class="container">
            <header>
                <span>Xin chào <?php echo $_SESSION['username'] ?></span>
                <div class="link">
                <a href="index.php"> <i class="fas fa-home"></i>&nbspTrang chủ</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbspĐăng xuất</a>
                </div>
            </header>
            <main>
                <aside>
                    <div class="menu">
                        <p>ADMIN MENU</p>
                        <ul>
                            <li><a href="view-kh.php" target ="page">1. Quản lý thành viên</a></li>
                            <li><a href="view-product.php" target = "page">2. Quản lý sản phẩm</a></li>
                            <li><a href="view-order.php" target = "page">3. Quản lý đơn hàng</a></li>
                            <li><a href="view-order-detail.php" target = "page">4. Chi tiết hóa đơn</a></li>
                        </ul>
                    </div>
                </aside>
                <section class="content">
                    <div class="content-main">
                    <iframe name="page" src="view-product.php" scrolling="auto" frameborder="0" ></iframe>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>