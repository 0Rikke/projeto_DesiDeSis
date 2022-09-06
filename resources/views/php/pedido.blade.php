<?php
    $idUser = $_POST['idUser'];
    $idLivro = $_POST['idLivro'];
    $estatus = $_POST['estatus'];

    $_DATABASE = [
    'HOSTNAME' => 'localhost',
    'DBNAME' => 'laravel',
    'USER' => 'root',
    'PWD' => '',
];
try {
    $db = new PDO("mysql:host={$_DATABASE['HOSTNAME']};dbname={$_DATABASE['DBNAME']}", $_DATABASE['USER'], $_DATABASE['PWD']);
    $consulta = $db->prepare("INSERT INTO pedidos(idUser,idLivro,estatus) VALUES(:idUser,:idLivro,:estatus)");
            $consulta->execute([
                ':estatus' => $estatus,
                ':idUser' => $idUser,
                ':idLivro' => $idLivro

            ]);



} catch (PDOException $e) {
    die($e->getMessage());
}
?>
