

<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>




    <h1><?= $post["content"]?></h1>

    <a href="edit?id=<?= $post["id"] ?> "> Edit </a><br>

            <form method="POST" action="/delete">
                <input name="id" type="hidden" value="<?= $post['id'] ?>"  />
                <input type="submit" value="Dzést">
            </form>
           



<?php require "views/components/footer.php" ?>


