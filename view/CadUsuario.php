<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    //posteriormente iremos trabalhar com session
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Usuário</title>
    </head>
    <body>
        <h1>Cadastro de Usuário</h1>
        <form action="<?php $cadUsuario->inserir(); ?>" method="POST">
            <input type="text" name="nome" placeholder="Nome aqui...">
            <br/><br/>
            <select name="perfilAcesso">
                <option value="">Selecione...</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
            </select>
            <br/><br/>
            <input type="text" name="usuario" placeholder="User aqui...">
            <br/><br/>
            <input type="password" name="senha" minlength="8" 
                   placeholder="Senha aqui...">
            <br/><br/>
            <input type="submit" name="salvar" value="Salvar">
            <input type="reset" value="Limpar">
            <input type="button" value="Voltar" 
                   onclick="location.href='../index.php'">
            <input type="button" value="Lista Usuários" 
                   onclick="location.href='listaUsuarios.php'">
        </form>
    </body>
</html>
