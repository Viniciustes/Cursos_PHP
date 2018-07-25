<?php

session_start();


if (isset($_POST['email']) && empty($_POST['email']) == false) {

    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    require 'config.php';
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql = $db->query($sql);

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header("Location: index.php");
    }
}

?>

Página de login

<form method="POST">
    Email:<br/>
    <input type="email" name="email"/> <br/><br/>

    Senha:<br/>
    <input type="password" name="senha"/> <br/> <br/>

    <input type="submit" value="entrar"/>

</form>
