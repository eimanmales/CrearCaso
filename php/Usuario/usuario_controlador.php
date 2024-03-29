<?php
require_once './usuario_modelo.php';

$usuario = htmlspecialchars(trim("$_POST[usuario]"));
$password = htmlspecialchars(trim("$_POST[password]"));
$datos = array("usuario"=>$usuario, "password"=>$password);

switch ($_POST['accion']){
   
    case 'login':
        $usuario = new Usuario();
        $usuario->consultar($datos);

        if($usuario->getIdUsu() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            if(password_verify($datos['password'],$usuario->getPassword())){
                session_start();
                $_SESSION['user'] = $usuario->getUser();
                $_SESSION['nombre'] = $usuario->getNomUsu();
                $_SESSION['telefono'] = $usuario->getTeleUsu();
                $_SESSION['email'] = $usuario->getEmailUsu();
                $_SESSION['empresa'] = $usuario->getEmpUsu();
                
                $respuesta = array(
                    'respuesta' =>'existe'
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'no existe'
                );
            }
            
        }
        echo json_encode($respuesta);
        break;
   
}
?>