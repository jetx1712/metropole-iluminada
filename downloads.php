<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia - Linha do tempo</title>
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
                    <i class="bi bi-house"></i><label>/ Downloads</label>
                </div>
                <div class="container">
                    <div class="linha-tempo-titulo">
                        <div class="linha-tempo-titulo-primeiro">
                            <img class="img-downloads-topo" src="assets/images/boneco-downloads.png" />
                        </div>
                        <div class="linha-tempo-titulo-segundo">
                            <p>Downloads</p>
                            <h1>Acesse os materias do projeto</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-download">
        <div class="container">
            <div class="col-md-12 botao-2-estrutura">
                <div class="col-md-10 botao-2-download">
                    <div class="elemento-workshop">
                        <label>Wokshop do projeto de eficientização e transição energética</label>
                    </div>
                    <a href="assets/documents/workshop-prefeitura.pdf" target="_blank"><div class="elemento-baixar">
                        <label>Baixar</label>
                    </div></a>
                </div>
                <div class="col-md-10 botao-2-download">
                    <div class="elemento-workshop">
                        <label>Plano de gerenciamento de projeto - METRÓPOLE + ILUMINADA</label>
                    </div>
                    <a href="assets/documents/INDUCTA-Plano-de-Gerencimento-do-Projeto-IRM-IP_METRÓPOLE-+-ILUMINADA.pdf" target="_blank"><div class="elemento-baixar">
                        <label>Baixar</label>
                    </div></a>
                </div>
                <div class="col-md-10 botao-2-download">
                    <div class="elemento-workshop">
                        <label>Apresentação inicial</label>
                    </div>
                    <a href="assets/documents/Apresentacao-inicial.pdf" target="_blank"><div class="elemento-baixar">
                        <label>Baixar</label>
                    </div></a>
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