<?php

include 'conf/init.php';

$username = $_POST['username'];
$pw = $_POST['pw'];


login($username, $pw);

if (is_logged()) {
    redirect('index.php');
}

redirect('reg_login.php?ml=E-mail ou senha incorreto' . $vars);
?>