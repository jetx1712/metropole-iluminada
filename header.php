<?php
// Função para verificar a página atual
function currentPage($page)
{
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search-input");
        const searchButton = document.getElementById("search-button");

        searchButton.addEventListener("click", function () {
            const searchTerm = searchInput.value;
            // Redireciona para a página que lida com a busca, passando o termo de pesquisa como parâmetro
            window.location.href = "buscar.php?termo=" + encodeURIComponent(searchTerm);
        });
    });
</script>

<header>
    <div id="search-overlay"></div>
    <div id="search-popup">
        <input id="search-input" class="form-control" type="text" placeholder="Faça aqui sua busca.">
        <button id="search-button" class="botao-pesquisa" type="button">Buscar</button>
    </div>
    </div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/"><img class="logo" src="assets/images/logo.png" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('projeto.php'); ?>" href="projeto">O projeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('conceito.php'); ?>" href="conceito">Conceito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('inspiracoes.php'); ?>"
                            href="inspirações">Inspirações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('linha-tempo.php'); ?>" href="linha-tempo">Linha
                            do tempo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('downloads.php'); ?>"
                            href="downloads">Downloads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo currentPage('contato.php'); ?>" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
            <div id="search-icon" class="icon-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </nav>
</header>