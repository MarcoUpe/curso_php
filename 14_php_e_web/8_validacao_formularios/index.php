<?php

    $validacoes = [];

    if(count($_POST) > 0) {

        if($_POST['nome'] === "") {
            $validacoes[] = "Por favor, preencha o nome do usuário";
        }

        if($_POST['email'] === "") {
            $validacoes[] = "Por favor, preencha com o e-mail do usuário";
        }

        if($_POST['senha'] != $_POST['confirmacao']) {
            $validacoes[] = "As senhas devem ser iguais";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li> <?= $validacao ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Coloque seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Insira sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>