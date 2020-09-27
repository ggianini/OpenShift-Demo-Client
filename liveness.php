<?php
$filename = '/tmp/liveness';

if (file_exists($filename)) {
    header("HTTP/1.1 500 Internal Server Error");
} else {
    echo "Estou vivo! \n Essa mensagem significa que a aplicação está saudável. \n Caso essa URL devolva um erro 500, significa que o liveness falhou. Nesse caso o OpenShift irá deletar o pod";
}
?>
