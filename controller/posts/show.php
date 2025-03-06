<?php

if (!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

        $sql = "SELECT * FROM posts WHERE id = :id";
        $params = ["id" => $_GET["id"]];
        $post = $db->query($sql, $params)->fetch();

if (!$post) {
        redirectIfNotFound();
}
$pagetitle = $post['content'];
require "views/posts/show.view.php";