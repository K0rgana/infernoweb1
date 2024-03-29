<?php 
include 'conf/init.php' 
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
            <li><a href="index.php">Voltar</a></li>
        </ul>
    </nav>
    <h1><?= TITLE ?></h1>
    <form action="auth.php" method="POST">
        <fieldset>
            <span class="msg">Login ou senha incorreto</span>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Nome de usuário" value="">
            <input type="password" name="pw" placeholder="Senha">
            <input type="submit" value="ok">
        </fieldset>
    </form>
    <hr>
    <form action="register.php" method="POST">
        <fieldset>
            <span class="msg">Usuário cadastrado com sucesso</span>
            <legend>Registro</legend>
            <input type="text" placeholder="Nome de usuário" name="username" value="">
            <input type="email" placeholder="E-mail" name="email" value="">
            <input type="text" placeholder="Nome" name="name" value="">
            <input type="text" placeholder="Data de Nascimento" name="date_nasc" value="">
            <input type="number" placeholder="Telefone" name="name" value="">
            <input type="password" placeholder="Senha" name="pw">
            <input type="password" placeholder="Confirme a senha" name="pw2">
            <input type="submit" name="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>