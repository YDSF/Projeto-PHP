<?php
require_once '../controller/CUsuario.php';
$CadUsuario = new CUsuario();
$listaUser = $CadUsuario->getUsuarios();

?>
<!DOCTYPE html>
<html lang="en">
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
                        <td><?php echo $user['perfilAcesso']  ?></td>
                        <td><?php echo $user['usuario']  ?></td>
                       
                        <td>---</td>
                    </tr>
                <?php endforeach; ?>
            </body>
        </table>
        <input type="button" value="Ocultar lista" onclick="document.getElementById('lista').style.visibility='hidden';">
        <input type="button" value="Voltar" onclick="location.href='../index.php'">


    </div>
</body>
</html>