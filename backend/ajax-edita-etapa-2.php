<?php
require('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["status_etapa_2"]) && isset($_POST["id_registro"])) {
        $id_registro = $_POST['id_registro'];
        $status_etapa_2 = $_POST["status_etapa_2"];
        
        // Atualizar o status na tabela etapas-1
        $sql_update = "UPDATE `etapa-2` SET status_etapa = '$status_etapa_2', data = NOW() WHERE id_registro = $id_registro";
        if ($conn->query($sql_update) === TRUE) {
            echo "<script>alert('O status da etapa foi atualizado com sucesso'); window.location.href = 'edicao.php';</script>";
        } else {
            echo "<script>alert('Não foi possível editar o status da etapa, tente novamente.'); window.location.href = 'edicao.php';</script>";
        }
    }
}
