<?php
if(isset($_GET['termo'])) {
    $termo = $_GET['termo'];

    $diretorios = array('index.php', 'conceito.php', 'projeto.php', 'downloads.php');
    
    $termoEncontrado = false;
    foreach($diretorios as $diretorio) {
        if(file_exists($diretorio)) {
            $conteudo = file_get_contents($diretorio);
            if(strpos($conteudo, $termo) !== false) {
                header("Location: $diretorio");
                exit;
            }
        }
    }
    // Se nenhum resultado for encontrado, cria um alerta e redireciona para index.php
    echo "<script>alert('Nenhum resultado encontrado para \"$termo\".'); window.location.href = 'index.php';</script>";
    exit;
} else {
    // Se nenhum termo de pesquisa for especificado na URL, redireciona diretamente para index.php
    header("Location: index.php");
    exit;
}
?>
