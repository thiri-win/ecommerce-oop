<?php

namespace classes;

use libs\Database;

class Product extends Database
{

    public function all()
    {
        $query = "SELECT * FROM products";
        $result = $this->connect()->prepare($query);
        $result->execute();
        return $result->fetchAll();
    }

    public function find($id)
    {
        $query = "SELECT * FROM products WHERE id=:id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id,
        ]);
        return $result->fetchObject();
    }

    public function store($data=[])
    {
        $query = "INSERT INTO products (name, category_id, price, about, image) VALUES (:name, :category_id, :price, :about, :image)";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':name' => $data['name'],
            ':category_id' => $data['category_id'],
            ':price' => $data['price'],
            ':about' => $data['about'],
            ':image' => $data['image'],
        ]);
        return $result->rowCount();
    }

    public function update($data=[])
    {
        if(isset($data['image'])) {
            $query = "UPDATE products SET name=:name, category_id=:category_id, price=:price, about=:about, image=:image WHERE id=:id";
        } else {
            $query = "UPDATE products SET name=:name, category_id=:category_id, price=:price, about=:about WHERE id=:id";
        }
        $result = $this->connect()->prepare($query);
        $result->execute($data);
        return $result->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM products WHERE id=:id";
        $result = $this->connect()->prepare($query);
        $result->execute([
            ':id' => $id
        ]);
        return $result->rowCount();
    }

}

// $product = new Product();

// $product->store([
    // 'name' => "NIKE", 
    // 'category_id' => 2, 
    // 'price' => 125, 
    // 'about' => 'lorem ipsum...', 
    // 'image' => 'photos/shoe.jpg'
// ]);

// print_r($product->find(2));

// $product->update([
//     'id'=> 1, 
//     'name' => "NIKE", 
//     'category_id' => 2, 
//     'price' => 125, 
//     'about' => 'lorem ipsum...', 
//     'image' => 'photos/shoe.jpg'
// ]);

// print_r($product->all());

// $product->delete(1);
