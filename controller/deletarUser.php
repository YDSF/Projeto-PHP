<?php 
if (isset($_POST['deletar'])) {
    $id = (int) $_POST['idUsuario'];
    $pdo = require_once '../pdo/Connection.php';
    $sql = "delete from usuario where idUsuario = ?";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(1, $id, PDO::PARAM_INT);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("location: ../view/listaUsuarios.php");
}
