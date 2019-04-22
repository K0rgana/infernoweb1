<?php 

include 'conf/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="reg_login.php">Registro / Login</a></li>
            <?php if(is_logged()) :?>
            <li><?=currentUser()?> <span><?=currentUserId()?></span></li>
            <li><a href="logout.php">Sair</a></li>
        <?php endif ?>
        </ul>
</nav>

    <h1><?= TITLE ?></h1>
    <form action="addCategory.php" method="POST" class="new-message">
        <fieldset>
            <legend>Nova categoria</legend>
            <input type="text" name="category" placeholder="categoria">
            <input type="submit" value="enviar">
        </fieldset>
    </form>
</body>
</html>