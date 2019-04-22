<?php 

include 'conf/init.php';

	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$pw2 = $_POST['pw2'];
	$name = $_POST['name'] ;
	$phone = $_POST['phone'];
	$username = $_POST['username'] ;

?>

<?php 
	if ($pw !== $pw2): ?>
	  <h1>Senhas não podem ser diferentes</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>

<?php if ($pw == ''): ?>
    <h1>Senha não pode ser vazia</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>

<?php
if (email_exists($email)) {
    redirect('reg_login.php?mr=E-mail já registrado' );
}

add_register([ $username, $email, md5($pw), $name, $phone, $date_nasc], USERS_FILE);
redirect('reg_login.php?mr=Usuário registrado');

 ?>