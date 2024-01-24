<?php
session_start();
include "./confg.php";
// print_r($_SESSION);
if ((!isset($_SESSION['email_login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email_login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email_login'];

$sql = "SELECT * FROM entrar ORDER BY id DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="sistema.css">

</head>
<div class="text-center text-white ">
    <h1>Controle de Clientes</h1>
</div>

<div>
    <a href="sair.php" class="btn btn-danger me-5">Sair</a>
</div>

<body class="sistema">
    <div class="m-5">
        <table class="table table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Localização</th>
                    <th scope="col">Moveis</th>
                    <th scope="col">Metragem</th>
                    <th scope="col">Responsavel</th>
                    <th scope="col">Privacidade</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from usuarios";
                $todos_registros = mysqli_query($conexao, $sql);
                while ($um_registro = mysqli_fetch_assoc($todos_registros)) {
                    echo "<tr>";
                    echo "<td>" . $um_registro['id'] . "</td>";
                    echo "<td>" . $um_registro['nome'] . "</td>";
                    echo "<td>" . $um_registro['telefone'] . "</td>";
                    echo "<td>" . $um_registro['email'] . "</td>";
                    echo "<td>" . $um_registro['localizacao'] . "</td>";
                    echo "<td>" . $um_registro['moveis'] . "</td>";
                    echo "<td>" . $um_registro['metragem'] . "</td>";
                    echo "<td>" . $um_registro['responsavel'] . "</td>";
                    echo "<td>" . $um_registro['privacidade'] . "</td>";
                    echo "<td><a class ='btn btn-sm btn-danger' href='delete.php?id=$um_registro[id]' title='Deletar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a>";
                }





                ?>

            </tbody>
        </table>
    </div>
</body>

</html>