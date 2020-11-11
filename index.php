<?php
$myfile = fopen("tr.txt", "a") or die("Unable to open file!");

$log=$_GET['evento'].','.$_GET['descricao'].','.$_GET['data'].','.$_GET['identificador']."\n";

fwrite($myfile, $log);
echo 'Log enviado com sucesso';
?>