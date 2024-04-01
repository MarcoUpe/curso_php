<?php

    $textoHtml = "<p?>Testanto paragrafo</p> <div>Uma Div</div> <p>Outro paragrafo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);
    
    echo $salvarTextoBanco;

?>