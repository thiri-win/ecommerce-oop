<?php

namespace classes;

include '../vendor/autoload.php';
use libs\Database;

class Category extends Database
{
    public function store($data = [])
    {
        $query = "INSERT INTO categories (title) VALUES (:title)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':title' => $data['title'],
        ]);
        return $result->rowCount();
    }

    public function find($id)
    {
        $query = "SELECT * FROM categories WHERE id = :id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        if($result->rowCount()){
            return $result->fetchObject();
        } else {
            return "Not Found";
        }
    }

    public function all() 
    {
        $query = "SELECT * FROM categories";
        $result = $this->connect()->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }

    public function update($data = [])
    {
        $query = "UPDATE categories SET title=:title WHERE id=:id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':title' => $data['title'],
            ':id' => $data['id']
        ]);
        return $result->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM categories WHERE id=:id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->rowCount();
    }
}

// composer dump-autoload

// $cat = new Category();
// $cat->store(['title' => 'cloth']);
// print_r($cat->find(3));
// print_r($cat->all());
// print_r($cat->update(['id' => 2, 'title' => 'shoes']));
// print_r($cat->delete(1));