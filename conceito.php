<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metrópole +Iluminada - Conceito</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php require ('header.php') ?>
    <section id="banner-interno">
        <div class="col-md-12">
            <div class="banner-top">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ Conceito</label>
                </div>
                <div class="container">
                    <div class="titulo-banner-top">
                        <h1>O que significa <br>“parque de iluminação pública”?</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-titulo">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <img class="img-conceito" src="assets/images/Imagem_Eficiencia_energetica.png" />
                    <p class="paragrafo-conteudo">O projeto Metrópole+Iluminada vai sugerir a modernização dos parques
                        de iluminação pública de parte da Região Metropolitana do Rio de Janeiro. Mas o que significa
                        parque de iluminação pública?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-subtitulo">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>Parque de iluminação pública
                    </h1>
                    <img class="img-conceito" src="assets/images/Imagem_transicao_energetica.png" />
                    <p class="paragrafo-conteudo">É o conjunto composto pela luminária e acessórios indispensáveis ao
                        funcionamento e sustentação de um lugar público. Lâmpadas, luminárias, braços e suportes para
                        instalação de equipamentos iluminação pública, conectores, condutores, reatores, relés
                        fotoelétricos e tomadas para relés fotoelétricos: todos esses itens compõem o chamado parque de
                        iluminação de uma cidade.
                    </p>
                    <br>
                    <p class="paragrafo-conteudo">
                        Um parque de iluminação pública também é composto por postes de circuitos exclusivos para
                        iluminação pública e seus acessórios indispensáveis como caixas de comando, interruptores,
                        eletrodutos, contatores e demais materiais não citados mas que também integrem as instalações de
                        iluminação pública..
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="img-banner-download">
        <div class="container">
            <div class="col-md-12">
                <a href="download.php">
                    <div>
                        <a href="downloads.php"><img src="assets/images/Banner_downloands.png" /></a>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div style="background-color: #eaeaea;" class="col-md-12">
            <div class="rodape">
                <div>
                    <img src="assets/images/logo-rodape.png" />
                </div>
                <div>
                    <label>Metrópole +Iluminada - 2024 | Todos os direitos reservados.<label>
                </div>
            </div>
        </div>
        <div style="justify-content:center" class="col-md-12">
            <div class="logos-fundo">
                <img src="assets/images/imagem-footer.png" />
            </div>
            <div>
                <div>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                        crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            var $searchOverlay = $("#search-overlay");
                            var $searchPopup = $("#search-popup");
                            var $searchIcon = $("#search-icon");
                            var $searchInput = $("#search-input");

                            $searchIcon.on("click", function (event) {
                                $searchOverlay.show();
                                $searchPopup.show();
                                $searchInput.focus();
                                event.stopPropagation();
                            });

                            $(document).on("click", function (event) {
                                if (!$(event.target).closest("#search-popup").length && !$(event.target).is("#search-input")) {
                                    $searchOverlay.hide();
                                    $searchPopup.hide();
                                }
                            });
                            $searchPopup.on("click", function (event) {
                                event.stopPropagation();
                            });
                        });
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </footer>

</body>

</html>