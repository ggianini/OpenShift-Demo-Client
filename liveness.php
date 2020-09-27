<?php
$filename = '/tmp/liveness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Estou vivo!";
    echo "";
    echo "Essa mensagem significa que a aplicação está saudável.";
    echo "Caso essa URL devolva um erro 500, significa que o liveness falhou. Nesse caso o OpenShift irá deletar o pod";
}
?>
