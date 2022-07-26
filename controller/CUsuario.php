<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of CUsuario
 *
 * @author jbferraz
 */
class CUsuario {

    //put your code here
    public function inserir() {
        if (isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $perfilAcesso = $_POST['perfilAcesso'];
            
            $pdo = require_once '../pdo/Connection.php';
            $sql = "insert into usuario values (null,?,?,?,?)";
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

    public function getUsuarios() {
        $pdo = require_once '../pdo/Connection.php';
        $sql = "select idUsuario, nomeUsuario, usuario, perfilAcesso from usuario";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }

    public function deletar() {
        if (isset($_POST['deletar'])) {
            $id = (int) $_POST['idUsuario'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "delete from usuario where idUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $id, PDO::PARAM_INT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("Refresh: 0");
        }
    }

    public function getUsuarioById($id) {
        $pdo = require_once '../pdo/Connection.php';
        $sql = "select idUsuario, nomeUsuario, usuario "
                . "from usuario where idUsuario = ?";
        $sth = $pdo->prepare($sql);
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }

    public function trocaSenha() {
        if (isset($_POST['trocaSenha'])) {
            $idUsuario = $_POST['idUsuario'];
            $novaSenha = $_POST['novaSenha'];
            $pdo = require_once '../pdo/Connection.php';
            $sql = "update usuario set senha = ? where idUsuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $senhaPH, PDO::PARAM_STR);
            $senhaPH = password_hash($novaSenha, PASSWORD_DEFAULT);
            $sth->bindParam(2, $idUsuario, PDO::PARAM_INT);
            $sth->execute();
            unset($sth);
            unset($pdo);
            header("Location: usuario.php");
        }
    }

}
