<?php
//file links

require "Database.php";
require "function.php";

$config = require("config.php");

//end of file link

echo "sss <br>";



$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchALL();

// dabut rezultatu
// dump and die
// dd($posts[0]["content"]);
// foreach

echo "<ul>";
foreach($posts as $post){   
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>"; 

?>