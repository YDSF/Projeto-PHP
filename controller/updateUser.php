<?php 
if (isset($_POST['salvar'])) {
    $id = (int) $_POST['idUsuario'];
    $nomeUsuario = $_POST['nome'];
    $perfilAcesso = $_POST['perfilAcesso'];
    $usuario = $_POST['usuario'];
    $pdo = require_once '../pdo/Connection.php';
    $sql = "update usuario set nomeUsuario = ?, perfilAcesso = ?, usuario = ? where idUsuario = ?";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(4, $id, PDO::PARAM_INT);
    $sth->bindParam(1, $nomeUsuario, PDO::PARAM_STR);
    $sth->bindParam(2, $perfilAcesso, PDO::PARAM_STR);
    $sth->bindParam(3, $usuario, PDO::PARAM_STR);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("location: ../view/listaUsuarios.php");
}
