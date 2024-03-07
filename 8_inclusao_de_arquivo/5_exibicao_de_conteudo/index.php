<?php

    $nome = "Marco";
    $sobrenome = "Aurelio";

?>

<form action="">
    <div>
        <input type="text" value="<?php echo $nome;?>"> <!-- PHP chamado normal -->
    </div>
    <div>
        <input type="text" value="<?= $sobrenome;?>"> <!-- PHP forme resumida-->
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>