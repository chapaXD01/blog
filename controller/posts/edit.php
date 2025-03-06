<?php

require "Validator.php";

    if(isset($_GET["id"])){
    $sql = "SELECT * FROM posts
            WHERE id = :id";

    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
    
}
$errors = [];



        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            if(!Validator::string($_POST["content"], max: 50)){

                $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";

            }
   
            if (empty($errors)){
        
                $params = ["id" => $_POST["id"], "content" => $_POST["content"]];
                $sql = "UPDATE posts
                        SET content = :content
                        WHERE id = :id";
                        
                $post = $db->query($sql, $params)->fetch();
                header("Location: /show?id=".$_POST["id"]);
                exit();
            }
    
        }
    
    
    
   
require "views/posts/edit.view.php";

