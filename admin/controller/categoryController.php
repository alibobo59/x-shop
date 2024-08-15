<?php
class CategoryController
{


    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new Category();
    }

    public function listCategory()
    {
        $listCategory = $this->modelCategory->getAll();
        include $_SERVER['DOCUMENT_ROOT'] . "/FPoly/DuAnMau/X-Shop/admin/view/listCategory.php";
    }

    public function formAddCategory()
    {

        include $_SERVER['DOCUMENT_ROOT'] . "/FPoly/DuAnMau/X-Shop/admin/view/formAddCategory.php";
    }

    public function formUpdateCategory($id_category)
    {

        $category = $this->modelCategory->getCategory($id_category);

        include_once "./views/formUpdateCategory.php";
    }

    //chua xong
    public function postCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['category_name'])) {


            $categoryName = $_POST['category_name'];

            try {
                $this->modelCategory->postCategory($categoryName);
                header('Location: ./?act=list-category');
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage());
            }
        }
    }
    // public function postUpdateLop()
    // {
    //     if (
    //         $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['ma_lop'])
    //         && !empty($_POST['ten_lop'])
    //     ) {

    //         $id = $_POST['id'];
    //         $ten_lop = $_POST['ten_lop'];
    //         $ma_lop = $_POST['ma_lop'];

    //         try {
    //             $this->->updateLop($id, $ma_lop, $ten_lop);
    //             header('Location: ./?act=danhsachlop');
    //         } catch (PDOException $e) {
    //             throw new PDOException($e->getMessage());
    //         }
    //     } else {
    //         echo "lỗi update";
    //     }
    // }
}
