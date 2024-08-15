<?php class product
{
    private $conn;
    public $id, $name, $price, $img, $description, $view, $id_category;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM product";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $listProduct = $stmt->fetchAll();
            return $listProduct;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
    public function getProduct()
    {

        try {
            $sql = "SELECT * FROM product WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $product = $stmt->fetch();
            return $product;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }


    //chua xong
    public function postProduct()
    {
        try {
            $sql = "INSERT INTO product
            VALUES(:name,:price,:img,:description,:id_category)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':name' => $this->name,
                ':price' => $this->price,
                ':img' => $this->img,
                ':description' => $this->description,
                ':id_category' => $this->id_category,
            ]);
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    //chua xong 
    public function updateProduct()
    {

        try {
            $sql = "UPDATE product
            SET name = :name,
            price = :price,
            img =:img,
            description=:description,
            id_category=:id_category
            WHERE id=:id
            ";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute(
                [
                    ':name' => $this->name,
                    ':price' => $this->price,
                    ':img' => $this->img,
                    ':description' => $this->description,
                    ':id_category' => $this->id_category
                ]
            );
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}
