<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cadastro de carros</title>
    <link rel="shortcut icon"  href="imagens/favicon.png">
</head>
<body class="bg-secondary">
    <header class="mb-3">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-brand">
                    <img src="imagens/adicionar-carro.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center">
                <div class="navbar-brand">
                    <h1 class="text-white">Cadastro de carros</h1>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <?php
            //Cria a conexão com o banco de dados usando o mysqli
            $mysqli = mysqli_connect("localhost", "root", "", "carros");

            // Verifica se o formulário foi enviado
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $modelo = $_POST["modelo"];
                $marca = $_POST["marca"];
                $placa = $_POST["placa"];

                // Prepara a query SQL para inserir os dados na tabela "carros"
                $sql = "INSERT INTO carros (modelo, marca, placa) VALUES ('$modelo', '$marca', '$placa')";

                // Executa a query SQL
                if(mysqli_query($mysqli, $sql)) {
                    echo "<h2 class='text-center mb-2'>Dados inseridos com sucesso!</h2>";
                } else {
                    echo "<h2  class='text-center mb-2'>Erro ao inserir os dados: " . mysqli_error($mysqli)."</h2>";
                }
            }

            //Executing Query in the Database using MySQLi
            $result = mysqli_query($mysqli, "SELECT * FROM carros");

            echo '<table class="table table-dark table-hover">';
            echo '<tr><th>Modelo</th><th>Marca</th><th>Placa</th></tr>';

            while($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['modelo'] . '</td>';
                echo '<td>' . $row['marca'] . '</td>';
                echo '<td>' . $row['placa'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>