<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia - Conceito</title>
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
    <section id="banner-interno-inspiracoes">
        <div class="col-md-12">
            <div class="banner-top">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ Inspirações</label>
                </div>
                <div class="container">
                    <div class="titulo-banner-top">
                        <h1>Conheça os projetos bem desenvolvidos de iluminação pública.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-titulo-intencoes">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>Miguel Pereira</h1>
                    <img class="img-conceito" src="assets/images/Imagem_Riodejaneiro.png" />
                    <p class="paragrafo-conteudo"><span>Miguel Pereira</span> não faz parte da Região Metropolitana do
                        Rio, mas
                        nos traz um excelente exemplo de projeto bem desenvolvido de iluminação pública.
                    </p>
                    <br><br>
                    <p class="paragrafo-conteudo">
                        Ela foi a
                        primeira cidade do Estado do rio de Janeiro a ter todo seu parque de iluminação pública
                        com
                        <span>lâmpadas LED</span> e a adotar a <span>telemetria</span>, tecnologia que permite a medição e a comunicação
                        de
                        informações. A iniciativa movimentou a vida noturna e popularizou espaços antes evitados
                        por
                        falta de segurança.
                    </p>
                    <br><br>
                    <p class="paragrafo-conteudo">
                        Foram instalados cerca de <span>5 mil pontos de LED</span>, gerando uma economia de
                        <span>78% na conta de luz</span>. A iniciativa <span>reduziu em 48,82%</span> os pontos escuros da cidade,
                        permitindo
                        que <span>86% da população local</span> se sentisse mais segura. O registro de furtos de residências
                        teve uma <span>queda de 80%</span>.
                    </p>
                </div>
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