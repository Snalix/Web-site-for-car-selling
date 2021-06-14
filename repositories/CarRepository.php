<?php

class CarRepository extends Db
{
    public function create($data)
    {
        $sql = "
            INSERT INTO cars(id, model, description, color, price, transmission, type_of_engine, picture, category, power, mileage)
            VALUES(NULL, :model, :description, :color, :price, :transmission, :type_of_engine, :picture, :category, :power, :mileage)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":model", $data["model"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":color", $data["color"], PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"], PDO::PARAM_INT);
        $stmt->bindValue(":transmission", $data["transmission"], PDO::PARAM_STR);
        $stmt->bindValue(":type_of_engine", $data["type_of_engine"], PDO::PARAM_STR);
        $stmt->bindValue(":picture", $data["picture"], PDO::PARAM_STR);
        $stmt->bindValue(":category", $data["category"], PDO::PARAM_STR);
        $stmt->bindValue(":power", $data["power"], PDO::PARAM_INT);
        $stmt->bindValue(":mileage", $data["mileage"], PDO::PARAM_INT);
        header('location: index.php');
        return $stmt->execute();
    }

    public function getAll()
    {
        $sql = "
            SELECT * FROM cars
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllByTopic($model)
    {
        $sql = "
            SELECT
                *
            FROM
                cars
            WHERE
                model LIKE CONCAT('%', :model , '%') OR
                description LIKE CONCAT('%', :model , '%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":model", $model, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function getById($id)
    {
        $sql = "
            SELECT * FROM cars WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($data)
    {
        $sql = "
            UPDATE
                cars
            SET
                model = :model,
                description = :description,
                price = :price,
                color = :color,
                category = :category,
                power = :power,
                mileage = :mileage,
                type_of_engine = :type_of_engine,
                transmission = :transmission,
                picture = :picture
            WHERE
                id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindValue(":model", $data["model"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":color", $data["color"], PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"], PDO::PARAM_INT);
        $stmt->bindValue(":transmission", $data["transmission"], PDO::PARAM_STR);
        $stmt->bindValue(":type_of_engine", $data["type_of_engine"], PDO::PARAM_STR);
        $stmt->bindValue(":picture", $data["picture"], PDO::PARAM_STR);
        $stmt->bindValue(":category", $data["category"], PDO::PARAM_STR);
        $stmt->bindValue(":power", $data["power"], PDO::PARAM_INT);
        $stmt->bindValue(":mileage", $data["mileage"], PDO::PARAM_INT);
        header('location: index.php');
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "
            DELETE FROM cars WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}