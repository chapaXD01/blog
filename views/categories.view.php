<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>


    

<h1>categories</h1>

<form>

<input  name='search_query'/>
<button  >Search</button>

</form>

<?php if(count($posts) == 0 ){ ?>
<p> bozo </p>
<?php } ?>


<ul>
<?php foreach($posts as $post){ ?>  
    <li> <?= $post["category_name"] ?> </li>
<?php } ?>
</ul>

<?php require "components/footer.php" ?>

</body>
</html>