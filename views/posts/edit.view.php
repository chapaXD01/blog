

<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Edit bloga ierakstu</h1>

    <form method="POST">
        <label><input type="hidden" name="id" value="<?= $post["id"] ?? "" ?>" /></label>
        <label><input name="content" value="<?= $_POST["content"] ?? $post["content"] ?? "" ?>"/></label>
        <button>edit</button>
    </form>
    
            <?php if(isset($errors["content"])) { ?>
              <p><?= $errors["content"] ?></p>
            <?php } ?>

<?php require "views/components/footer.php" ?>  


   