<?php

    $players = [
        "Marco" => 98,
        "Lucas" => 94,
        "Links" => 87,
        "Pedro" => 85,
        "Andrielly" => 95,
        "Mariane" => 84,
        "Daniel" => 90
    ];
?>

<h2> Ranking </h2>



<table border="1" align="left">
    <caption> Ranking dos melhores Players! </caption>
    <tr>
        <th> Nick </th>
        <th> Pontuacao </th>
    </tr>
    <?php arsort($players); foreach($players as $nome => $pontuacao): ?>
        <tr>
            <td> <?= $nome; ?> </td>
            <th> <?= $pontuacao; ?> </th>
        </tr>
        <?php endforeach; ?>
</table>