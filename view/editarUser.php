<?php 
$id= null;
if(isset($_POST ['editar'])){
    $id = $_POST['idUsuario'];

}

require_once '../controller/CUsuario.php';
$cadUser= new $CUsuario();
$user = $cadUser->getUsuarioById($id);
var_dump($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>