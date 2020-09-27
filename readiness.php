<?php
$filename = '/tmp/readiness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
        echo "Estou pronto!";
        echo "<br><hr>";
        echo "Essa mensagem significa que a aplicação está pronta para ser inserida no balanceamento.";
        echo "<br><hr>";
        echo "Caso essa URL devolva um erro 500, significa que o liveness falhou. Nesse caso o OpenShift irá remover a aplicação do balanceador.";
}
?>
