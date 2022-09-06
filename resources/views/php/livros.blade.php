<?php

    $_DATABASE = [
    'HOSTNAME' => 'localhost',
    'DBNAME' => 'laravel',
    'USER' => 'root',
    'PWD' => '',
];
try {
    $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
    $livros = [];

        $pesquisa = $db->query('SELECT * FROM livros');


    foreach ($pesquisa as $livro)
        {
        $livros[] = [
            'id' => $livro['id'],
            'nome' => $livro['nome'],
            'img' => $livro['img']

        ];
    }
    print json_encode($livros);
} catch (PDOException $e) {
    die($e->getMessage());
}
?>
