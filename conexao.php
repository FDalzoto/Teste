<?php

mysqli_report(MYSQLI_REPORT_OFF);

$con = mysqil_connect($host = '127.0.0.1', $dbname = 'empresa', $user = 'root');

if(!$con){
    echo "Verifique o usuário, senha e o nome do BD" .
    'falha ao conectar: ' . mysqil_connect_error();
    }else{
        echo "Conexao estabelecida com suscesso!";
    }