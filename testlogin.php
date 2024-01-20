<?php
session_start();
// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST["email_login"]) && !empty($_POST['senha'])) {
    include "./confg.php";
    $email_login = $_POST["email_login"];
    $senha = $_POST["senha"];
    // print_r('email: '. $email_login);
    // print_r('<br>');
    // print_r('senha: '. $senha);

    $sql = "SELECT * FROM entrar WHERE email_login = '$email_login' and senha = '$senha'";

    $result = $conexao->query($sql);
    // print_r($result);
    if(mysqli_num_rows($result) > 1){
        unset($_SESSION['email_login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
else{
    $_SESSION['email_login'] = $email_login;
    $_SESSION['senha'] = $senha;
   header('Location: sistema.php');
}

} else {
    header('location: index.php');
}
