<?php
if(isset($_POST['submit'])){
  include("cn.php");
  if($conexion->connect_error){
      die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }else{
      $Usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : 0;
      $Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : 0;
      $Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : 0;
      $Edad = isset($_POST['Edad']) ? $_POST['Edad'] : 0;
      $Correo = isset($_POST['Correo']) ? $_POST['Correo'] : 0;
      $Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : 0;
      $contra = isset($_POST['Passwd']) ? $_POST['Passwd'] : 0;
      $contraRep = isset($_POST['PasswdRep']) ? $_POST['PasswdRep'] : 0;
      if($contra != $contraRep){
        echo "Las contraseñas no coinciden <br>";
        echo "<span style=\"color:Green;font:bold 15pt 'Lucida Sans';\"><a
        href=registro.php>Intentar de nuevo</a>";
      }else{
        $encriptada = password_hash($contra, PASSWORD_BCRYPT);
        $query="INSERT INTO estudiante (Usuario_estudiante, Pass, Nombres_estudiante, Apellidos_estudiante, Edad, Correo, Telefono, Codigo_rol, Grupo_proyecto, Activo)
        VALUES ('$Usuario', '$encriptada', '$Nombre', '$Apellido', '$Edad', '$Correo', '$Telefono', '1', '0','1')";
        if($conexion->query($query) === TRUE){
          echo "Usuario registrado con éxito<br>"; //Si el query se realiza con éxito
          echo "<span style=\"color:Green;font:bold 15pt 'Lucida Sans';\"><a
          href=../registro.php>Nuevo Registro</a>";
        }else{ //Si el query presenta un error
          "Error: " . $query . "<br>" . $conexion->error;
        }
      }
    }
  $conexion->close();
}else{
  echo "No se pudo realizar el registro";
}
?>
