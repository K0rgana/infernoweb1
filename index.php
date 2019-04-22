<?php
include 'conf/init.php';

$messages = get_messages();
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
            <?php if(is_logged()) :?>
                <li><?=currentUser()?> <span><?=currentUserId()?></span></li>
                <li><a href="logout.php">Sair</a></li>
            <?php else: ?>
                <li><a href="reg_login.php">Registro / Login</a></li>
            <?php endif ?>
        </ul>
</nav>
    <h1><?= TITLE ?></h1>

    <h3>Mensagens</h3>

    <?php if (is_logged()): ?>
        <form action="addMessage.php" class="new-message" method="POST">
        <fieldset>
            <legend>Nova mensagem</legend>
            <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <select name="category" required="">
                <option value="" readonly>Escolha a categoria</option>
                <option value="" disabled>--</option>
                <option value="Aviso">Aviso</option>
                <option value="Pergunta">Pergunta</option>
                <option value="Procurando">Procurando</option>
            </select>
            <a href="new_category.php">Nova categoria</a>
            <input type="submit" value="enviar">
        </fieldset>
    </form>
    <?php endif ?>

    <?php foreach ($messages as $messa_Id => $messa): ?>
        <div class="message from-user">
        <div class="category category-1"><?=get_messages()?>
        <?php if (is_logged()): ?>
        
        <a class="del" title="Remover mensagem"><?=del_message()?></a>

        <?php endif ?>

        </div>
        <div class="message-text">
            <?php message_info() ?>
            <!-- Lorem ipsum deus tem piedade? ranieri diz que não. -->
        </div>
        <div class="author_date">
            <div class="author"><?php message_info() ?></div>
            <div class="date"><?php date('d/m/y'); ?></div>
        </div>

        <div class="message from-user">
        <?=get_categories()?>
            
        </div>

    <?php endforeach ?>
    
</body>
</html>