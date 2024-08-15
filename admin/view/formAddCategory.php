<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo '/FPoly/DuAnMau/X-Shop/admin/assets/adminViewStyle.css' ?>">
    <title>Document</title>
</head>

<body>

    <div class=" app-container">
        <header class="header-container">
            <div class="header admin">
                <h5>QUẢN TRỊ WEBSITE</h5>
            </div>
            <nav class="nav-container admin">
                <ul>
                    <li><a href="./view/home.php">Trang chủ</a></li>
                    <li><a href="/productType.html">Loại hàng</a></li>
                    <li><a href="#">Hàng Hoá</a></li>
                    <li><a href="#">Khách hàng</a></li>
                    <li><a href="#">Bình luận</a></li>
                </ul>
            </nav>
        </header>
        <main class="main-container admin">
            <div class="form-header header admin">
                <h1>Đây là trang Admin</h1>
            </div>
            <form action="./?act=post-add-category" method="post" class="form-add-productType admin">

                <div class="form-control">
                    <label for="category-name">Tên loại</label>
                    <input type="text" name="category_name" />
                </div>
                <div class="form-control btns">
                    <input name="submit" type="submit" value="Thêm mới" />
                    <input type="reset" value="Nhập lại" />
                    <a href="./?act=list-category"><input type="button" value="Danh sách" /></a>
                </div>
            </form>
        </main>
        <footer class="footer-container">
            <p>Tam Minh Đẹp Trai</p>
        </footer>
    </div>
</body>

</html>