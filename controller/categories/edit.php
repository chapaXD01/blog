<?php

require "Validator.php";

    if(isset($_GET["id"])){
    $sql = "SELECT * FROM categories
            WHERE id = :id";

    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
    
}
$errors = [];



        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if(!Validator::string($_POST["category_name"], max: 50)){

                $errors["category_name"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";

            }
   
            if (empty($errors)){
        
                $params = ["id" => $_POST["id"], "category_name" => $_POST["category_name"]];
                $sql = "UPDATE categories
                        SET category_name = :category_name
                        WHERE id = :id";
                        
                $post = $db->query($sql, $params)->fetch();
                header("Location: /categories/show?id=".$_POST["id"]);
                exit();
            }
    
        }
    
    
    
   
require "views/categories/edit.view.php";

