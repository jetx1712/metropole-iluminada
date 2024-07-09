<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropole+iluminada - O Projeto</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <?php require ('header.php') ?>
    <section id="banner-interno">
        <div class="col-md-12">
            <div id="banner-conceito">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ O projeto</label>
                </div>
                <div id="botao-player">
                    <i class="bi bi-play-circle"></i>
                    <label>Assista ao video do projeto</label>
                </div>
            </div>
        </div>
    </section>
     <!-- Modal -->
     <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/T-i6MtxFZeo?si=Jyln-uLdyDQP-Lzu&amp;start=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="conteudo-titulo">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>O Projeto Metrópole + Iluminada</h1>
                    <p class="paragrafo-conteudo">O Instituto Rio Metrópole (IRM) vai oferecer a estruturação e o
                        suporte necessário para que 19 municípios da Região Metropolitana do Rio possam gerir,
                        ampliar, operar e manter seus parques de iluminação pública. Além da substituição das lâmpadas
                        por tecnologia LED, o projeto Metrópole + Iluminada vai sugerir soluções de telegestão
                        e monitoramento remoto para as Prefeituras de Belford Roxo, Cachoeiras de Macacu, Duque de
                        Caxias, Guapimirim, Itaboraí, Itaguaí, Japeri, Magé, Maricá, Mesquita, Nilópolis, Niterói,
                        Paracambi, Petrópolis, Queimados, Rio Bonito, São Gonçalo, Seropédica e Tanguá, por meio de uma
                        Parceria Público-Privada (PPP).
                    </p><br>
                    <p class="paragrafo-conteudo">
                        Com base em casos bem-sucedidos em cidades que conduziram iniciativas de modernização e
                        eficientização energética, o IRM prevê mais segurança, redução no número de acidentes e promoção
                        de qualidade de vida. O cidadão vai poder realizar atividades recreativas e esportivas em áreas
                        até então pouco movimentadas. Todo esse cenário incentiva também atividades econômicas.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="beneficios">
        <div class="container">
            <div class="col-md-12">
                <h1>Os benefícios ?</h1>
                <div class="beneficios">
                    <div class="col-md-6 conteudo-master">
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo">Espaços públicos mais inclusivos, seguros, resilientes e
                                <span>sustentáveis (ODS 11 – ONU)</span>;
                            </p>
                        </div>
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo">Melhoria direta da <span>segurança pública</span>;</p>
                        </div>
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo">Redução na fatura de <span>energia elétrica</span>;</p>
                        </div>
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo">Redução dos custos de operação e manutenção do <span>parque de
                                    iluminação pública</span>;</p>
                        </div>
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo">Modernização e ampliação do <span>parque por meio do uso de
                                    novas tecnologias, em especial as baseadas em LED</span>;</p>
                        </div>
                        <div class="conteudo-beneficio">
                            <i class="bi bi-arrow-right-circle"></i>
                            <p class="paragrafo-conteudo"><span>Expansão da rede de energia</span>.</p>
                        </div>
                    </div>
                    <div class="col-md-6 conteudo-master">
                        <img src="assets/images/imagem-energia.jpg" />
                    </div>
                </div>
                <div class="beneficios">
                    <div class="col-md-6 conteudo-master">
                        <img src="assets/images/Imagem_ODS.jpg" />
                    </div>
                    <div class="col-md-6 conteudo-master">
                        <h1>ODS</h1>
                        <div class="conteudo-beneficio">
                            <p class="paragrafo-conteudo"> O projeto Metrópole+Iluminada atende à ODS 11 dos Objetivos
                                de Desenvolvimento Sustentável (ODS), parte da chamada “Agenda 2030”, um pacto global
                                assinado durante a Cúpula das Nações Unidas em 2015 pelos 193 países membros – o Brasil
                                é um deles.
                            </p>
                        </div>
                        <div class="conteudo-beneficio">
                            <p class="paragrafo-conteudo"><span>A ODS 11 trata da segurança das cidades e de sua
                                    sustentabilidade.
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="beneficios">
                    <div class="col-md-6 conteudo-master">
                        <h1>O IRM cumpre sua missão</h1>
                        <div class="conteudo-beneficio">
                            <p class="paragrafo-conteudo"> Com o compromisso de buscar soluções tecnológicas de ponta
                                para infraestrutura de transporte, conectividade, iluminação pública e modelos de
                                eficiência energética, o IRM lançou o projeto Metrópole+Iluminada, atendendo assim ao
                                pilar da iluminação pública da Região Metropolitana do Rio de Janeiro.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 conteudo-master">
                        <img src="assets/images/imagem-rio.jpg" />
                    </div>
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
                    <script>
                        $(document).ready(function () {
                            $('#botao-player').click(function () {
                                var videoSrc = 'https://www.youtube.com/embed/Y4goaZhNt4k?si=AjAMcJv1hFz0QwlO';
                                $('#video').attr('src', videoSrc);
                                $('#videoModal').modal('show');
                            });

                            $('#videoModal').on('hidden.bs.modal', function () {
                                $('#video').attr('src', '');
                            });
                        });
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </footer>

</body>

</html>