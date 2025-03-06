<?php

require "Validator.php";

        if(Validator::number($_POST["id"])){




            }
                if(isset($_POST["id"])){
                        $sql = "DELETE FROM posts
                                WHERE id = :id";

                        $params = ["id" => $_POST["id"]];
                        $post = $db->query($sql, $params)->fetch();

                        header("location: /");
    
                    }
$errors = [];



