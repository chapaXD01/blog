<?php

require "Validator.php";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if(!Validator::string($_POST["category_name"],  min:3 , max: 25)){

            $errors["category_name"] = "Nosaukumam jābūt no 3 lidz 25 rakstuzīmēm";

        }

            if (empty($errors)){
        
                $params = ["category_name" => $_POST["category_name"]];
                $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
                $post = $db->query($sql, $params)->fetch();
                header("Location: /categories/show?id=".$_POST["id"]);
       
            }
    $pagetitle = "create category";
}    
require "views/categories/create.view.php";
?>