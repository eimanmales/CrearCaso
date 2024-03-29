<?php
  session_start();

  if(isset($_GET["cerrar_session"]) and $_GET["cerrar_session"]==true){
    session_destroy();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/estilo.css">
</head>
<body>
    
    <div id="content">
        <div id="cancelar">
            <a id="atras" href="../../index.html">Cancelar</a>
    
        </div>
        <br>
        <div id="login">
            <form action="login.php" method="post">
                <input type="text" id="usuarioUsu" name="usuario" placeholder="Usuario" required>
                <input type="password" id="passwordUsu" name="password" placeholder="Contraseña" required>
                <input type="submit" id="inicio" value="Inicio">
                <input type="hidden" value="login" name="accion">
            </form>
        </div>
        
    </div>
</body>
</html>