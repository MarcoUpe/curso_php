<?php
require 'vendor/autoload.php';

// Inicialize o objeto Smarty
$smarty = new Smarty;

// Define o diretório dos templates
$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

// Se o formulário for submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo "nome" foi preenchido
    if (!empty($_POST["nome"])) {
        $nome = $_POST["nome"];
        $smarty->assign('nome', $nome);
        $smarty->display('exibir_nome.tpl');
        exit();
    } else {
        $smarty->assign('erro', 'O campo nome está vazio.');
    }
}

// Exibe o formulário
$smarty->display('formulario.tpl');
?>
