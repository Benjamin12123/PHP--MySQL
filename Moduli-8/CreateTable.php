<?php 

   $host = "localhost";
   $db = "db";
   $user = "root";
   $pass = "";

   try{
      $pdo = new PDO ("mysql:host = $host; dbname = $db", $user, $pass);
      $sql = "CREATE TABLE users(id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      username  VARCHAR(30) NOT NULL, password VARCHAR(50) NOT NULL)";

      $pdo->exec($sql);

      echo "Table Created Successfully";

   }catch(Exception $e){
      echo "Error Creating Table: " . $e->getMessage();
   }

//    DROP TABLE IF EXISTS products;
// DROP TABLE IF EXISTS categories;

// CREATE TABLE categories(
// 	id INTEGER PRIMARY KEY,
// 	name VARCHAR(255) NOT NULL
// );

// CREATE TABLE products(
// 	id INTEGER PRIMARY KEY,
// 	name VARCHAR(255) NOT NULL,
// 	category_id INTEGER NOT NULL,
// 	FOREIGN KEY (category_id) REFERENCES categories(id)
// );

// INSERT INTO categories(id,name) VALUES
// (1, 'Fruit'),
// (2, 'Bakery');

// INSERT INTO products (id,name, category_id) VALUES
// (1,'Apples',1),
// (2,'Bananas',1),
// (3,'Bread',2),
// (4,'Cake',2);

?>