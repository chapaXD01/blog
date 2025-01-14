

<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>




<h1>Blogs</h1>

<form>

<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button>Search</button>



</form>

<?php if(count($posts) == 0 ){ ?>
<p> L bozo </p>
<?php } ?>

<ul>
<?php foreach($posts as $post){ ?>
    <li> <?= $post["content"] ?> </li>
<?php } ?>
</ul>

<?php require "components/footer.php" ?>

</body>
</html>
