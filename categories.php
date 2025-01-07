<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center">
    
<?php

require "Database.php";
require "function.php";

$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];
if(isset($_GET["search_query"]) && $_GET["search_query"] != "" ) {
    echo"atgriest ierakstus";



    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :nosaukums "; // sagatavotais vaicājums
    $params = ["nosaukums" => $search_query]; // pats parametrs

}
$posts = $db->query($select, $params)->fetchALL();




echo "<h1>categories</h1>";

echo "<form>";

echo "<input class=' rounded border-2 border-black' name='search_query'/>";
echo "<button class='rounded border-2 border-black' >Search</button>";

echo "</form>";

if(count($posts) == 0 ){
echo "L bozo";
}
// dabut rezultatu


// foreach

echo "<ul>";
foreach($posts as $post){   
    echo "<li>" . $post["category_name"] . "</li>";
}
echo "</ul>"; 

?>
    
</body>
</html>