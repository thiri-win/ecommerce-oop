<?php

namespace classes;

use libs\Database;

class Checkout extends Database
{
    public function store($data=[])
    {
        $query = "INSERT INTO checkouts (user_id, name, email, address) VALUES (:user_id, :name, :email, :address)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ":user_id" => $data['user_id'],
            ":name" => $data['name'],
            ":email" => $data['email'],
            ":address" => $data['address'],
        ]);
        return $result->rowCount();
    }   
}