<p>Testando include e require</p>

<?php
    include "arq.php"; // arq não existe
    // INCLUDE continua a execução
    //  REQUIRE para a execução = FATAL ERROR
?>

<?php
    include "teste.php";  
?>

<p>Arquivo do include</p>

<?php
    include "arquivos/funcao.php";  
?>
