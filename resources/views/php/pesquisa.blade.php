<?php
    $nome = $_POST['pesquisa'];

    $_DATABASE = [
    'HOSTNAME' => 'localhost',
    'DBNAME' => 'laravel',
    'USER' => 'root',
    'PWD' => '',
];
try {
    $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
    $respostas = [];

        $sth = $db->query('SELECT nome FROM livros where nome LIKE "%'.$nome.'%"');

        $rows = $sth->fetchAll();

    foreach ($rows as $resposta)
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
