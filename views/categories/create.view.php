
<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Izveidot categories</h1>
    <form method="POST">
        <label><input name="category_name" value="<?= $_POST['category_name'] ?? "" ?>" /></label>  
        <button>input</button>
    </form>
            <?php if(isset($errors["category_name"])) { ?>
              <p><?= $errors["category_name"] ?></p>
            <?php } ?>
            

<?php require "views/components/footer.php" ?>


