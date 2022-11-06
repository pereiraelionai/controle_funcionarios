<?php

include('libs/smarty.class.php');
$smarty = new smarty;

function conectar() {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'sistema_gerenciamento';

    $con = new mysqli($servidor, $usuario, $senha, $bd);
    return $con;
}