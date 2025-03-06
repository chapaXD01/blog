

<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Edit categories</h1>
    <form method="POST">
        <label><input type="hidden" name="id" value="<?= $post["id"] ?? "" ?>" /></label>
        <label><input name="category_name" value="<?= $_POST["category_name"] ?? $post["category_name"] ?? "" ?>"/></label>
        <button>edit</button>
    </form>
            <?php if(isset($errors["category_name"])) { ?>
              <p><?= $errors["category_name"] ?></p>
            <?php } ?>

<?php require "views/components/footer.php" ?>  

