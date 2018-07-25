<?php

$arquivo = $_FILES['arquivo'];

// Ver o arquivo em tela:
// print_r($arquivo);

if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

    // Para gerar um nome do arquivo aleatório:
    // $nomedoarquivo = md5(time() . rand(0, 99));
    move_uploaded_file($arquivo['tmp_name'], 'Arquivos/' . $arquivo['name']);

    echo 'Arquivo enviado com sucesso!';
}

?>