<?php
$filename = '/tmp/falha-dependencia';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
        echo "Todas as dependências ok!";
        echo "<br><hr>";
        echo "Caso essa URL devolva um erro 500, o OpenShift irá remover a aplicação do balanceador.";
}
?>
