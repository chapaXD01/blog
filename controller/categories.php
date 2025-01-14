



<?php



$select = "SELECT * FROM categories";
$params = [];
if(isset($_GET["search_query"]) && $_GET["search_query"] != "" ) {
    echo"atgriest ierakstus";



    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :nosaukums "; // sagatavotais vaicājums
    $params = ["nosaukums" => $search_query]; // pats parametrs

}
$posts = $db->query($select, $params)->fetchALL();

$pagetitle = "CategorieS";
require "views/categories.view.php";

?>
    
</body>
</html>