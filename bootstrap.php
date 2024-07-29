<?php

// Ativa a exibição de erros e define o nível de relatórios de erros
ini_set('display_error', 1);
ini_set('display_startop_error', 1);
error_reporting(E_ERROR);

define('HOST','localhost');
define('BANCO','api');
define('USER','localhost');
define('SENHA','');

define('DS', DIRECTORY_SEPARATOR);
define('DIR_APP', __DIR__);
define('DIR_PROJETO', 'ApiRest');

if(file_exists('autoload.php')){
    include('autoload.php');
}else{
    echo 'Erro ao incluir bootstrap';
    exit;
}