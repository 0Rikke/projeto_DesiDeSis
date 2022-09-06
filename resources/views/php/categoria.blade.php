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
        $respostas[] =[
            'id' => $resposta['id'],
            'nome' => $resposta['nome'],
            'img' => $resposta['img']

        ];
    }
    print json_encode($respostas);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>
