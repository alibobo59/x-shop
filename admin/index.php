<?php
// setup moi truong
include_once '../common/env.php';
include_once '../common/function.php';
// include './header.php';
// include './footer.php';

// echo $_SERVER['DOCUMENT_ROOT'] . '/FPoly/DuAnMau/X-Shop/admin/view/home.php';
//include controller
include_once './controller/categoryController.php';
include './controller/homeController.php';

//include models
include_once './model/category.php';

$act = $_GET['act'] ?? "/";

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->home(),
    'list-category' => (new CategoryController())->listCategory(),
    'form-add-category' => (new CategoryController())->formAddCategory(),
    'post-add-category' => (new CategoryController())->postCategory()
};




// include './header.php';
// include './content.php';
// include './footer.php';
