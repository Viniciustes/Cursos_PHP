<?php
    require 'config.php';    
?>
<a = href="adicionar.php">Adicionar Novo Usuário</a>
<table borde="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php
    
    $sql = "SELECT * FROM cad_usuario";
    $sql = $pdo->query($sql);

    if($sql-> rowCount()>0) {
        foreach($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '<td>'.$usuario['Nome'].'</td>';
            echo '<td>'.$usuario['Email'].'</td>';
            echo '<td><a href="editar.php?id='.$usuario['Id_Usuario'].'">Editar</a> - <a href="excluir.php?id='.$usuario['Id_Usuario'].'"> Excluir</a>';
            echo '</tr>';
        }
    }

    ?>
</table>