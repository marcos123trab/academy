<?php
$myfile = fopen("tr.txt", "r");
$identificador=$_GET['identificador'];
$count=0;


while(!feof($myfile))

{

$linha = fgets($myfile, 1024);
if (strpos($linha, $identificador) !== false) {

    echo $linha.'<br />';
$count=1;
}

}

if($count==0) {
    echo 'A pesquisa nao retornou nenhum valor'.'<br />';
}
fclose($myfile);
?>