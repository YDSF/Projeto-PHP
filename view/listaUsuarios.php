<?php
require_once '../controller/CUsuario.php';
$CadUsuario = new CUsuario();
$listaUser = $CadUsuario->getUsuarios();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

</head>

<body>
    <div id="lista">
        <h2>Lista Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Usuário</th>
                    <th>Perfil Acesso</th>
                    <th>Usuário</th>
                    <th>Funções</th>

                </tr>
            </thead>

            <body>
                <?php foreach ($listaUser as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUsuario']  ?></td>
                        <td><?php echo $user['nomeUsuario']  ?></td>
                        <td><?php if($user['perfilAcesso'] == "admin"){echo "Administrador";} elseif ($user['perfilAcesso'] == "user") {echo "Usuário";}?></td>
                        <td><?php echo $user['usuario']  ?></td>
                        <td>
                            <form action="editarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" name="editar" value="Editar">
                            </form>
                            <form action="../controller/deletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">
                                <input type="submit" name="deletar" value="Deletar">
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </body>
        </table>

        <input type="button" value="Voltar" onclick="location.href='cadUsuario.php'">


    </div>
</body>

</html>