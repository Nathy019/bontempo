<?php

if (isset($_POST['submit']) && !empty($_POST['privacidade'])) {

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

     header('Location: index.php');
}
else{
        
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bontempo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-1 letter-spacing-custom">BONTEMPO</h1>
                </div>
            </div>
        </div>
        <!-- <div class="img-fluid sm-2 xl-2">
            <img src="img/bontempo1.png" width="1050px" height="550px" alt="">
        </div> -->
    </div>

    <!-- logos -->

    <div class="container text-center">
        <div class="row">
            <div class="col mx-auto p-2">
                <div class="p-3"><img src="img/celular-corte.png" width="35px" alt="">
                    <p>Contato <br> TEL:(19)99715-7468</p>
                </div>
            </div>
            <div class="col mx-auto p-2">
                <div class="p-3"><img src="img/local-copia.png" width="35px" alt="">
                    <p>local <br> Rua Sete de Setembro, 1.130 <br> Segunda à sexta, das 9h às 18h</p>
                </div>
            </div>
        </div>
    </div>

    <!-- formulario -->
    <div class="container">
    <div class="row justify-content-center align-items-center">
      <form class="row g-3" action="index.php" method="post">
        <div class="form-group col-md-6">
          <input placeholder="Nome completo" type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="form-group col-md-6">
          <input placeholder="Telefone" type="tel" name="telefone" id="telefone" class="form-control" required>
        </div>

        <div class="form-group col-12">
          <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
        </div>

        <div class="form-group col-12">
          <input placeholder="Localização de obra" type="text" name="localizacao" id="localizacao" class="form-control" required>
        </div>

        <div class="form-group col-12">
          <input placeholder="Valor estimado de investimento para móveis" type="text" name="moveis" id="moveis" class="form-control" required>
        </div>

        <div class="form-group col-12">
          <input placeholder="Metragem de obra" type="text" name="metragem" id="metragem" class="form-control" required>
        </div>

        <div class="form-group col-12">
          <input placeholder="Arquiteto ou engenheiro responsável" type="text" name="responsavel" id="responsavel" class="form-control" required>
        </div>

        <div class="form-group col-12 form-check">
          <input type="checkbox" class="form-check-input" id="termosPrivacidade" name="privacidade">
          <label class="form-check-label" for="termosPrivacidade">
            Eu li e concordo com os <a href="privacidade.html" target="_blank">termos de privacidade</a>.
          </label>
        </div>

        <div class="form-group col-12">
          <div class="d-grid gap-2 col-6 mx-auto">
            <input class="btn btn-primary" type="submit" name="submit" id="submit">
          </div>
        </div>
      </form>
    </div>
  </div>
    <!-- <div class="container">
        <div class="row justify-content-center align-items-center">
            <form class="row g-3" action="index.php" method="post">
                <div class=" form-group col-md-6">
                    <input placeholder="Nome completo" type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <br><br><br>
                <div class=" form-group col-md-6">
                    <input placeholder="Telefone" type="tel" name="telefone" id="telefone" class="form-control" required>
                </div>
                <br><br><br>
                <div class="form-group col-12">
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input placeholder="Localização de obra" type="text" name="localizacao" id="localizacao" class="form-control" required>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input placeholder="Valor estimado de investimento para móveis" type="text" name="moveis" id="moveis" class="form-control" required>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input placeholder="Metragem de obra" type="text" name="metragem" id="metragem" class="form-control" required>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <input placeholder="Arquiteto ou engenheiro responsável" type="text" name="responsavel" id="responsavel" class="form-control" required>
                </div>
                <br><br><br>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termosPrivacidade" required>
                    <label class="form-check-label" for="termosPrivacidade">
                        Eu li e concordo com os <a href="privacidade.html" target="_blank">termos de privacidade</a>.
                    </label>
                </div>
                <br><br><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input class="btn btn-primary" type="submit" name="submit" id="submit">
                </div>

            </form> -->
        </div>
    </div>
    <!-- logos zap+insta+expresse -->
    <div class="container text-center">
        <div class="row row justify-content-md-center">
            <div class="col p-5">
                <img src="img/zapp.png" width="70px" height="60px" alt="">

                <img src="img/insta.png" width="60px" alt="">

            </div>
            <div class="row justify-content-md-center">
                <div class="col sm-2 xxl-3">
                    <img src="img/expresse.png" width="550px" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container  text-center">
        <div class="additional-space">

            <div class="row justify-content-md-center">
                <div class="col col-lg-2 sm-2 xxl-3">
                    <div class="icons">
                        <img src="img/zapp.png" width="70px" height="60px" alt="">
                    </div>
                </div>
                <div class="col-md-auto">
                </div>
                <div class="col col-lg-2 sm-2 xxl-3">
                    <img src="img/insta.png" width="60px" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-2 sm-2 xxl-3">
                    <img src="img/expresse.png" width="650px" alt="">
                </div>

            </div>
        </div>
    </div> -->



    <div class="footer">
        <p>&copy; 2024 Nome da Sua Empresa. Todos os direitos reservados.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>

</html>