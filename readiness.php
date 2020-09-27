<?php
$filename = '/tmp/readiness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Estou pronto!";
    echo "";
    echo "Essa mensagem significa que a aplicação está pronta para ser balanceada.";
    echo "Caso essa URL devolva um erro 500, significa que o readiness falhou. Nesse caso o OpenShift irá retirar o pod do balanceador";
}
?>
