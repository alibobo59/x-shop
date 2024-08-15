<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style.css">
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
                <h1>THÊM MỚI LOẠI HÀNG</h1>
            </div>
            <form action="./?act=post-add-product" class="form-add-productType admin">
                <div class="form-control">
                    <label for="productType-id">Mã Loại</label>
                    <input disabled placeholder="auto number" type="text" name="productType-id" />
                </div>
                <div class="form-control">
                    <label for="productType-name">Tên loại</label>
                    <input type="text" name="productType-name" />
                </div>
                <div class="form-control btns">
                    <input type="submit" value="Thêm mới" />
                    <input type="button" value="Nhập lại" />
                    <input type="button" value="Danh sách" />
                </div>
            </form>
        </main>
        <footer class="footer-container">
            <p>Tam Minh Đẹp Trai</p>
        </footer>
    </div>

    </div>
</body>

</html>