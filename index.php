<?php
//file links

require "Database.php";
require "function.php";

$config = require("config.php");

//end of file link




// object
$db = new Database($config["database"]);

$select = "SELECT * FROM posts";
$params = [];
if(isset($_GET["search_query"]) && $_GET["search_query"] != "" ) {
    echo"atgriest ierakstus";

 // TODO: iegut filtretos ierakstus
 // dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%'; ");
 // for check

    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE content LIKE :nosaukums "; // sagatavotais vaicājums
    $params = ["nosaukums" => $search_query]; // pats parametrs

}
$posts = $db->query($select, $params)->fetchALL();




echo "<h1>blogs</h1>";

echo "<form>";

echo "<input name='search_query'/>";
echo "<button>Search</button>";

echo "</form>";

if(count($posts) == 0 ){
echo "L bozo";
}
// dabut rezultatu

// dd($posts[0]["content"]);
// foreach

echo "<ul>";
foreach($posts as $post){   
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>"; 
    
?>