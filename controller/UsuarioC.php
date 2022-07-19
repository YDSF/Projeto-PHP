<?php

class UsuarioC
{
    public function inserir()
    {
        if (isset($_POST['salvar'])) {
            $nome = $_POST['nome'];
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $pdo = require_once '../pdo/Connection.php';
            $sql = "insert into usuario values (null, ?,?,?)";
            $sth = $pdo->prepare($sql);
            $sth->bindParam(1, $nome, PDO::PARAM_STR);
            $sth->bindParam(2, $usuario, PDO::PARAM_STR);
            $sth->bindParam(3, $senha, PDO::PARAM_STR);
            $senha = password_hash($senha, PASSWORD_DEFAULT);

            
        }
    }
}
