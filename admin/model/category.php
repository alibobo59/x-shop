<?php class Category
{
    private $conn;
    public $id, $name;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM category";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $listProduct = $stmt->fetchAll();
            return $listProduct;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
    public function getCategory($id_category)
    {

        try {
            $this->id = $id_category;
            $sql = "SELECT * FROM category WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $category = $stmt->fetch();
            return $category;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }


    //chua xong
    public function postCategory($category_name)
    {
        try {
            $this->name = $category_name;
            $sql = "INSERT INTO category (name)
            VALUES(:name)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $this->name,
            ]);
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    //chua xong 
    public function updateCategory()
    {

        try {
            $sql = "UPDATE category
            SET name = :name,
            
            WHERE id=:id
            ";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute(
                [
                    ':name' => $this->name,

                ]
            );
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}
