<?php
require_once '../controller/UsuarioC.php';
$CadUsuario = new UsuarioC();
$listaUser = $CadUsuario->getUsuarios();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form action="<?php $CadUsuario->inserir(); ?>" method="POST">
        <input type="text" name="nome" placeholder="Nome aqui...">
        <br /><br />
        <select name="perfilAcesso">
            <option value="">Perfil Acesso</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select>
        <br /><br />
        <input type="text" name="usuario" placeholder="User aqui...">
        <br /><br />
        <input type="password" name="senha" minlength="8" placeholder="Digite aqui...">
        <br /><br />
        <input type="submit" name="Salvar" value="Salvar">
        <input type="reset" value="Limpar">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">
        <input type="button" value="Lista Usuários" onclick="location.href='listaUsuarios.php'">

    </form>
    <br />
    
</body>

</html>