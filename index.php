<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metrópole Iluminada</title>
    <!-- Inclua o link para o arquivo CSS do Bootstrap -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php require('header.php') ?>
    <section id="banner">
        <div class="col-md-12 banner">
        </div>

        <div class="texto-banner">
            <h1 class="titulo-banner">
            Projeto Metrópole<br>
            + Iluminada
            </h1>
            <p class="subtitulo-banner">
            Bem-vindo ao futuro da iluminação pública na Região Metropolitana do Rio de Janeiro.
            </p>
            <a href="projeto.php"><button class="button-text-banner"><i class="fa-solid fa-arrow-right"></i> Conheça o projeto</button></a>
        </div>
    </section>
    <section id="topicos">
        <div class="container">
            <div class="col-md-12 blocos">
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Conceito.jpg" />
                        <label class="titulo-bloco">Conceito do projeto</label>
                        <p class="paragrafo-bloco">Entenda o que significam os conceitos que permeiam o projeto <strong>Metrópole+Iluminada</strong>.</p>
                        <a class="saiba-mais" href="conceito.php"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>

                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Inspiracoes.jpg" />
                        <label class="titulo-bloco">Inspirações</label>
                        <p class="paragrafo-bloco">Projetos que inspiram. Conheça iniciativas de modernização da iluminação em parques públicos no Brasil.</p>
                        <a class="saiba-mais" href="inspiracoes.php"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>

                    </div>
                </div>
                <div class="col-md-4 blocos">
                    <div class="bloco">
                        <img src="assets/images/Foto_Downloads.jpg" />
                        <label class="titulo-bloco">Downloads</label>
                        <p class="paragrafo-bloco">Acesse e faça o download dos documentos relacionados ao projeto <strong>Metrópole+Iluminada</strong>.</p>
                        <a class="saiba-mais" href="downloads.php"><i class="fa-solid fa-arrow-right"></i> Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="linha-tempo">
        <div class="container">
            <div class="alinhar-linha">
                <div class="col-md-12 linha">
                    <div class="col-md-5 boneco">
                        <img class="img-boneco" src="assets/images/boneco.png" />
                    </div>
                    <div class="col-md-5 boneco">
                        <div>
                            <h2>Confira a linha do tempo do projeto</h2>
                            <label id="nova-energia">Metrópole + Iluminada</label><br>
                            <a class="saiba-mais" href="linha-tempo.php"><i class="fa-solid fa-arrow-right"></i> Ver
                                agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <h1>Entre com contato conosco.</h1>
            <p style="margin-bottom: 50px">Fale conosco para saber mais sobre o projeto</p>
            <div class="alinha-blocos">
                <div class="col-md-12 blocos">
                    <div class="col-md-4 blocos">
                        <div class="bloco">
                            <img src="assets/images/icons/Banner_home_Tel-01.png" />
                            <span class="titulo-contato">21 2000-1000</span>
                            <p class="paragrafo-contato">De segunda a sexta, das 09:00h as 17:00h</p>
                        </div>
                    </div>
                    <div class="col-md-4 blocos">
                        <div class="bloco">
                            <img src="assets/images/icons/whatsapp.png" />
                            <p style="margin-top: 6px" class="paragrafo-contato">WhatsApp</p>
                            <span class="titulo-contato">21 2000-1000</span>

                        </div>
                    </div>
                    <div class="col-md-4 blocos">
                        <div class="bloco">
                            <img style="margin-right: 20px;" src="assets/images/icons/Banner_home_email-01.png" />
                            <p style="margin-top: 6px" class="paragrafo-contato">Via email</p>
                            <a href="contato.php"><button><i style="width: 30px;" class="fa-solid fa-arrow-right"></i>Acesso ao
                                    formulário</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once('footer.php') ?>
    

</body>

</html>