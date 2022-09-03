<?php
    $tipo = $_POST['tipo'];

    $_DATABASE = [
    'HOSTNAME' => 'localhost',
    'DBNAME' => 'laravel',
    'USER' => 'root',
    'PWD' => '',
];
try {
    $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
    $respostas = [];

        $sth = $db->query('SELECT * FROM `livros` WHERE tipo = "'.$tipo.'"');


    foreach ($sth as $resposta)
        {
        $respostas[] = [
            'nome' => $resposta['nome'],

        ];
    }
    print json_encode($respostas);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>
