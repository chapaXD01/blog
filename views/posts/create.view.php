

<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>



<h1>Izveidot bloga ierakstu</h1>
    <form method="POST">
        <label><input name="content" value="<?= $_POST['content'] ?? "" ?>" /></label>  
        <button>input</button>
    </form>
            <?php if(isset($errors["content"])) { ?>
              <p><?= $errors["content"] ?></p>
            <?php } ?>

<?php require "views/components/footer.php" ?>

</body>
</html>
