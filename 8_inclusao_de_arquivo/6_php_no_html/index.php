<?php

    include_once "backend.php";

?>

<h1>Seja bem-vindo a nossa loja virtual</h1>
<p><?= $nome; ?> veja nossas ofertas</p>

<h2>Confira nossos produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>