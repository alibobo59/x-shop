<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/FPoly/DuAnMau/X-Shop/admin/assets/adminViewStyle.css" />
    <title>Document</title>
</head>

<body>
    <div class="app-container">
        <header class="header-container">
            <div class="header admin">
                <h5>QUẢN TRỊ WEBSITE</h5>
            </div>
            <nav class="nav-container admin">
                <ul>
                    <li><a href="/index.html">Trang chủ</a></li>
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
            <form action="" class="form-add-productType admin">
                <table class="table-productType">
                    <thead>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listCategory as $key => $category):
                            var_dump($category)
                        ?>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td><?= $key ?></td>
                                <td><?= $category['name'] ?></td>
                                <td class="actions">
                                    <a href="./?act=form-update-category&id=<?= $category['id'] ?>"><button class="action-update">Sửa</button></a>
                                    <a href="./?act=delete-category&id=<?= $category['id'] ?>"><button class="action-delete">Xoá</button></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        <!-- <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>TH3663</td>
                            <td>Đồng Hồ G-shock</td>
                            <td class="actions">
                                <button class="action-update">Sửa</button>
                                <button class="action-delete">Xoá</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <div class="form-actions">
                    <input type="button" class="action-selectAll" value="Chọn tất cả" />
                    <input
                        type="button"
                        class="action-selectAll"
                        value="Bỏ chọn tất cả" />
                    <input
                        type="button"
                        class="action-selectAll"
                        value="Xoá các mục đã chọn" />
                    <a href="./?act=form-add-category"><button type="button" class="action-add">Nhập thêm</button></a>
                </div>
            </form>
        </main>

        <footer class="footer-container">
            <p>Tam Minh Đẹp Trai</p>
        </footer>
    </div>
</body>

</html>