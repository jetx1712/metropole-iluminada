<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Energia - Contato</title>
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
            <div class="banner-top">
                <div id="nome-interno">
                    <i class="bi bi-house"></i><label>/ Contato</label>
                </div>
                <div class="container">
                    <div class="col-md-12 contato-absoluto">
                        <div class="col-md-4 contato-absoluto-titulo">
                            <h1>Acesse o nosso<br> canal de Comunicação</h1>
                        </div>
                        <div class="col-md-6 contato-absoluto-imagem">
                            <img src="assets/images/ilustracao_contato.svg" />
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-contato">
        <div class="container">
            <div class="col-md-12 contato">
                <div class="col-md-11 fundo-form-contato">
                    <div class="container">
                        <div class="col-md-12 footer-form">
                            <div class="col-md-6">
                                <form class="form-contato" id="formulario_email" method="POST">
                                    <label>Nome:</label>
                                    <input class="form-control" type="text" name="nome" placeholder="Insira seu nome" />
                                    <label>Email:</label>
                                    <input class="form-control" type="text" name="email"
                                        placeholder="Insira seu email" />
                                    <label>Telefone:</label>
                                    <input class="form-control" type="number" min="1" name="telefone"
                                        placeholder="Insira seu telefone" />
                                    <label>Assunto:</label>
                                    <textarea class="form-control" name="mensagem"
                                        placeholder="Escreva aqui sua mensagem"></textarea>
                                    <div class="footer-form-contato">
                                        <div class="footer-checkbox">
                                            <input class=" form-control form-check-input" type="checkbox" />
                                            <span>Quero receber novidades do projeto por e-mail e Whatsapp</span>
                                        </div>
                                        <div>
                                            <button type="button" id="enviar" class="btn-enviar">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-linha-vertical">
                                    <div class="footer-bloco-segundo">
                                        <h1>Ficou com dúvidas?</h1>
                                        <p>Entre em contato.</p>
                                    </div>
                                    <div class="blocos-footer-contato">
                                        <div class="bloco-interno-footer">
                                            <div class="bloquinho-contato">
                                                <img src="assets/images/icons/Banner_home_Tel-01.png" />
                                                <h1>21 97030-4558</h1>
                                                <span>De segunda à sexta, das 09:00h ás 17:00h</span>
                                            </div>
                                        </div>
                                        <div class="bloco-interno-footer">
                                            <div class="bloquinho-contato">
                                                <img src="assets/images/icons/whatsapp.png" />
                                                <span>WhatsApp</span>
                                                <h1>21 97030-4558</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <label>Nova Energia - 2024 | Todos os direitos reservados.<label>
                </div>
            </div>
        </div>
        <div style="justify-content:center" class="col-md-12">
            <div class="logos-fundo">
                <img src="assets/images/imagem-footer.png" />
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $("#enviar").click(function () {
            var formData = new FormData(document.getElementById("formulario_email"));

            $.ajax({
                type: "POST",
                url: "mail.php",
                data: formData,
                processData: false,
                contentType: false,
                enctype: 'multipart/form-data',
            })
                .done(function (response) {
                    console.log(response);
                    if (response.sucesso) {
                        Swal.fire({
                            position: 'top',
                            icon: 'success',
                            title: 'Sua mensagem foi enviada com sucesso!',
                            showConfirmButton: false,
                            timer: 2500
                        });
                    } else {
                        Swal.fire({
                            position: 'top',
                            icon: 'warning',
                            title: 'Não foi possível enviar sua mensagem',
                            text: response.erro,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
        });
        class PlaceholderHandler {
            constructor(selector) {
                this.inputs = document.querySelectorAll(selector);
                this.attachEvents();
            }

            attachEvents() {
                this.inputs.forEach(input => {
                    input.addEventListener("click", () => this.removePlaceholder(input));
                });
            }

            removePlaceholder(input) {
                input.removeAttribute("placeholder");
            }
        }

        // Inicialização da classe para campos de entrada com a classe "form-control"
        document.addEventListener("DOMContentLoaded", function () {
            new PlaceholderHandler(".form-control");
        });

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

</body>

</html>