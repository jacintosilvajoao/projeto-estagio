<?php
require_once("db/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="icon/fontawesome/all.min.css">
    <link rel="stylesheet" href="icon/fontawesome/regular.min.css">
    <link rel="stylesheet" href="icon/fontawesome/solid.min.css">

    <title>HOME PAGE</title>
    <link rel="shortcut icon" href="logo/logo-branco.svg" type="image/x-icon">
</head>

<body">

    <div class="loader-pai">
        <div class="loader-filho">

        </div>
    </div>

    <div class="contactos" id="contactos">

<div class="contacto-child animate__animated animate__jackInTheBox">
    <div class="info-contactos">
        <a href="https://maps.app.goo.gl/juKxTYLd1YG9xaod7" class="social"><i class="fa-solid fa-home redes"></i></a>
        <p>VIZITE-NOS</p>
        <a href="https://maps.app.goo.gl/juKxTYLd1YG9xaod7" class="nossos-contactos">Uíge, Rua do Comércio</a>
    </div>

    <div class="info-contactos">
        <a href="#" class="social"><i class="fa-solid fa-phone redes"></i></a>
        <p>LIGUE-NOS</p>
        <a href="#" class="nossos-contactos">+244 938 780 475</a>
    </div>

    <div class="info-contactos">
        <a href="mailto:contacto@apedrodevelopers.ao" class="social envolope"><i class="fa-solid fa-envelope redes"></i></a>
        <p>CONTACTE-NOS</p>
        <a href="mailto:contacto@apedrodevelopers.ao" class="nossos-contactos">contacto@apedrodevelopers.ao</a>
    </div>

</div>
    <a href="index.php" class="voltar1 animate__animated animate__jackInTheBox">Voltar ao inicio</a>
</div>

    <div class="container">

        <div class="sobre" id="sobre">

            <div class="sobre-child animate__animated animate__jackInTheBox">
                ssd
            </div>

        </div>

        <header class="cabecalho">
            <div class="logo">
                <img class="img-logo" src="logo/logo 2.0.svg" alt="">
                <span>A PEDRO DEVELOPERS</span>
                <P>Soluções em Tecnologia de Informação</P>
            </div>
            <nav class="menu-nav">
                <ul>
                    <li><a class="link contacto-empresa" href="#">Contacto</a></li>
                    <li><a class="link sobre-empresa" href="#"></a></li>
                    <a href="cadastrar.php" class="link-registar">Registar</a>
                </ul>
            </nav>
        </header>
        <main>
            <section class="fundo">
                <div class="tema">
                    <div class="gradiante-pai">
                        <div class="gradiante-filho">

                        </div>
                        <img class="publicitaria img-responsive" src="img/Afro mulher apontando para o lado _ Foto Premium.png" alt="">
                    </div>
                    <div class="curso">
                        <h1>DESENVOLVIMENTO WEB FULL STACK</h1>
                        <hr>
                        <h2>APROVEITE ESTA OPORTUNIDADE</h2>
                        <div class="infor-curso">

                            <ul>
                                <legend>Front - End</legend>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul>

                            <ul>
                                <legend>Back - end</legend>
                                <li>PHP</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                        <div class="timer">

                            <div class="relogio">

                            </div>
                            <ul>
                                <li>Manhã: 8h00 / 12h00</li>
                                <li>Tarde: 12h15 / 16h15</li>
                                <li>Noite: 16h30 / 20h30</li>
                            </ul>
                        </div>
                        <div class="preco">
                            <h3>Investimento: 8.000kz</h3>
                        </div>
                    </div>
                </div>
            </section>
    </div>

    <script>
        let sobre = document.getElementById("sobre")

        let linkSobre = document.querySelector(".sobre-empresa")

        linkSobre.addEventListener("click", function() {

            sobre.classList.add("active")
        })

        let contactos = document.getElementById("contactos")

        let linkcontacto = document.querySelector(".contacto-empresa")

        linkcontacto.addEventListener("click", function() {

            contactos.classList.add("active")
        })

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