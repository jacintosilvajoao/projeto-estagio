<?php
require_once("db/conexao.php");
$erroNome = "";
$erroEmail = "";
$erroNumero = "";
// $erroGeral = "";

// isset($_POST['salvar']) && 
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['numero']) && isset($_POST['horas'])) {

    // if (empty($_POST['nome']) or isset($_POST['email']) or isset($_POST['numero']) or isset($_POST['horas'])){
    //     $erroGeral = "Tem Um erro!";
    // }

    if (empty($_POST['nome'])) {
        $erroNome = "Por favor, preencha um Nome!";
    } else {
        // PEGAR O VALOR VINDO DO POST E LIMPAR
        $nome = limparPost($_POST['nome']);

        // VERIFICAR SE TEM SOMENTE LETRAS
        if (!preg_match("/^['a-zA-Z' ]*$/", $nome)) {
            $erroNome = "Apenas aceitamos letras e espaços!";
        }
    }

    // VALIDANDO O EMAIL SE ESTA CORRETO
    if (empty($_POST['email'])) {
        $erroEmail = "Por favor,inforrme um E-mail!";
    } else {
        $email = limparPost($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "E-mail Inválido!";
        }
    }

    if (empty($_POST['numero'])) {
        $erroNumero = "Por favor, preencha se Numero! ";
    } else {
        $numero = limparPost($_POST['numero']);
        if (strlen($numero) <> 9) {
            $erroNumero = "A numero precisa ter apenas 9 Dígitos!";
        }
    }

    $horario = limparPost($_POST['horas']);

    $data = date("d-m-Y");

    if ($erroNome == false && $erroEmail == false && $erroNumero == false) {

        $sql = $conexao->prepare("SELECT * FROM clientes WHERE email=? LIMIT 1");
        $sql->execute(array($email));
        $cliente = $sql->fetch();

        // SE NÃO EXISTIR O USUARIO ADICIONAR NO BANCO
        if (!$cliente) {

            $sql = $conexao->prepare("INSERT INTO clientes VALUES(null,?,?,?,?,?)");
            $sql->execute(array($nome, $email, $numero, $horario, $data));

            header('Location: index.php');
        } else {
            $erro_geral = "Cliente Já existente";
        }
    }

    // if (($erroNome == "") && ($erroEmail == "") && ($erroSenha == "") && ($erroNumero == "")) {

    // }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title></title>
</head>

<body>

    <div class="loader-pai">
        <div class="loader-filho">

        </div>
    </div>

    <div class="formulario" id="formulario">

        <form method="post" class="animate__animated animate__jackInTheBox">
            <p class="titulo-form">INSCREVER-SE</p>

            <?php if (isset($erro_geral)) { ?>
                <div class="erro-geral animate__animated animate__jackInTheBox">
                <?php echo $erro_geral; ?>
                </div>
                <?php  } ?>

            

            <input type="text" name="nome" placeholder="Digite seu nome" <?php if (!empty($erroNome)) {
                                                                                echo "class='invalido'";
                                                                            } ?> <?php if (isset($_POST['nome'])) {
                                                                                        echo "value = '" . $_POST['nome'] . "'";
                                                                                    } ?>>
            <span class="erro"><?php echo $erroNome ?></span>
            <input type="email" name="email" placeholder="Digite seu e-mail" <?php if (!empty($erroEmail)) {
                                                                                    echo "class='invalido'";
                                                                                } ?> <?php if (isset($_POST['email'])) {
                                                                                            echo "value = '" . $_POST['email'] . "'";
                                                                                        } ?>>
            <span class="erro"><?php echo $erroEmail ?></span>
            <input type="text" name="numero" placeholder="Digite seu número" <?php if (!empty($erroNumero)) {
                                                                                    echo "class='invalido'";
                                                                                } ?> <?php if (isset($_POST['numero'])) {
                                                                                            echo "value = '" . $_POST['numero'] . "'";
                                                                                        } ?>>
            <span class="erro"><?php echo $erroNumero ?></span>
            <select name="horas" id="horas" <?php if (isset($_POST['horas'])) {
                                                echo "value = '" . $_POST['horas'] . "'";
                                            } ?>>
                <option>Selecione Seu Periodo</option>
                <option value="manha">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
            </select>
            <span class="erro"></span>
            <button type="submit" name="salvar">Enviar</button>
            <a class="voltar" href="./index.php">Voltar ao inicio</a>
        </form>

    </div>

    <script>
        function hideloader() {
            document.addEventListener("DOMContentLoaded", () => {
                const loaderPai = document.querySelector(".loader-pai");

                document.body.style.overflow = "hidden";

                setTimeout(() => {
                    loaderPai.style.display = "none";
                    document.body.style.overflow = "visible";
                }, 2000);
            })
        }

        hideloader();
    </script>
</body>

</html>