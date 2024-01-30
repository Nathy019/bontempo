<?php

if (isset($_POST['submit'])) {

    include "./confg.php";

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $localizacao = $_POST['localizacao'];
    $moveis = $_POST['moveis'];
    $metragem = $_POST['metragem'];
    $responsavel = $_POST['responsavel'];
    $privacidade = $_POST['privacidade'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,email,localizacao,moveis,metragem,responsavel,privacidade) 
        VALUES ('$nome','$telefone','$email','$localizacao','$moveis','$metragem','$responsavel','$privacidade')");

       

    header('Location: sucesso.php');
}
?>
