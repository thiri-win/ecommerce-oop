<?php

namespace classes;

use libs\Database;

class Cart extends Database
{
    public function store($data=[])
    {
        $query = "INSERT INTO carts (user_id, product_id, price, qty, total) VALUES (:user_id, :product_id, :price, :qty, :total)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':user_id' => $data['user_id'],
            ':product_id' => $data['product_id'],
            ':price' => $data['price'],
            ':qty' => $data['qty'],
            ':total' => $data['total']
        ]);
        return $result->rowCount();
    }
    
    public function checkProduct($user_id, $product_id)
    {
        $query = "SELECT * FROM carts WHERE user_id=:user_id AND product_id=:product_id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':user_id' => $user_id,
            ':product_id' => $product_id
        ]);
        return $result->rowCount();
    }

    public function find($user_id)
    {
        $query = "SELECT * FROM carts WHERE user_id=:user_id";
        $result = $this->connect()->prepare($query);
        $result->execute([':user_id' => $user_id]);
        return $result->fetchAll();
    }

    public function count($user_id)
    {
        $query = "SELECT * FROM carts WHERE user_id=:user_id";
        $result = $this->connect()->prepare($query);
        $result->execute([':user_id' => $user_id]);
        return $result->rowCount();
    }

    public function delete($user_id, $product_id)
    {
        $query = "DELETE FROM carts WHERE user_id=:user_id AND product_id=:product_id";
        $result= $this->connect()->prepare($query);
        $result->execute([
            ":user_id" => $user_id,
            ":product_id" => $product_id
        ]);
        return $result->rowCount();
    }
}