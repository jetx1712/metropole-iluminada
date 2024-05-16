<?php require ('backend/conexao.php');
$sql = "SELECT * FROM `etapa-1`";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM `etapa-2`";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM `etapa-3`";
$result3 = $conn->query($sql3);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metrópole +Iluminada - Linha do tempo</title>
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
                    <i class="bi bi-house"></i><label>/ Linha do tempo</label>
                </div>
                <div class="container">
                    <div class="linha-tempo-titulo">
                        <div class="linha-tempo-titulo-primeiro">
                            <img src="assets/images/boneco.png" />
                        </div>
                        <div class="linha-tempo-titulo-segundo">
                            <p>Linha do tempo</p>
                            <h1>Acompanhe O Projeto</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conteudo-titulo-linha-tempo">
        <div class="container">
            <div class="col-md-12">
                <div class="">
                    <h1>Conheça as etapas do projeto Metrópole + Iluminada</h1>
                </div>
            </div>
            <div class="botoes-linha-tempo">
                <div for="mostra-linha-toggle1" class="col-md-10 botao-linha-tempo">
                    <label>Desenvolvimento do planejamento e Plano de Comunicação – <span
                            style="font-weight: 600">dezembro de 2023 a março de 2024</span></label><i
                        id="icone-toggle1" class="bi bi-arrow-down-circle"></i>
                </div>
                <div class="mostra-linha col-md-10" id="mostra-linha-toggle1">
                    <div class="conteudo-linha-tempo">
                        <?php
                        $rows = [];
                        while ($row = $result->fetch_assoc()) {
                            if ($row['status_etapa'] == 'Não iniciou') {
                                echo "<img src='assets/images/icons/Icon_Linhatempo_desativado.png' />";
                            } else {
                                echo "<img src='assets/images/icons/Icon_Linhatempo.png' />";
                            }
                            $rows[] = $row;
                        }
                        ?>
                    </div>
                    <div class="linha-hr-tempo"></div>
                    <div class="conteudo-interno-linha-tempo">
                        <?php
                        foreach ($rows as $row2) {
                            ?>
                            <div class="col-md-4 texto-interno-linha-tempo">
                                <label <?php if ($row2['status_etapa'] == 'Não iniciou') {
                                    echo 'style="color: #CECECE"';
                                } ?>><?php echo $row2['nome_etapa'] ?></label>
                                <p class="p-pequeno">Março de 2024</p>
                                <p class="paragrafo-enfatico"><?php echo $row2['status_etapa'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="botoes-linha-tempo">
                <div for="mostra-linha-toggle2" class="col-md-10 botao-linha-tempo">
                    <label>Análise para Otimização da Gestão – <span style="font-weight: 600">dezembro de 2023 a março
                            de 2024</span></label><i id="icone-toggle2" class="bi bi-arrow-down-circle"></i>
                </div>
                <div class="mostra-linha col-md-10" id="mostra-linha-toggle2">
                    <div class="conteudo-linha-tempo">
                        <?php
                        $rows3 = [];
                        while ($row3 = $result2->fetch_assoc()) {
                            if ($row3['status_etapa'] == 'Não iniciou') {
                                echo "<img src='assets/images/icons/Icon_Linhatempo_desativado.png' />";
                            } else {
                                echo "<img src='assets/images/icons/Icon_Linhatempo.png' />";
                            }
                            $rows3[] = $row3;
                        }
                        ?>
                    </div>
                    <div class="linha-hr-tempo"></div>
                    <div class="conteudo-interno-linha-tempo">
                        <?php
                        foreach ($rows3 as $row4) {
                            ?>
                            <div class="col-md-4 texto-interno-linha-tempo">
                                <label <?php if ($row4['status_etapa'] == 'Não iniciou') {
                                    echo 'style="color: #CECECE"';
                                } ?>><?php echo $row4['nome_etapa'] ?></label>
                                <p class="p-pequeno">Março de 2024</p>
                                <p class="paragrafo-enfatico"><?php echo $row4['status_etapa'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="botoes-linha-tempo">
                <div for="mostra-linha-toggle3" class="col-md-10 botao-linha-tempo">
                    <label>Modelagem da Transição Energética – <span style="font-weight: 600">dezembro de 2023 a março
                            de 2024</span></label><i id="icone-toggle3" class="bi bi-arrow-down-circle"></i>
                </div>
                <div class="mostra-linha col-md-10" id="mostra-linha-toggle3">
                    <div class="conteudo-linha-tempo">
                        <?php
                        $rows5 = [];
                        while ($row5 = $result3->fetch_assoc()) {
                            if ($row5['status_etapa'] == 'Não iniciou') {
                                echo "<img src='assets/images/icons/Icon_Linhatempo_desativado.png' />";
                            } else {
                                echo "<img src='assets/images/icons/Icon_Linhatempo.png' />";
                            }
                            $rows5[] = $row5;
                        }
                        ?>
                    </div>
                    <div class="linha-hr-tempo"></div>
                    <div class="conteudo-interno-linha-tempo">
                        <?php
                        foreach ($rows5 as $row6) {
                            ?>
                            <div class="col-md-4 texto-interno-linha-tempo">
                                <label <?php if ($row6['status_etapa'] == 'Não iniciou') {
                                    echo 'style="color: #CECECE"';
                                } ?>><?php echo $row6['nome_etapa'] ?></label>
                                <p class="p-pequeno">Março de 2024</p>
                                <p class="paragrafo-enfatico"><?php echo $row6['status_etapa'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="img-banner-download">
        <div class="container">
            <div class="col-md-12">
                <a href="downloads.php">
                    <div>
                        <img src="assets/images/Banner_downloands.png" />
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
                    <script>
                        document.addEventListener("DOMContentLoaded", function () {
                            const label = document.querySelector("div[for='mostra-linha-toggle1']");
                            const mostraLinha = document.getElementById("mostra-linha-toggle1");
                            const icone = document.getElementById("icone-toggle1");

                            label.addEventListener("click", function () {
                                if (mostraLinha.classList.contains("visivel")) {
                                    mostraLinha.classList.remove("visivel");
                                    icone.classList.replace("bi-arrow-up-circle", "bi-arrow-down-circle"); // Troca o ícone para baixo
                                } else {
                                    mostraLinha.classList.add("visivel");
                                    icone.classList.replace("bi-arrow-down-circle", "bi-arrow-up-circle"); // Troca o ícone para cima
                                }
                            });
                        });

                        document.addEventListener("DOMContentLoaded", function () {
                            const label = document.querySelector("div[for='mostra-linha-toggle2']");
                            const mostraLinha = document.getElementById("mostra-linha-toggle2");
                            const icone = document.getElementById("icone-toggle2");

                            label.addEventListener("click", function () {
                                if (mostraLinha.classList.contains("visivel")) {
                                    mostraLinha.classList.remove("visivel");
                                    icone.classList.replace("bi-arrow-up-circle", "bi-arrow-down-circle"); // Troca o ícone para baixo
                                } else {
                                    mostraLinha.classList.add("visivel");
                                    icone.classList.replace("bi-arrow-down-circle", "bi-arrow-up-circle"); // Troca o ícone para cima
                                }
                            });
                        });
                        document.addEventListener("DOMContentLoaded", function () {
                            const label = document.querySelector("div[for='mostra-linha-toggle3']");
                            const mostraLinha = document.getElementById("mostra-linha-toggle3");
                            const icone = document.getElementById("icone-toggle3");

                            label.addEventListener("click", function () {
                                if (mostraLinha.classList.contains("visivel")) {
                                    mostraLinha.classList.remove("visivel");
                                    icone.classList.replace("bi-arrow-up-circle", "bi-arrow-down-circle"); // Troca o ícone para baixo
                                } else {
                                    mostraLinha.classList.add("visivel");
                                    icone.classList.replace("bi-arrow-down-circle", "bi-arrow-up-circle"); // Troca o ícone para cima
                                }
                            });
                        });
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                        crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            var $searchOverlay = $("#search-overlay");
                            var $searchPopup = $("#search-popup");
                            var $searchIcon = $("#search-icon");
                            var $searchInput = $("#search-input");

                            $searchIcon.on("click", function(event) {
                                $searchOverlay.show();
                                $searchPopup.show();
                                $searchInput.focus();
                                event.stopPropagation();
                            });

                            $(document).on("click", function(event) {
                                if (!$(event.target).closest("#search-popup").length && !$(event.target).is("#search-input")) {
                                    $searchOverlay.hide();
                                    $searchPopup.hide();
                                }
                            });
                            $searchPopup.on("click", function(event) {
                                event.stopPropagation();
                            });
                        });
                    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </footer>

</body>

</html>