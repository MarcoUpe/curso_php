<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Processamento PHP</h1>
        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o campo "nome" foi preenchido
            if (!empty($_POST["nome"])) {
                $nome = $_POST["nome"];
                echo "<p>Olá, $nome!</p>";
            } else {
                echo "<p>O campo nome está vazio.</p>";
            }
        } else {
            echo "<p>O formulário não foi enviado.</p>";
        }
        ?>
        <p><a href="index.php">Voltar</a></p>
    </div>
</body>
</html>
