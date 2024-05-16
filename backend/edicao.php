<?php require ('conexao.php') ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição das etapas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('banner.png');
            /* Substitua 'background.jpg' pelo caminho da sua imagem de fundo */
            background-size: cover;
            background-position: center;
            height: 150vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
        }

        #login-form input {
            width: calc(100% - 20px);
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #login-form button {
            width: calc(100% - 20px);
            margin: 10px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        #login-form button:hover {
            background-color: #0056b3;
        }

        .corpo-form {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px 0px 10px 0px;
        }
    </style>
</head>
<?php
$sql = "SELECT * FROM `etapa-1`";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM `etapa-2`";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM `etapa-3`";
$result3 = $conn->query($sql3);
?>
<body>
    <div id="login-form">
        <h2>Edição do status da linha do tempo</h2>
        <form method="POST" action="ajax-edita-etapa-1.php">
            <label class="form-control">Desenvolvimento do planejamento e Plano de Comunicação – dezembro de 2023 a
                março de 2024</label>
            <div class="container">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="corpo-form">
                            <div class="col-md-5">
                                <h5><?php echo $row['nome_etapa'] ?></h5>
                            </div>
                            <div class="col-md-5">
                                <select name="status_etapa_1" class="form-control">
                                    <option value="<?php echo $row['status_etapa'] ?>" selected disabled>
                                        <?php echo $row['status_etapa'] ?></option>
                                    <option class="form-control">Não iniciou</option>
                                    <option class="form-control">Em Andamento</option>
                                    <option class="form-control">Concluído</option>
                                </select>
                            </div>
                            <button style="margin:10px" type="submit" name="id_registro"
                                value="<?php echo $row['id_registro'] ?>">Editar</button>
                        </div>
                        <hr>
                    <?php }
                } ?>
            </div>
        </form>
        <hr>
        <form method="POST" action="ajax-edita-etapa-2.php">
            <label class="form-control">Análise para Otimização da Gestão – dezembro de 2023 a março de 2024</label>
            <div class="container">
            <?php
                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        ?>
                        <div class="corpo-form">
                            <div class="col-md-5">
                                <h5><?php echo $row2['nome_etapa'] ?></h5>
                            </div>
                            <div class="col-md-5">
                                <select name="status_etapa_2" class="form-control">
                                    <option value="<?php echo $row2['status_etapa'] ?>" selected disabled>
                                        <?php echo $row2['status_etapa'] ?></option>
                                    <option class="form-control">Não iniciou</option>
                                    <option class="form-control">Em Andamento</option>
                                    <option class="form-control">Concluído</option>
                                </select>
                            </div>
                            <button style="margin:10px" type="submit" name="id_registro"
                                value="<?php echo $row2['id_registro'] ?>">Editar</button>
                        </div>
                        <hr>
                    <?php }
                } ?>
            </div>
        </form>
        <hr>
        <form method="POST" action="ajax-edita-etapa-3.php">
            <label class="form-control">Modelagem da Transição Energética – dezembro de 2023 a março de 2024:</label>
            <div class="container">
            <?php
                if ($result3->num_rows > 0) {
                    while ($row3 = $result3->fetch_assoc()) {
                        ?>
                        <div class="corpo-form">
                            <div class="col-md-5">
                                <h5><?php echo $row3['nome_etapa'] ?></h5>
                            </div>
                            <div class="col-md-5">
                                <select name="status_etapa_3" class="form-control">
                                    <option value="<?php echo $row3['status_etapa'] ?>" selected disabled>
                                        <?php echo $row3['status_etapa'] ?></option>
                                    <option class="form-control">Não iniciou</option>
                                    <option class="form-control">Em Andamento</option>
                                    <option class="form-control">Concluído</option>
                                </select>
                            </div>
                            <button style="margin:10px" type="submit" name="id_registro"
                                value="<?php echo $row3['id_registro'] ?>">Editar</button>
                        </div>
                        <hr>
                    <?php }
                } ?>
        </form>
    </div>
</body>

</html>