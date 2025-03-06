<?php

require "Validator.php";

        if(Validator::number($_POST["id"])){




        }
                if(isset($_POST["id"])){
                        $sql = "DELETE FROM categories
                                WHERE id = :id";

                        $params = ["id" => $_POST["id"]];
                        $post = $db->query($sql, $params)->fetch();

                        header("location: /categories");
    
                }
$errors = [];
