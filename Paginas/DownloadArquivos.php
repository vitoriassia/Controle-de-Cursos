<?php
$pasta = "arquivos/";
$listar = new RecursiveDirectoryIterator($pasta);
//$recursivo = new RecursiveIteratorIterator($listar);

foreach ($listar as $obj) {
    echo "Arquivo: <a href='$obj' download>$obj</a><br />";
}