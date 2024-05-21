<?php
$servername = "just2077.justhost.com"; 
$username = "brfastco_metropole"; 
$password = "88{r9f#[}r7M"; 
$dbname = "brfastco_metropole"; 

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}