<?php

class UsuarioC
{
    public function inserir()
    {
        if (isset($_POST['Salvar'])) {
            
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $perfilAcesso = $_POST['perfilAcesso'];
            var_dump($_POST);
            $pdo = require_once '../pdo/Connection.php';
            $sql = "insert into usuario values (null, ?,?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $nome, PDO::PARAM_STR);
            $sth->bindParam(2, $usuario, PDO::PARAM_STR);
            $sth->bindParam(3, $senhaEc, PDO::PARAM_STR);
            $sth->bindParam(4, $perfilAcesso, PDO::PARAM_STR);
            $senhaEc = password_hash($senha, PASSWORD_DEFAULT);
            $sth->execute();
            unset($sth);
            unset($pdo);
        }
    }
    public function getUsuarios()
    {
        $pdo = require_once '../pdo/Connection.php';
        $sql = "select IdUsuario, nomeUsuario, perfilAcesso, Usuario from Usuario";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }

    public function deletar()
    {
        if (isset($_POST['deletar'])) {
            $id = (int)$_POST['IdUsuario'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "delete from usuario where IdUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $id, PDO::PARAM_INT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("Refresh: 0");
            $sth = $pdo->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
            unset($sth);
            unset($pdo);
            return $result;
        }
    }
    public function getUsuarioById($id)
    {
        $pdo = require_once '../pdo/Connection.php';
        $sql = "Select IdUsuario, nomeUsuario, perfilAcesso, usuario" . "from usuario where idUsuario = ?";
    }

    public function trocaSenha()
    {
        if (isset($_POST['trocarSenha'])) {
            $idUsuario = $_POST['idUsuario'];
            $novaSenha = $_POST['novaSenha'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "update usuario set senha = ? where idUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(2, $senhaPH, PDO::PARAM_INT);
            $senhaPH = password_hash($novaSenha, PASSWORD_DEFAULT);
            $sth->bindParam(2, $IdUsuario, PDO::PARAM_INT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("Location: usuario.php");
        }
    }
}
