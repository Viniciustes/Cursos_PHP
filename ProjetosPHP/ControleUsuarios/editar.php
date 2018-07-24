<?php
require 'config.php';

$id =0;

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);

    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE cad_usuario SET Nome = '$nome', Email= '$email' WHERE Id_Usuario = '$id'";
        $pdo->query($sql);

        header("Location: index.php");
    }
        $sql = "SELECT * FROM cad_usuario WHERE Id_Usuario = '$id'";
        $sql = $pdo->query($sql);

        if($sql-> rowCount()>0){
            $dado = $sql -> fetch();
        }
        else{
            header("Location: index.php");
        }
}
else{
    header("Location: index.php");
}

?>

<form method="POST">
    Nome:
    <br/>
    <input type="text" name="nome" value="<?php echo $dado['Nome']; ?>" />
    <br/>
    <br/> E-mail
    <br/>
    <input type="text" name="email" value="<?php echo $dado['Email']; ?>" />
    <br/>
    <br/>
    <input type="submit" value="Atualizar" />
</form>