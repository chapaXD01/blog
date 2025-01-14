
<?php
//file links







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
$pagetitle = "Blog";
require "views/index.view.php";

?>

</body>
</html>